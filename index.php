<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--automation on scroll-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <!--main css-->
    <link rel="stylesheet" href="resources/css/style.css"
</head>
<body>


<div class="wrapper">
<!--    slideshow front-->
    <div id="slideshow">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="img" class="d-block w-100" height="400" src="resources/images/img-1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Tamarind Soap<br><span>Face and body soap </span></h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="img" class="d-block w-100" height="400" src="resources/images/img-2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Aloe vera soap<br><span>Enjoy Skin Nourishing Ingredients</span></h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="img" class="d-block w-100" height="400" src="resources/images/img-3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Manjano<br><span>Perfect to use on the delicate facial area</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    slideshow front end-->

<!--    navigation -->
    <div id="navigation">
        <div id="top-navigation">
            <div class="date">
                <p><i class="fas fa-phone px-2">+255 765 095 109</i></p>
            </div>
            <div id="search">
                <span id="myBtn"><i class="fas fa-search"></i></span>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div>
                                <form id="form-inline" class="form-inline">
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="search" placeholder="Search for.." aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="Search">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div><span class="close">&times;</span></div>
                        </div>

                    </div>


            </div>
            <div class="order">
                <a class="btn btn-outline-warning" href="order/order.php"><i class="fas fa-cart-plus px-2"></i>Order</a>
            </div>

        </div>

        <div id="nav-content">
            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="#"><img src="resources/images/logo.PNG" width="150"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Product
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Body Wash</a>
                                <a class="dropdown-item" href="#">Hand Wash</a>
                                <a class="dropdown-item" href="#">Bar Soap</a>
                                <a class="dropdown-item" href="#">MultiPurpose</a>
                                <a class="dropdown-item" href="#">Toilet Cleaner</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Raw material
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Raw material 1</a>
                                <a class="dropdown-item" href="#">Raw material 2</a>
                                <a class="dropdown-item" href="#">Raw material 3</a>
                                <a class="dropdown-item" href="#">Raw material 4</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>

    <!--    navigation end-->

<!--    main-content-->

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <span id="one"></span>
                <span id="two"></span>
                <span id="three"></span>
            </div>

            <div class="col-md-12">
                <div id="check">
                    <h5 class="pt-3">Lubasu soap</h5>
                    <p>Cleanse, moisturize and soothe your skin with all natural handmade soap made with
                        organic oils and plant butters, pure essential oils, organic herbs, and spices. </p>
                    <div id="hidden">
                        <h4 class="text-center">Why To Use Our Soap Products? </h4>
                        <ul>
                            <li>Our soaps won’t dry out your skin or cause any other skin irritation as all of the ingredients
                                are gentle and skin safe</li>
                            <li>Our soaps don’t contain any synthetic ingredients which can be absorbed by the skin (the body’s largest organ)
                                and sometimes get into the bloodstream causing problems</li>
                            <li>Our soap are often more subtle scented in a refreshing way</li>

                        </ul>

                        <p>Considering that your skin is the largest organ on your body, there’s joy in discovering
                            the right kind of soap that treats it well</p>

                        <h4><span></span></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="container my-5">
                    <div class="mt-4">
                        <h4 class="text-center py-3">Usages</h4>
                        <p class="text-info text-center">Our products can be used in a variety of ways</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 pb-5 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-5">
                            <img class="card-img-top" src="resources/images/hands.jpg" alt="Card image cap" height="300">
                            <div class="card-body">
                                <p class="card-title">Washing hands</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-5">
                            <img class="card-img-top" src="resources/images/toilet.jpg" alt="Card image cap" height="300">
                            <div class="card-body">
                                <p class="card-title">Cleaning toilet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="resources/images/bathing.jpg" alt="Card image cap" height="300">
                            <div class="card-body">
                                <p class="card-title">Body washing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img class="card-img-top" src="resources/images/clothes.jpg" alt="Card image cap" height="300">
                            <div class="card-body">
                                <p class="card-title">Washing clothes</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-12">
                <span id="one"></span>
                <span id="two"></span>
                <span id="three"></span>
            </div>


            <div class="col-md-12">
                <div id="new-arrival">
                    <div>
                        <h4 class="text-center py-4">New Arrival</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="main-images" class="row">
                                <div class="col-md-6">
                                    <h5 class="text-center py-3">Body Wash Soaps</h5>
                                    <div id="image-1">

                                        <div>
                                            <img src="resources/images/soap-1.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-1.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-1.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>

                                        <div>
                                            <img src="resources/images/soap-1.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-1.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-1.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="text-center py-3">Hand Wash Soaps</h5>
                                    <div id="image-2">

                                        <div>
                                            <img src="resources/images/soap-4.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-4.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-4.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>

                                        <div>
                                            <img src="resources/images/soap-4.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-4.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>
                                        <div>
                                            <img src="resources/images/soap-4.jpg" width="150">
                                            <p>Coming soon</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-3">
                        <p class="text-center">You can place your order now to have the product of your need  </p>
                        <p class="text-success text-center">Your Skin Will Thank You!</p>
                    </div>


                </div>
            </div>
        </div>
    </div>



<!--    end main-content-->

    <div style="margin-top: 100px;" class="alert alert-info">

        <p class="text-center">***Under no circumstance should our soap products be swallowed. Please always read and follow the label instructions***</p>
    </div>


    <?php
    include 'partial/footer.php';
    ?>
</div>









<!--Bootstrap js-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- icons-->
<script src="https://kit.fontawesome.com/f50cbe1cfd.js" crossorigin="anonymous"></script>
<!--aos-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 300,
        once: true,
        duration: 1000
    });
</script>
<!--main js-->
<script src="resources/js/main.js"></script>

<script>
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    $(document).ready(function(){
        var num = $("#nav-content").offset().top;
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > num) {
                $('#nav-content').addClass('sticky');
            }
            else {
                $('#nav-content').removeClass('sticky');
            }
        });
    });
</script>
</body>
</html>