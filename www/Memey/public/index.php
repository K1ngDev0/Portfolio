<?php
    require_once("components/head.php");
?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var timezoneOffset = new Date().getTimezoneOffset();
        var hoursOffset = Math.floor(Math.abs(timezoneOffset) / 60);
        var minutesOffset = Math.abs(timezoneOffset) % 60;
        var formattedOffset = (timezoneOffset < 0 ? "+" : "-") +
                              ("0" + hoursOffset).slice(-2) + ":" +
                              ("0" + minutesOffset).slice(-2);
        document.cookie = "timezoneOffset=" + formattedOffset;
    });
</script>
<title>Memey | Home</title>
</head>
<body>
<?php
    require_once("components/header.php");
    require_once("../config/conn.php");

    $query = 'SELECT * FROM posts ORDER BY RAND()';
    $statement = $conn->prepare($query);
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <?php require_once("components/topbar.php"); ?>

    <div class="postsContainer">
        <?php foreach ($posts as $post): ?>
            <div class="postContainer">
                <div class="postInfo">
                    <p><?php 
                        if(isset($_SESSION['username']) && $_SESSION['username'] == $post['creator'] )
                        {
                            echo "You ";
                        }
                        else {
                            echo $post['creator']; 
                        }
                     ?> |</p>
                    <p class="postTime" data-time="<?php echo $post['created_at']; ?>">
                        <!-- time will be displayed here by JavaScript -->
                    </p>
                </div>
                <h2><?php echo $post['title']; ?></h2>
                <?php if (!empty($post['filename'])): ?>
                    <img src="<?php echo $post['filename']; ?>" alt="<?php echo $post['filename']; ?>" />
                <?php endif; ?>
                <nav class="PostButtons">
                    <form action="../app/http/controllers/postController.php?action=delete&id=<?php echo $post['id']?>" method="POST" enctype="multipart/form-data">
                        <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                            <i class="fa-solid fa-trash fa-1x"></i>
                        </button>
                    </form>
                </nav>
            </div> 
        <?php endforeach; ?>
    </div>
</main>
<?php require_once("components/loginModal.php"); ?>
<?php require_once("components/registerModal.php"); ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    function getTimeDifference(timestamp) {
        var now = new Date();
        var postTime = new Date(timestamp);
        var diffInSeconds = Math.floor((now - postTime) / 1000);

        var intervals = [
            { label: 'year', seconds: 31536000 },
            { label: 'month', seconds: 2592000 },
            { label: 'day', seconds: 86400 },
            { label: 'hour', seconds: 3600 },
            { label: 'minute', seconds: 60 },
            { label: 'second', seconds: 1 }
        ];

        for (var i = 0; i < intervals.length; i++) {
            var interval = intervals[i];
            var count = Math.floor(diffInSeconds / interval.seconds);
            if (count >= 1) {
                return count + ' ' + interval.label + (count !== 1 ? 's' : '') + ' ago';
            }
        }
    }

    function updatePostTimes() {
        var postTimes = document.querySelectorAll('.postTime');
        postTimes.forEach(function(postTime) {
            var timestamp = postTime.getAttribute('data-time');
            postTime.textContent = getTimeDifference(timestamp);
        });
    }

    updatePostTimes();
    setInterval(updatePostTimes, 60000);
});
</script>
</body>
</html>