<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product page - Intelligent Dive</title>
    <meta name="description" content="" />
    <link rel="alternate" href="" hreflang="en" />
    <link rel="icon" href="./assets/fav/favicon.ico" type="image/x-icon">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="intelligentdive.com" />
    <meta property="og:title" content="intelligent dive" />
    <meta property="og:description" content="Empowering Innovators with AI, Blockchain, and Software Solutions. Our leading software company specializes in AI, blockchain, web, mobile, and software development, offering cutting-edge services such as MVP development and SAAS support. Unlock your business's potential with Intelligent Dive and dive into the future of intelligent technology." />
    <meta property="og:image" content="Intelligent Dive" />
    <!-- ./Open Graph / Facebook -->

    <!-- CSS Files Section -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
</head>

<body>
    <!-- Navbar Section -->
    <?php include_once 'inc/nav.php' ?>
    <!-- Navbar Section END -->

    <!-- Inner Header Section -->
    <div class="inner-header">
        <div class="header-block">
            <div class="left-col">
                <h1 class="title">People Help</h1>

                <div class="text-block">
                    <p class="text">Highlights</p>
                    <div class="list-block">
                        <div class="list">Which of my products sell best?</div>
                        <div class="list">How often do they buy?</div>
                        <div class="list">How many carts get abandoned?</div>
                        <div class="list">What’s my profitability?</div>
                        <div class="list">Who are my top customers?</div>
                        <div class="list">Where are my sales coming from?</div>
                    </div>
                </div>
            </div>
            <div class="right-col">
                <div class="hero-bg">
                    <img src="assets/images/proudct-hero-bg.png" alt="hero_bg">
                </div>
            </div>
        </div>
        <div class="info-block">
            <p>100M Downloaders</p>
            <div class="line"></div>
            <p>50M Active User</p>
        </div>
        <div id="parallax">
        </div>
    </div>
    <!-- Inner Header Section END -->

    <!-- About Section -->
    <div class="about-section">
        <div class="left-col">
            <img src="assets/images/phone.png" alt="phone-img">
        </div>
        <div class="right-col">
            <div class="title-block">
                <h2 class="title">Overview</h2>
            </div>

            <div class="text-block">
                <div class="title">Hello everyone! 🙌Show my Eco </div>
                <p class="text">
                    Ecommerce Analytics Admin Dashboard. Get the right answers. Make better decisions. Grow your sales. What problems it is solving. Which of my products sell best? How often do they buy? How many carts get abandoned? What’s my profitability? Who are my top customers? Where are my sales coming from?Don't forget to follow me!
                </p>
            </div>
        </div>
    </div>
    <!-- About Section END -->

    <!-- Inner Header Section -->
    <div class="inner-header">
        <div class="header-block">
            <div class="left-col">
                <div class="text-block">
                    <p class="text">Highlights</p>
                    <div class="list-block">
                        <div class="list">Which of my products sell best?</div>
                        <div class="list">How often do they buy?</div>
                        <div class="list">How many carts get abandoned?</div>
                        <div class="list">What’s my profitability?</div>
                        <div class="list">Who are my top customers?</div>
                        <div class="list">Where are my sales coming from?</div>
                    </div>
                </div>
            </div>
            <div class="right-col">
                <div class="hero-bg">
                    <img src="assets/images/product-bg.png" alt="hero_bg">
                </div>
            </div>
        </div>
        <div class="info-block">
            <p>10M Users</p>
            <div class="line"></div>
            <p>56+ Countries are User</p>
        </div>
    </div>
    <!-- Inner Header Section END -->

    <!-- Overview Section -->
    <div class="overview-section">
        <div class="left-col">
            <img src="assets/images/overview.png" alt="phone-img">
        </div>
        <div class="right-col">
            <div class="title-block">
                <h2 class="title">Overview</h2>
            </div>

            <div class="text-block">
                <div class="title">Hello everyone!</div>
                <p class="text">
                    Ecommerce Analytics Admin Dashboard. Get the right answers. Make better decisions. Grow your sales. What problems it is solving. Which of my products sell best? How often do they buy? How many carts get abandoned? What’s my profitability? Who are my top customers? Where are my sales coming from?Don't forget to follow me!
                </p>
            </div>
        </div>
    </div>
    <!-- Overview Section END -->

    <!-- Info Section -->
    <div class="info-section">
        <div class="left-col">
            <div class="title-block">
                <h2 class="title">Serving Millions of People <br> Around the World</h2>
            </div>

            <div class="text-block">
                <div class="title">Monthly Downloads</div>
                <p class="text">
                    Our native apps are used by millions of people around the world. Here at Appnap, we consistently push our limits to ensure maximum satisfaction of our loyal consumers.
                </p>
            </div>
        </div>
        <div class="right-col">
            <img src="assets/images/overview.png" alt="phone-img">
        </div>
    </div>
    <!-- Info Section END -->

    <!-- Footer Section -->
    <?php include_once 'inc/footer.php'; ?>
    <!-- Footer Section END -->

    <!-- Back to TOP -->
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>
    <!-- Back to TOP END -->

    <!-- LOADER -->
    <div class="loader">
        <div></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/5356aed19a.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>

    <!-----------
    LOADER SCRIPT
    ------------>
    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(1000);
        });
    </script>

    <!-- MOUSEMOVE MOTION -->
    <script>
        (function() {
            // Add event listener
            document.addEventListener("mousemove", parallax);
            const elem = document.querySelector("#parallax");
            // Magic happens here
            function parallax(e) {
                let _w = window.innerWidth / 2;
                let _h = window.innerHeight / 2;
                let _mouseX = e.clientX;
                let _mouseY = e.clientY;
                let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
                let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
                let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
                let x = `${_depth3}, ${_depth2}, ${_depth1}`;
                console.log(x);
                elem.style.backgroundPosition = x;
            }

        })();
    </script>
</body>

</html>