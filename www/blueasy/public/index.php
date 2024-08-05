<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"?>
    <title>Blueasy</title>
</head>
<body>
    <div class="heroheader" id="home">
        <?php include "header.php"?>
        <div class="hero">
            <div class="herotxt">
                <p>"I'm looking for the unexpected.</p>
                <p>I'm looking for things I've never seen before."</p>
            </div>
        </div>
    </div>
    <div class="services" id="services">
        <div class="wrapper">
            <div class="title">
                <h2><span class="underline">Ser</span>vices</h2>
            </div>
            <div class="service-cards">
                <div class="service-card">
                    <img src="img/Icon_coffee.png" alt="coffee">
                    <h3>Coffee</h3>
                    <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                </div>
                <div class="service-card">
                    <img src="img/Icon_instant.png" alt="coffee">
                    <h3>Instant</h3>
                    <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                </div>
                <div class="service-card">
                    <img src="img/Icon_serious.png" alt="coffee">
                    <h3>Serious</h3>
                    <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                </div>
                <div class="service-card">
                    <img src="img/Icon_frame.png" alt="coffee">
                    <h3>Frame</h3>
                    <p>Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. Tiramisu applicake jujubes.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="quota">
        <img src="img/quotation.png" alt="quotation">
    </div>
    <div class="testimonials" id="testimonials">
        <div class="wrapper">
            <h2><span class="underline2">Tes</span>timonials</h2>
            <p class="testimonial">Applicake chocolate cake water toffee pie soufflé wafer. Tart marshmallow wafer macaroon cheesecake jelly. Gingerbread cookie soufflé sweet roll sweet roll jelly-o.</p>
            <p class="author">-Walter White</p>
        </div>
    </div>
    
    <div class="contact" id="contact">
        <div class="wrapper">
            <h2><span class="underline">Con</span>tact</h2>
            <form action="../app/Http/Controllers/contactController.php" method="POST">
            
                <div class="formgroup">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="slogan">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam omnis et amet voluptates inventore voluptatum eum aspernatur quisquam! Rerum qui laudantium maiores id vero minima sed nulla! Nobis, cum.</p>
                </div>
                <div class="formgroup">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="adress">
                    <p>Curio</p>
                    <p>adres</p>
                    <p>Breda</p>
                    <p>telefoonnummer</p>
                </div>
                <div class="formgroup wide">
                    <label for="message">message</label>
                    <textarea name="message" id="message" cols="30" rows="12"></textarea>
                </div>
                <div class="formgroup">
                    <input type="submit" value="message" class="submit">
                </div>

            </form>
        </div>
    </div>

    <?php include "footer.php"?>
</body>
</html>