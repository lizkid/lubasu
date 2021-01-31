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
    <link rel="stylesheet" href="resources/css/sub.css"
</head>
<body>


<div class="wrapper">
    <!--    slideshow front-->
    <div id="top-image">

        <img id="img" class="d-block w-100" height="400" src="resources/images/img-3.jpg" alt="Third slide">

    </div>
    <!--    slideshow front end-->

    <!--    navigation -->
    <div id="navigation">

        <div id="nav-content">
            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="#"><img src="resources/images/logo.PNG" width="150"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
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

            <div class="col-md-12 mt-5 pt-5">
               About us
            </div>

        </div>
    </div>



    <!--    end main-content-->


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

</body>
</html>
