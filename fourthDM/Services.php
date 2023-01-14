<?php require("insertjson.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="#">
          <img src="img/fourthdm logo.png" width="200px" height="40" alt="logo">
         
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-6">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-list-6">
          <ul class="navbar-nav h5">
            <a class="nav-link active" aria-current="page" href="index.php" >Home</a>
            <a class="nav-link" href="./about.php" >About</a>
            <a class="nav-link" href="./Services.php" >Services</a>
            <a class="nav-link" href="./contact.php">Contact</a>        
          </ul>
        </div>
      </nav>
   
    <section id="ourservicespage">
        <h3 class="text-center">Services</h3>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-6 col-lg-2 col-6 py-3">
                    <div class="card" style="width:18rem; height:15rem ;">
                        <div class="card-body">
                           <a href="logoDesign.php"> <img src="img/23.png" class="img-fluid  mx-auto "   alt=""></a>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-6 py-3 ">
                    <div class="card" style="width: 18rem; height:15rem ;">
                        <div class="card-body">
                            <a href="social.php" ><img src="img/24.png" class="img-fluid mx-auto" style="align-items: center;" alt=""></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-6 py-3">
                    <div class="card" style="width: 18rem; height:15rem ;">
                        <div class="card-body">
                           <a href="branding.php"><img src="img/25.png" class="img-fluid" style="align-items: center;" alt=""></a> 

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-6 py-3">
                    <div class="card" style="width: 18rem; height:15rem ;">
                        <div class="card-body">
                            <a href="webdesign.php"><img src="img/28.png" class="img-fluid" style="align-items: center;" alt=""></a> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Services-form">
    <h3 class="pt-5" style="text-align: center;">Our Services</h3>
    <form action="servicesdb.php" method="post" class="needs-validation " novalidate >
    <section id="cards">
    
      <div class="container">
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Branding</h5>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]"  type="checkbox" value=" Logo" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Logo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Brochure" id="flexCheckChecked" >
                        <label class="text-dark form-check-label" for="flexCheckChecked">
                            Brochure
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="catilogue" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            catilogue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="LetterHead" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            LetterHead
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="E-mail signature" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            E-mail signature
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Proposal Templates" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Proposal Templates
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value=" Invoices" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Invoices
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value=" V-cards" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            V-cards
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value="l_cards" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            l_cards
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value=" Company Profile" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Company Profile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value=" Owner profile" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Owner profile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value=" Social Medial Post" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Social Medial Post
                        </label>
                    </div>
                </div>
            </div>
            <div class="card" style="background-color: rgb(255, 207, 103);">
                <div class="card-body">
                    <h5 class="card-title">Marketing</h5>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value=" Digital Marketing" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Digital Marketing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Social Media Marketing" id="flexCheckChecked" >
                        <label class="text-dark form-check-label" for="flexCheckChecked">
                            Social Media Marketing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value=" SEO" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            SEO
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value="  SMM" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            SMM
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="GoogleAd" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            GoogleAd
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Lead Generation" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Lead Generation
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value="Compaigns" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Compaigns
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Content Writing" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Content Writing
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value=" Web Designing" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Web Designing
                        </label>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Other Services</h5>
                    <p class="card-text">PhotoGraphy</p>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value="Product Photo Shoot" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Product Photo Shoot
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value="Event Photography" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Event Photography
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Company Profile" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Company Profile
                        </label>
                    </div>
                    <br>
                    <p class="card-text">VideoGraphy</p>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Company Overview" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Company Overview
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="brand[]" type="checkbox" value="Special Product Launch" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Special Product Launch
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value=" Company Event" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Company Event
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input"  name="brand[]" type="checkbox" value="Testimonials" id="flexCheckDefault">
                        <label class="text-dark form-check-label" for="flexCheckDefault">
                            Testimonials
                        </label>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>   
       <div class="row ">
       <div class="  col-12 d-flex justify-content-center">
        <div id="form2" class=" form-group col-xl-6  pt-5">
       
               <div class=" col-xm-4">
                    <label for="Username" class="text-white">Username</label>
                    <input type="text" name="Username" class="form-control" id="Username"  required>
                    <div class="invalid-feedback">
                    Please provide a valid Name.
                    </div>
                </div>
                <div class=" col-xm-4">
                    <label for="email" class="text-white" >Email ID</label>
                    <input type="text"  name="email" class="form-control" id="email"  required>
                    <div class="invalid-feedback">
                        Please provide a valid Email.
                    </div>
                </div>
                <div class=" col-xm-4">
                    <label for="mobile" class="text-white" >Mobile Number</label>
                    <input type="text"  name="mobile" class="form-control" id="mobile" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class=" col-xm-4">
                    <label for="bname" class="text-white">Business Name</label>
                    <input type="text"  name="bname" class="form-control" id="bname" required>
                    <div class="invalid-feedback">
                        Please provide a valid Business Name .
                    </div>
                </div>
               <br>
            <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
          <p class="error"><?php echo @$error?></p>
          <p class="success"><?php echo @$success?></p>
        </div>
        </div>
        </div>
       
       </form>
</section>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
   
</script>
    <section id="footer">
        <!-- Footer -->
        <footer class="bg-secondary text-white text-center">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-white">
                        <h5 class="text-uppercase">About Us</h5>
                        <p class="text-white">
                            We understand our customer needs, design strategies that help to grow your business.
                            Web designing to creating graphics & from SEO to social media we do everything do in Digital
                            Marketing.
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
                        <h5 class="text-uppercase">OUR SERVICES</h5>

                        <ul class="list-unstyled mb-0 text-center">
                            <li>
                                <a href="about.html" class="text-white fix ">About US</a>
                            </li>
                            <li>
                                <a href="Services.html" class="text-white fix">Services</a>
                            </li>
                            <li>
                                <a href="#Blog" class="text-white fix">Blog</a>
                            </li>
                            <li>
                                <a href="contact.html" class="text-white fix">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-center">
                        <h5 class="text-uppercase">CONTACT</h5>

                        <ul class="list-unstyled mb-0 text-center">
                            <li>
                                <a href="#!" class="text-white fix "><i class="fa-sharp fa-solid fa-building">
                                    </i>Gera's Imperium Alpha, Near Gear's Banglow, kharadi, pune, Maharashtra
                                    411014.</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white fix"><i
                                        class="fa-sharp fa-solid fa-envelope"></i>vikas.t@fourthdm.com</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white fix"><i class="fa-solid fa-phone"></i>02026608662</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white fix"></a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid row-->
            </div>
            <!-- Grid container -->
            <div class=" socialIcon ">

                <ul class=" list-unstyled row ml-auto mr-auto ">
                    <li>
                        <a href="#!" class="btn text-white m-1 " style="background-color: #3b5998;" role="button"><i
                                class="fa-brands fa-square-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#!" class="btn text-white  m-1 " style="background-color: #55acee;" role="button"><i
                                class="fa-brands fa-twitter"></i></a>
                    </li>

                    <li>
                        <a href="#!" class="btn text-white  m-1" style="background-color: #ee8d55;" role="button"><i
                                class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#!" class="btn text-white  m-1" style="background-color: #dd4b39;" role="button"><i
                                class="fa-brands fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#!" class="btn text-white  m-1 " style="background-color: #0082ca;" role="button"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Copyright © fourthdm 2022 — All Rights Reserved
                <a class="text-white" href=""></a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>