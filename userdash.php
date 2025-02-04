<?php
echo"<!doctype html>";
echo"<html lang='en'>";
    echo"<head>";
        echo"<meta charset='utf-8'>";
        echo"<meta name='viewport' content='width=device-width, initial-scale=1'>";

        echo"<meta name='description' content=''>";
        echo"<meta name='author' content=''>";

        echo"<title>Freelancer</title>";

         echo"<link rel='preconnect' href='https://fonts.googleapis.com'>";

        echo"<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>";

        echo"<link href='https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap' rel='stylesheet'>";

        echo"<link href='css/bootstrap.min.css' rel='stylesheet'>";
        echo"<link href='css/bootstrap-icons.css' rel='stylesheet'>";

       " <link rel='stylesheet' href='css/slick.css>";

        echo"<link href='css/little.css' rel='stylesheet'>";


    echo"</head>";
    
    echo"<body>";

        echo"<section class='preloader'>";
            echo"<div class='spinner'>";
                echo"<span class='sk-inner-circle'></span>";
            echo"</div>";
        echo"</section>";
    
        echo"<main>";

            echo"<nav class='navbar navbar-expand-lg'>";
                echo"<div class='container'>";
                    echo"<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>";
                        echo"<span class='navbar-toggler-icon'></span>";
                    echo"</button>";

                    echo"<a class='navbar-brand' href='index.html'>";
                        echo"<strong><span>For</span>  Freelancers</strong>";
                    echo"</a>";

                    echo"<div class='d-lg-none'>";
                        echo"<a href='sign-in.html' class='bi-person custom-icon me-3'></a>";

                        
                    echo"</div>";

                    echo"<div class='collapse navbar-collapse' id='navbarNav'>";
                        echo"<ul class='navbar-nav mx-auto'>";
                            echo"<li class='nav-item'>";
                                echo"<a class='nav-link active' href='index.html'>Home</a>";
                            echo"</li>";

                            echo"<li class='nav-item'>";
                                echo"<a class='nav-link' href='form1.html'>Join us</a>";
                            echo"</li>";

                            echo"<li class='nav-item'>";
                                echo"<a class='nav-link' href='story.html'>Story</a>";
                            echo"</li>";

                            

                            
                        echo"</ul>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        echo"</nav>";
        echo"<header class='site-header section-padding d-flex justify-content-center align-items-center'>";
            echo"<div class='container'>";
                echo"<div class='row'>";

                    echo"<div class='col-lg-10 col-12'>";
                        echo"<h1>";
                            echo"<span class='d-block text-primary'>User Dashboard</span>";
                           
                        echo"</h1>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        echo"</header>";

        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "freelancer";

            $conn = new mysqli($servername, $username, $password, $dbname);

           if ($conn->connect_error) {
           echo"Connection failed: " . $conn->connect_error;
           }
          
           $email = isset($_POST['email']) ? trim($_POST['email']) : null;

           $sql_query = "select * from application1 where email=$email"; 

           $fname="fname";
           $sname="sname";
           $email="email";
           $phone="phone";
           $address="address";
           $pan="pan";
           $aadhar="aadhar";
           $acc_no="acc_no";
           $ifsc="ifsc";
           $bank="bank";
           $gst="gst";
           $experience="experience";
           $job="job";
           $reference="reference";
           $district="district";
           $workloads="workloads";
           $img_aadhar="img_aadhar";
           $img_pan="img_pan";
           $resume="resume";
           $photo="photo";
           $address_proof="address_proof";

           $result=$conn->query($sql_query);
           if($result->num_rows>0)
           {   
            while ($row=$result->fetch_assoc()) {
                    $fname= $row['first_name'];
                    $sname = $row['second_name'];  
                    $email = $row['email'];  
                    $phone = $row['phone'];  
                    $address = $row['address'];  
                    $pan = $row['pancard_no'];  
                    $aadhar = $row['aadhar_no'];  
                    $acc_no = $row['acc_no'];  
                    $ifsc = $row['ifsc'];  
                    $bank = $row['bank_name'];  
                    $gst = $row['gst_no'];  
                    $experience = $row['experience'];  
                    $job = $row['job'];  
                    $reference = $row['reference'];  
                    $district = $row['district'];  
                    $workloads = $row['workloads'];  
                    $img_aadhar = $row['aadhar'];  
                    $img_pan = $row['pancard'];  
                    $resume = $row['resume'];  
                    $photo = $row['photo'];  
                    $address_proof=$row['address_proof'];

                    echo"<div class='dashboard-container'>";
                    echo"<div class='container123'>";
                    echo"<div class='container'>";
                    echo"<div class='user-info'>";
                    echo "<div class='field'>";
                    echo"<p><strong>First Name:$fname</strong></p>";
                    echo"<p><strong>Second Name:$sname</strong></p>";
                    echo"<p><strong>Email:$email</strong></p>";
                    echo"<p><strong>Phonenumber:$phone</strong></p>";
                    echo"<p><strong>Address:$address</strong></p>";



                echo"</div>";
            echo"</div>";
            echo"</div>";
        
     
      
        echo"<div class='container123'>";
            echo"<div class='container'>";
            echo"<div class='user-info'>";
                echo"<p><strong>PAN Card Number:$pan</strong></p>";
                echo"<p><strong>pan image:$img_pan</strong></p>";
                echo"<p><strong> Aadhaar Number:$aadhar</strong></p>";
                echo"<p><strong>adhar image:$img_aadhar</strong></p>";
    
            echo"</div></div>";
        echo"</div>";
        
    
    echo"<div class='container123'>";
        echo"<div class='container'>";
        echo"<div class='user-info'>";
            echo"<p><strong>Account Number:$acc_no</strong></p>";
            echo"<p><strong>IFSC Code:$ifsc</strong></p>";
            echo"<p><strong>Bank Name:$bank</strong></p>";
            echo"<p><strong>GST NUMBER:$gst</strong></p>";
        echo"</div>";
        echo"</div>";
    echo"</div>";
    
    
    echo"<div class='container123'>";
        echo"<div class='container'>";
        echo"<div class='user-info'>";
            echo"<p><strong>Years Of Experience:$experience</strong></p>";
            echo"<p><strong>Job:$job</strong></p>";
            echo"<p><strong>References:$reference</strong></p>";
           
        echo"</div>";
    echo"</div></div>";
    
    
    echo"<div class='container123'>";
        echo"<div class='container'>";
        echo"<div class='user-info'>";
            echo"<p><strong>Prefered District:$district</strong></p>";
            echo"<p><strong>Expected Daily Workloads:$workloads</strong></p>";
           
        echo"</div>";
    echo"</div></div>";
    
    
    echo"<div class='container123'>";
        echo"<div class='container'>";
        echo"<div class='user-info'>";
            echo"<p><strong>resume image:$resume</strong></p>";
            echo"<p><strong>photo:$photo</strong></p>";
            echo"<p><strong>address proof:$address_proof</strong></p>";
            
        echo"</div>";
        echo"</div>";
    echo"</div>";
    echo"</div>";
 
            }
            
                 }
                // $conn->close();


        echo"<footer class='site-footer'>";
            echo"<div class='container'>";
                echo"<div class='row'>";

                    echo"<div class='col-lg-3 col-10 me-auto mb-4'>";
                        echo"<h4 class='text-white mb-3'> SAOIRSE  <a href='index.html'>IT SOLUTIONS LLP</a></h4>";
                        echo"<p class='copyright-text text-muted mt-lg-5 mb-4 mb-lg-0'>Copyright © 2022 <strong>SAOIRSE IT SOLUTIONS LLP</strong></p>";
                       echo"<br>";
            
                    echo"</div>";

                    echo"<div class='col-lg-5 col-8'>";
                       echo" <h5 class='text-white mb-3'>Sitemap</h5>";

                       echo"<ul class='footer-menu d-flex flex-wrap'>";
                            echo"<li class='footer-menu-item'><a href='story.html' class='footer-menu-link'>Story</a></li>";

                      

                            echo"<li class='footer-menu-item'><a href='#' class='footer-menu-link'>Privacy policy</a></li>";

                            echo"<li class='footer-menu-item'><a href='#' class='footer-menu-link'>FAQs</a></li>";

                            echo"<li class='footer-menu-item'><a href='#' class='footer-menu-link'>Contact</a></li>";
                            echo"<li class='footer-menu-item'><a href='#' class='footer-menu-link'>Terms & Condition</a></li>";
                        echo"</ul>";
                    echo"</div>";

                    echo"<div class='col-lg-3 col-4'>";
                        echo"<h5 class='text-white mb-3'>Social</h5>";

                        echo"<ul class='social-icon'>";

                            echo"<li><a href='#' class='social-icon-link bi-youtube'></a></li>";

                            echo"<li><a href='#' class='social-icon-link bi-whatsapp'></a></li>";

                            echo"<li><a href='https://www.instagram.com/saoirseitsolutionsllp/?utm_source=qr&igsh=MXhoMGZ1Mm1vN252aA%3D%3D#' class='social-icon-link bi-instagram'></a></li>";

                            echo"<li><a href='https://x.com/i/flow/login?redirect_after_login=%2FSaoirse_IT' class='social-icon-link bi-skype'></a></li>";
                        echo"</ul>";
                    echo"</div>";

                echo"</div>";
            echo"</div>";
        echo"</footer>";
        
       
        echo"<script src='js/jquery.min.js'></script>";
        echo"<script src='js/bootstrap.bundle.min.js'></script>";
        echo"<script src='js/Headroom.js'></script>";
        echo" <script src='js/jQuery.headroom.js'></script>";
        echo"<script src='js/slick.min.js'></script>";
        echo"<script src='js/custom.js'></script>";

    echo"</body>";
echo"</html>";
$conn->close();
?>