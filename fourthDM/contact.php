<?php require("contactdb.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
        <a class="navbar-brand pt-0" href="#">
          <img src="img/fourthdm logo.png" width="200px" height="40" alt="logo" >
         
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-6">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-list-6">
          <ul class="navbar-nav h5">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="./about.php" >About</a>
            <a class="nav-link" href="./Services.php" >Services</a>
            <a class="nav-link" href="./contact.php" >Contact</a>        
          </ul>
        </div>
      </nav>

    <section id="contactus" style="background-color:  #2a2a2a;">
        <div class="contact">
            <img src="img/Contact us.jpg" class="img-responsive " style="width: 100%; height: 500px;">
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.382460776556!2d73.95239607589825!3d18.55678826806556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c3c1479e6abd%3A0x3d3672047e8413fe!2sGera&#39;s%20Imperium%20Alpha!5e0!3m2!1sen!2sin!4v1671786451504!5m2!1sen!2sin"
            width="100%" height="450" style="border:10px solid;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div>
            <form action="contactdb.php" method="post" class="needs-validation " novalidate>
                <div class="row  justify-content-center ">
                    <h3 class=" text-white text-align-center">Enquiry</h3>
                 <div class="  col-12 d-flex justify-content-center">
                <div id="form2" class=" form-group col-xl-6 ">
                    <div class=" col-xm-6 pt-2">
                        
                        <input type="text" name="Username" class="form-control" id="Username" placeholder="Name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="  col-xm-6 pt-3">
                     
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email ID" required>
                        <div class="invalid-feedback">
                            Please provide a valid Email.
                        </div>
                    </div>
                    <div class="  col-xm-6 pt-3">
                 
                        <input type="mobile" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class=" col-xm-6 pt-3">
                    
                        <input type="text" name="comment" class="form-control" id="comment" rows="3"  placeholder="Message" required>
                        <div class="invalid-feedback">
                            Please provide a valid Business Name .
                        </div>
                    </div>
                    <br>
                    <div class="text-center pt-3">
                    <button type="submit" name="send" class="btn btn-primary ">Submit</button>
</div>
                    <p class="error">
                        <?php echo @$error?>
                    </p>
                    <p class="success">
                        <?php echo @$success?>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </form>
        </div>
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

        
    </section>
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

                <ul class=" list-unstyled row ml-auto mr-auto " >
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>