<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact page - Intelligent Dive</title>
    <meta name="description" content="" />
    <link rel="alternate" href="" hreflang="en" />
    <link rel="icon" href="./assets/fav/favicon.ico" type="image/x-icon">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <!-- ./Open Graph / Facebook -->

    <!-- CSS Files Section -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Section -->
    <?php include_once 'inc/nav.php' ?>
    <!-- Navbar Section END -->

    <!-- Inner Header Section -->
    <div class="inner-header contact-header">
        <div id="tsparticles"></div>
        <div id="theme">
            <button type="button" id="btnLight"></button>
            <button type="button" id="btnDark"></button>
        </div>
        <div class="header-block contact-block">
            <h1 class="title title-slider">
                <div>
                    <div class="inner-title">Connect</div>
                </div>
                <div>
                    <div class="inner-title">Collaborate</div>
                </div>
                <div>
                    <div class="inner-title">Converse</div>
                </div>
            </h1>
            <p class="text">It's not too late</p>
        </div>
    </div>
    <!-- Inner Header Section END -->

    <!-- Contact Wrap -->
    <div class="contact-wrap">
        <div class="left-col">
            <div class="address-block">
                <h2>Get In Touch</h2>
                <a href="mailto:info@intelligentdive.com" target="_blank">info@intelligentdive.com</a>
                <a href="tel:8801727887729" target="_blank">+88 01677926483</a>
                <a href="www.google.com" target="_blank" class="solid-font">Banani, Dhaka Sadar, Dhaka, Dhaka: 1213</a>
            </div>

            <div class="social-block">
                <h2>Follow us</h2>
                <a href="https://www.facebook.com/intelligentdive" target="_blank">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/intelligentdive/?fbclid=IwAR1Z-wGa8-PFRqZm2lIEuZaYmT4q7w3JbZMDMu-ZF1MECOtoYo4ASiE7s7o" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
        <div class="right-col">
            <div class="contact-section">
                <div id="msg"></div>
                <form method="post" action="" id="mail" class="register-form">
                    <div class="field-block wow slideInUp">
                        <div class="input-block">
                            <select name="interests" class="input">
                                <option value="Application Development">Application Development</option>
                                <option value="Data Analytics & Dashboards">Data Analytics & Dashboards</option>
                                <option value="AI & Data Science">AI & Data Science</option>
                                <option value="Blockchain">Blockchain</option>
                                <option value="IoT">IoT</option>
                                <option value="Product Development">Product Development</option>
                                <option value="Enterprise Solution">Enterprise Solution</option>
                                <option value="FinTech">FinTech</option>
                                <option value="EduTech">EduTech</option>
                                <option value="EduTech">Automation & Simulation</option>
                                <option value="EduTech">AR/VR</option>
                                <option value="EduTech">HealthTech</option>
                            </select>

                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="field-block wow slideInUp">
                        <div class="input-block">
                            <input type="text" name="name" id="name" class="input" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="field-block wow slideInUp">
                        <div class="input-block">
                            <input type="text" name="email" id="email" class="input" placeholder="Email">
                        </div>
                    </div>
                    <div class="field-block wow slideInUp">
                        <div class="input-block">
                            <input type="number" name="whatsapp" id="whatsapp" class="input" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="field-block wow slideInUp">
                        <div class="input-block">
                            <textarea name="des" id="des" class="input" cols="10" rows="5" maxlength="300" minlength="10" placeholder="Project Description or Your Message"></textarea>
                        </div>
                    </div>
                    <div class="field-block wow slideInUp">
                        <div class="g-recaptcha" data-sitekey="6LfOsoEmAAAAADzRloLzNYpHVJRSkKSjO2iApmOt"></div>
                    </div>
                    <div class="field-block grid-1 wow slideInUp">
                        <input type="submit" class="btn" value="Send Message" name="" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Wrap END -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="https://kit.fontawesome.com/5356aed19a.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.38.0/tsparticles.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-----------
    LOADER SCRIPT
    ------------>
    <script>
        $(window).on('load', function() {
            $(".loader").fadeOut(1000);
        });
    </script>

    <script>
        $(document).ready(function() {
            //wow js init
            new WOW().init();

            var nameErr = true;
            var whatsappErr = true;
            var emailErr = true;
            var desErr = true;
            var name, whatsapp, email, des;

            //FORM VALIDATION
            $("#name").on("keyup", function() {
                name = $(this).val();

                if (name.length > 35 || name.length < 5) {
                    $('#msg').html("minimum 5 & maximum 35 character require").fadeIn();
                    nameErr = true;
                } else {
                    $('#msg').text("");
                    nameErr = false;
                }
            });

            $("#whatsapp").on("keyup", function() {
                whatsapp = $(this).val();

                if (whatsapp.length > 14 || whatsapp.length < 5) {
                    $('#msg').html("minimum 5 & maximum 14 number require").fadeIn();
                    whatsappErr = true;
                } else {
                    $('#msg').text("");
                    whatsappErr = false;
                }
            });

            $("#email").on("keyup", function() {
                email = $(this).val();
                var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (regex.test(email)) {
                    $('#msg').text("");
                    emailErr = false;

                } else {
                    $('#msg').text("email must be valid");
                    emailErr = true;
                }
            });

            $("#des").on("keyup", function() {
                des = $(this).val();

                if (des.length > 20 || des.length < 2) {
                    $('#msg').html("minimum 2 & maximum 20 number require").fadeIn();
                    desErr = true;
                } else {
                    $('#msg').text("");
                    desErr = false;
                }
            });

            $("#mail").on("submit", function() {
                event.preventDefault();

                if (nameErr == false && whatsappErr == false && emailErr == false && desErr == false) {
                    var response = grecaptcha.getResponse();

                    if (response.length == 0) {
                        $("#msg").text("Please verify you are not robot");
                    } else {
                        $.ajax({
                            url: "mail.php",
                            method: "POST",
                            data: $("#mail").serialize(),
                            success: function(result) {
                                $("#mail").html(result);
                            }
                        });

                        $("#msg").text();
                    }
                } else {
                    alert("Please fill up all field correctly");
                }
            });
        });
    </script>

    <script>
        /* Review Slider */
        $('.title-slider').slick({
            cssEase: 'ease-in-out',
            fade: true,
            arrows: false,
            autoplay: true,
            focusOnSelect: false,
            pauseOnHover: false,
            infinite: true,
            speed: 1500,
            autoplaySpeed: 1500,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    </script>

    <script>
        let themeableContainer;

        document.getElementById("btnLight").addEventListener("click", () => {
            if (themeableContainer) {
                themeableContainer.loadTheme("light");
            }
        });

        document.getElementById("btnDark").addEventListener("click", () => {
            if (themeableContainer) {
                themeableContainer.loadTheme("dark");
            }
        });

        tsParticles
            .load("tsparticles", {
                fpsLimit: 60,
                particles: {
                    move: {
                        bounce: false,
                        direction: "none",
                        enable: true,
                        outModes: "out",
                        random: false,
                        speed: 2,
                        straight: false
                    },
                    number: {
                        density: {
                            enable: true,
                            area: 800
                        },
                        value: 80
                    },
                    opacity: {
                        value: 0.5
                    },
                    shape: {
                        type: "circle"
                    },
                    size: {
                        value: {
                            min: 1,
                            max: 5
                        }
                    }
                },
                themes: [{
                        name: "light",
                        default: {
                            value: true,
                            mode: "light"
                        },
                        options: {
                            background: {
                                color: "#fff"
                            },
                            particles: {
                                color: {
                                    value: "#000"
                                }
                            }
                        }
                    },
                    {
                        name: "dark",
                        default: {
                            value: true,
                            mode: "dark"
                        },
                        options: {
                            background: {
                                color: "#000"
                            },
                            particles: {
                                color: {
                                    value: "#fff"
                                }
                            }
                        }
                    }
                ]
            })
            .then((container) => {
                themeableContainer = container;
            });
    </script>
</body>

</html>