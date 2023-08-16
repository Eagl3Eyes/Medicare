<?php 
//  database
include "lib/dbconnect.php";

$result=null;
if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $date= $_POST['date'];
  $department= $_POST['department'];
  $choosedoctor=$_POST['cdoctor'];
  $phone= $_POST['phone'];
  $message= $_POST['message'];
  $insertquery="INSERT INTO tblappointment( name, email, appDate, department, cdoctor, phone, appMessage) VALUES ('$name', '$email', '$date', '$department', '$choosedoctor', '$phone','$message')";
  if($connectdb -> query($insertquery)){
    $result="<h1 class='text-success'>Message Sent</h1>";
  }
  else{
    die($connectdb -> error );
  } 
}


  // data select
  $select_sql = "SELECT * FROM ourdoctortable";
  $allData = $connectdb -> query($select_sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Medicare</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-5">
                    <p>Welcome to a Professional Health Care Center</p>
                </div>

                <div class="col-md-8 col-sm-7 text-align-right">
                    <span class="phone-icon"><i class="fa fa-phone"></i> 01234567981</span>
                    <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 24/7</span>
                    <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">medicare@gmail.com</a></span>
                    <span id="sign-in" style="border-left: 1px solid #ece6e6 !important;"><i class="fa fa-sign-in"></i>
                        <a href="login.php">Sign-In</a></span>
                </div>

            </div>
        </div>
    </header>


    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand"><i class="fa fa-plus-square"></i>Medicare</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse custnav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                    <li><a href="#team" class="smoothScroll">Doctors</a></li>
                    <li><a href="#news" class="smoothScroll">News</a></li>
                    <li><a href="contract.php" class="smoothScroll">Contact</a></li>
                    <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Let's make your life happier & healthier</h3>
                                <h1>Healthy & Secured Life</h1>

                            </div>
                        </div>
                    </div>

                    <div class="item item-second">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Let's make your life happier & healthier</h3>
                                <h1>Perfect Lifestyle</h1>

                            </div>
                        </div>
                    </div>

                    <div class="item item-third">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Let's make your life happier & healthier</h3>
                                <h1>Your Health Necessities</h1>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <!-- <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to <i
                                class="fa fa-plus-square"></i>Medicare</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p>We're here when you need us. For everyday care or life-changing care, you can count on us
                                to keep you and your loved ones safe and healthy.</p>
                            <p>Our friendly and knowledgeable staff teams provide support throughout our many specialty
                                departments and centers, from primary visits to emergency care.</p>
                        </div>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <h3>Dr. Jack Turner</h3>
                                <p>Principal</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section> -->


    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="about-info">
                        <h2 class="wow fadeInUp text-align-center" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
                </div>

                <div class="clearfix"></div>
                <?php if($allData -> num_rows>0){ ?>
                <?php while($fetchData=$allData -> fetch_assoc()) {?>
                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php echo $fetchData['image'];?>" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3><?php echo $fetchData['name'];?></h3>
                            <p><?php echo $fetchData['department'];?></p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> <?php echo $fetchData['phone'];?></p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $fetchData['email'];?>"><?php echo $fetchData['email'];?></a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="<?php echo $fetchData['facebook'];?>" class="fa fa-facebook-square"></a></li>
                                <li><a href="<?php echo $fetchData['linkedin'];?>" class="fa fa-linkedin-square"></a></li>
                                <li><a href="<?php echo $fetchData['twitter'];?>" class="fa fa-twitter"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <?php }?>
                <?php }else{?>
                    <div class="col-lg-12">No Doctor to show</div>
                    <?php }?>


            </div>
        </div>
    </section>


    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="2.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Latest News</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news1.html">
                            <img src="images/news-image1.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>March 08, 2023</span>
                            <h3><a href="news1.html">About Amazing Technology</a></h3>
                            <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <a href="news2.html">
                            <img src="images/news-image2.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>February 20, 2023</span>
                            <h3><a href="news2.html">Introducing a new healing process</a></h3>
                            <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                        <a href="news3.html">
                            <img src="images/news-image3.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>January 27, 2023</span>
                            <h3><a href="news3.html">Review Annual Medical Research</a></h3>
                            <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 appimage">
                    <img src="images/appointment.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                                    required>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email" required>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select Date</label>
                                <input type="date" name="date" value="" class="form-control" required>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="select">Select Department</label>
                                <select class="form-control" name="department">
                                    <option value="General Health">General Health</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Orthopaedics">Orthopaedics</option>
                                    <option value="Dental">Dental</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label for="select">Choose Doctor</label>
                                <select class="form-control" name="cdoctor">
                                    <option value="Dr. Timmothy Johnson, Cardiology">Dr. Timmothy Johnson, Cardiology
                                    </option>
                                    <option value="Dr. Amanda Rusco, Neurology">Dr. Amanda Rusco, Neurology</option>
                                    <option value="Dr. Akram Hossain, Dental">Dr.  Tuhin Al Jobayer, Dental</option>
                                    <option value="Dr. Sayma Ikra, Cardiology">Dr. Bushra Jahangir, Cardiology</option>
                                    
                                </select>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    required>
                                <label for="Message">Additional Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message"
                                    placeholder="Message" required></textarea>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit
                                </button>
                                <?php 
                                    if($result==null){
                                        echo "<div class='alert alert-info alert-dismissible' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                        <strong>Fill Up The Form.
                                      </div>";
                                    }else{
                                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' style='font-size: 20px;
                                    margin: 0;' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                    <strong> $result
                                  </div>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- GOOGLE MAP -->
    <section id="google-map">
        <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.804405088933!2d90.37033771536231!3d23.718677895903465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf2b07157e07%3A0x9dd966cf1508eda2!2sMedicare%20Diagnostic%20%26%20Hospital!5e0!3m2!1sen!2sbd!4v1630913341570!5m2!1sen!2sbd"
            width="100%" height="350" style="border:0;" frameborder="0" allowfullscreen=""></iframe>
    </section>


    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                        <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit
                            consequat ultricies.</p>

                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> 010-070-0170</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                        <div class="latest-stories">
                            <div class="stories-image">
                                <a href="news2.html"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                            </div>
                            <div class="stories-info">
                                <a href="news2.html">
                                    <h5>Introducing a new healing process</h5>
                                </a>
                                <span>February 20, 2023</span>
                            </div>
                        </div>

                        <div class="latest-stories">
                            <div class="stories-image">
                                <a href="news3.html"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                            </div>
                            <div class="stories-info">
                                <a href="news3.html">
                                    <h5>Review Annual Medical Research</h5>
                                </a>
                                <span>January 27, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <div class="opening-hours">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                            <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                            <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                            <p>Sunday <span>Closed</span></p>
                        </div>

                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023 Medi Care</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-link">
                            <a href="#">Laboratory Tests</a>
                            <a href="#">Departments</a>
                            <a href="#">Insurance Policy</a>
                            <a href="#">Careers</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn">
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                    class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>




    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>