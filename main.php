<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pancit Canton</title>
</head>
<body>

    <form action="logout.php" method="post" style="display:none" id="logoutForm">
    </form>

    <div class="main-container">

        <div class="sidenav">.
            <div class="side-links">
                
                <div class="profile-icon">
                        <img src="assets/profile.png" alt="">
                </div>
                <div class="out">
                <a class="nav-links" href="#" onclick="document.getElementById('logoutForm').submit(); return false;    ">Log Out</a>
                <a class="nav-links" href="logs.php">History Log</a>
                </div>
          
            </div>
        </div>

        <div class="main">

            <h1>
            <img src="assets/noodles(1).png" alt="">    
            Pancit Canton</h1>

            <div class="header">
            <div class="links">
            <a class="nav-links" href="#">Blog</a>
            <a class="nav-links" href="#">Best Sellers</a>
            <a class="nav-links" href="#">Promos</a>
            <a id="checkout-bloom" class="nav-links" href="your_cart.php">Your Cart / Checkout</a>
            </div>
            </div>

            <div class="display-container">

            <div class="product">
             <div class="p-image">
                <img src="assets/pc_kalamansi.png" alt="">
            </div>
                <div class="description">
                    <h3>Pancit Canton - Kalamansi</h3>
                    <div class="buy-section">
                    <h2><b>PHP 19.0</b></h2>
                    <span>

                        <form action="test_cart.php" method="get">

                        <input type="hidden" name="form_id" value="PC01">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Pancit Canton - Kalamansi">
                        <input type="hidden" name="product_price" value="19.0">
                        <button type="submit">Add to Cart</button>

                         </form>

                    </span>
                    </div>
                </div>
            </div>

             <div class="product">
            <div class="p-image">
                <img src="assets/pc_extrahotchili.png" alt="">
            </div>
            <h3>Pancit Canton - Extra Hot Chili</h3>
            <div class="buy-section">
                    <h2><b>PHP 19.0</b></h2>
                    <span>
                    
                    <form action="test_cart.php" method="get">

                    <input type="hidden" name="form_id" value="PC02">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Pancit Canton - Extra Hot Chili">
                    <input type="hidden" name="product_price" value="19.0">
                    <button type="submit">Add to Cart</button>
                    </form>


                    </span>
                    </div>
             </div>

             <div class="product">
            <div class="p-image">
            <img src="assets/pc_chilimansi.png" alt="">
            </div>
            <h3>Pancit Canton - Chilimansi</h3>
            <div class="buy-section">
                    <h2><b>PHP 19.0</b></h2>
                    <span>
                    <span>
                    
                    <form action="test_cart.php" method="get">
                    <input type="hidden" name="form_id" value="PC03">
                    <input type="hidden" name="product_name" value="Pancit Canton - Chilimansi">
                    <input type="hidden" name="product_price" value="19.0">
                    <button type="submit">Add to Cart</button>
                    </form>


                    </span>
                    </span>
                    </div>
            </div>
        
        <div class="product">
            <div class="p-image">
                <img src="assets/pc_original.png" alt="">
            </div>
            <h3>Pancit Canton - Original</h3>
            <div class="buy-section">
                        <h2><b>PHP 19.0</b></h2>
                        <span>
                    
                    <form action="test_cart.php" method="get">
                    <input type="hidden" name="form_id" value="PC04">
                    <input type="hidden" name="product_name" value="Pancit Canton - Original">
                    <input type="hidden" name="product_price" value="19.0">
                    <button type="submit">Add to Cart</button>
                    </form>


                    </span>
                    </div>
        </div>

        <div class="product">
            <div class="p-image">
                <img src="assets/pc_sweetandspicy.png" alt="">
            </div>
            <h3>Pancit Canton - Sweet and Spicy</h3>
            <div class="buy-section">
                    <h2><b>PHP 19.0</b></h2>
                    <span>
                    
                    <form action="test_cart.php" method="get">
                    <input type="hidden" name="form_id" value="PC05">
                    <input type="hidden" name="product_name" value="Pancit Canton - Sweet&Spicy">
                    <input type="hidden" name="product_price" value="19.0">
                    <button type="submit">Add to Cart</button>
                    </form>


                    </span>
                    </div>
             </div>
          </div>

           

        </div>

        <footer>

        <div class="footer-main">

        <div class="company-name">
            <h2>Pancit Canton</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <br>
                Aut sed debitis sit magnam rem, illo distinctio voluptatem
                <br> 
                modi aperiam consectetur omnis, expedita deleniti sunt 
                <br>
                molestiae dicta doloremque incidunt? Harum, doloremque.</p>
        </div>

        <div class="footer-products">
            <h4>PRODUCTS</h4>
            <p>Dinosaur</p>
            <p>Dragon</p>
            <p>Unicorn</p>
        </div>

        <div class="footer-useful">
            <h4>USEFUL LINKS</h4>
            <p>Your Account</p>
            <p>Become an Affiliate</p>
            <p>Help</p>
        </div>

        <div class="contact">
            <h4>CONTACT</h4>
            <p>Address: 123 Main St, Bacolod Philippines</p>
            <p>kleynino15@gmail.com</p>
            <p>+63 994 266 4944</p>

        </div>

        <!--Infinity free Creds:
        
        Account - if0_37544139 
        User: 
        Password: uLlp3uTkAAL -->

        </div>

        <div class="footer-last">
            <p>© 2024 Copyright: Pancit Canton</p>
        </div>

        </footer>
    </div>
</body>
</html>

