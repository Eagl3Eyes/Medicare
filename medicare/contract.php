<?php 
//  database
include "lib/dbconnect.php";

$result=null;
if(isset($_POST['submit'])){
  $first_name= $_POST['first_name'];
  $last_name= $_POST['last_name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $message= $_POST['message'];
  $insertquery="INSERT INTO contract_info( first_name, last_name, email, phone, message ) VALUES ('$first_name', '$last_name', '$email', '$phone', '$message')";
  if($connectdb -> query($insertquery)){
    $result="<h1 class='text-success'>Message Sent</h1>";
  }
  else{
    die($connectdb -> error );
  } 
}


?>

<!DOCTYPE html>
<html>

<head>
    <!-- *******  Link To CSS Style Sheet  ******* -->
    <link rel="stylesheet" type="text/css" href="css/contract.css">

    <!-- *******  Font Awesome Icons Link  ******* -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- *******  Link To Goggle Fonts  *******  -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
        rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Section</title>
</head>

<body>
    <div class="container">
        <main class="row">

            <section class="col left">

                <div class="contactTitle">
                    <h2>Get In Touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                </div>

                <div class="contactInfo">

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <span>Phone</span>
                            <span>+8801900000000</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <span>Email</span>
                            <span>cse307@gmail.com</span>
                        </div>
                    </div>

                    <div class="iconGroup">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="details">
                            <span>Location</span>
                            <span>Dhaka, Bangladesh</span>
                        </div>
                    </div>

                </div>

                <div class="socialMedia">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                
            </section>


            <section class="col right">

                <form id="messageForm" role="form" class="messageForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <div class="inputGroup halfWidth">
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                        <label>Your Full Name</label>
                    </div>

                    <div class="inputGroup halfWidth">
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                        <label>Your Last Name</label>
                    </div>

                    <div class="inputGroup halfWidth">
                        <input type="email" class="form-control" id="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="inputGroup halfWidth">
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                        <label>Phone Number</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                        <label>Say Something</label>
                    </div>

                    <div class="inputGroup fullWidth">
                        <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                        <!-- <span id="sign-in" style="border-left: 1px solid #ece6e6 !important;"><i class="fa fa-sign-in"></i>
                            <a href="index.php">Back</a>
                        </span> -->
                    </div>

                </form>
                <button type="submit"><a href="index.php">Back</a></button>
            </section>

        </main>
    </div>
</body>

</html>