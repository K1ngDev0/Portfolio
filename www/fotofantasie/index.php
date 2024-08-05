<!doctype html>
<html class="no-js" lang="">



<body>

  <!-- Add your site or application content here -->
<?php 
require_once("header.php");
?>


<main>
  <div class="wrapper">

    <?php
    if(isset($_GET['msg'])){
    echo $_GET['msg'];
    }
    ?>

    <div class="fotofantasie">
      <h2>Fotofantasie</h2>
        <div class="about">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci repellat earum, impedit laudantium consequuntur rem corporis dolorum perspiciatis nostrum repellendus, iste molestias deleniti quia praesentium similique. Laborum earum veniam tempore. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Vitae, ducimus dolorum, dolores quas quos sunt, officiis quasi laborum quisquam autem doloribus ad? Eaque, praesentium! Veniam, corporis! Repellat dicta, illum optio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolore voluptatem inventore expedita, cumque ab mollitia commodi facilis possimus modi maiores, blanditiis voluptas architecto necessitatibus! Culpa quod maiores eligendi esse!</p>
          <img src="img/header_img.jpg" alt="fotofantasie">
        </div>  
        <div class="reviews">
      <h2>Recente reviews</h2>
          <div class="review">
            <h3>Super goed bedrijf!</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate quod, officia distinctio commodi deserunt reprehenderit molestiae saepe illum repellat, enim vitae atque cum ducimus. Voluptatum officia id unde sunt minus! Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Vel, eveniet eum, ut dicta vitae eos maxime amet sunt nam beatae minima rem illo, cumque adipisci pariatur fuga? Tempora, optio, excepturi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ipsum nemo et quibusdam illo sunt eius nihil unde impedit expedita nesciunt, vitae odio aspernatur maiores praesentium? Fugiat accusamus repudiandae doloremque? </p>
          </div>
          <div class="review">
            <h3>Namen snel contact op</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus non autem, nisi praesentium, earum nemo tenetur facilis alias animi. Alias voluptates similique error perferendis ad totam in consequuntur nostrum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. A labore illum eos deserunt, dolorum, autem quidem sapiente error, rem dicta ducimus. Ad laudantium reprehenderit consequuntur minima optio culpa doloribus aspernatur!</p>
          </div>  
          <div class="review">
            <h3>Onaardige mail</h3>
            <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Assumenda itaque eum deleniti. Nisi illum quisquam deserunt corporis alias optio non facilis pariatur quibusdam veritatis voluptate similique, aut, asperiores fugit minus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores minima quisquam ipsum incidunt dignissimos blanditiis optio nesciunt autem vel saepe, earum, nisi, repellendus unde temporibus illum, maxime alias vitae reiciendis.</p>
          </div>  
          <div class="review">
            <h3>Snelle service</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, similique libero adipisci atque quis suscipit. Repudiandae maiores distinctio velit facere, pariatur assumenda sint aliquam ex maxime, quisquam molestiae ratione corrupti!</p>
          </div>  
          <div class="review">
            <h3>Kan het iedereen aanbevelen</h3>
            <p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Velit similique suscipit optio dolorem porro est assumenda magni tempore at, alias, quisquam. Maiores, fugiat, non? Laudantium, amet, in? Consequatur, nobis, blanditiis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit saepe aspernatur quae dignissimos. Dolorum perspiciatis cupiditate fugit quo voluptate voluptas earum dignissimos nobis magnam animi. Qui rem esse atque architecto. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, blanditiis. Odit ipsum inventore illum voluptates rerum illo. Reiciendis facere aliquam laborum repellendus ea ipsam corrupti ut rerum, explicabo accusamus, repellat? Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Doloribus vel eligendi possimus in recusandae. Fugit eligendi, nostrum nulla consectetur tempore molestias atque provident eaque quis amet error, recusandae consequatur minima.</p>
          </div>  
       </div>   
    </div>
  </div>

</main>


<?php
require_once("footer.php");
?>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
