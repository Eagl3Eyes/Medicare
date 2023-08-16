<?php 

session_start();
if(isset($_SESSION['auther1'])){
    if($_SESSION['auther1'] !=1){
        header("location:login.php");
    }

}else{
    if(isset($_COOKIE['auther2'])){
        if($_COOKIE['auther2']!=true){
            header("location:login.php");
        }
    }else{
        header("location:login.php");
    }
}
// db connect
include "lib/dbconnect.php";

// add doctor
if(isset($_POST['submit'])){
    $image= $_POST['image'];
    $name= $_POST['dname'];
    $department= $_POST['ddepartment'];
    $phone= $_POST['dphone'];
    $email=$_POST['demail'];
    $facebook= $_POST['facebook'];
    $linkedin= $_POST['linkedin'];
    $twitter= $_POST['twitter'];
    $insertquery="INSERT INTO ourdoctortable( image, name, department, phone, email, facebook, linkedin, twitter) VALUES ('$image','$name', '$department','$phone','$email','$facebook','$linkedin','$twitter')";
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Medicare</title>
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/fav.ico" />

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion cbg" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon">
                <i class="fas fa-plus-square"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Medicare</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="far fa-comment-alt"></i>
                    <span>Appointments</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="doctor.php">
                <i class="fas fa-user-md"></i>
                    <span>Our Doctor</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="message.php">
                <i class="fas fa-user-md"></i>
                    <span>Contract Information</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Salary-->


           



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <div class="alert alert-info alert-dismissible fade show mt-0" role="alert">
                        <h4>Welcome <?php echo isset($_SESSION['username'])?$_SESSION['username']:""; ?></h4>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo isset($_SESSION['username'])?$_SESSION['username']:""; ?></span>
                                <i class="img-profile cprofile fas fa-plus-square"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-10">
                            <form id="appointment-form" role="form" method="post"
                                action="<?php echo $_SERVER['PHP_SELF']; ?>" class="row">

                                <!-- SECTION TITLE -->
                                <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                    <h2>Add doctor</h2>
                                </div>

                                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="col-md-6 col-sm-6">
                                        <label for="image">Image Path</label>
                                        <input type="text" class="form-control" id="image" name="image"
                                            placeholder="image path" required>
                                    </div>
                                  
                                    <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="dname"
                                            placeholder="name" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <label for="department">Department</label>
                                        <input type="text" class="form-control" id="department" name="ddepartment"
                                            placeholder="department" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="dphone"
                                            placeholder="phone number" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="demail"
                                            placeholder="email" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook"
                                            placeholder="facebook link" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="linkedin">Linkedin</label>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                                            placeholder="linkedin link" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="twitter">Twitter </label>
                                        <input type="text" class="form-control" id="twitter" name="twitter"
                                            placeholder="twitter link" required>
                                    </div>
                                    <div class="col-sm-2 my-4">
                                    <button type="submit" class="form-control" id="submit" name="submit">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">View Doctor</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Facebook</th>
                                            <th>Linkedin</th>
                                            <th>Twitter</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if($allData -> num_rows>0){ ?>
                                        <?php while($fetchData=$allData -> fetch_assoc()) {?>
                                        <tr>
                                            <td><?php echo $fetchData['image'];?></td>
                                            <td><?php echo $fetchData['name'];?></td>
                                            <td><?php echo $fetchData['department'];?></td>
                                            <td><?php echo $fetchData['phone'];?></td>
                                            <td><?php echo $fetchData['email'];?></td>
                                            <td><?php echo $fetchData['facebook'];?></td>
                                            <td><?php echo $fetchData['linkedin'];?></td>
                                            <td><?php echo $fetchData['twitter'];?></td>
                                            <td style="text-align:center;">
                                                <a href="mailto:<?php echo $fetchData['email'] ?>" title="mail">
                                                    <i class="fas fa-envelope" style="color:blue;"></i></a>
                                                    <a href="edit.php?odID=<?php echo $fetchData['odID'] ?>" title="edit"><i
                                                        class="fas fa-edit" style="color:green;"></i></a>
                                                <a href="delete.php?odID=<?php echo $fetchData['odID'] ?>"
                                                    title="delete"><i class="fas fa-trash-alt"
                                                        style="color:red;"></i></a>

                                            </td>
                                        </tr>
                                        <?php }?>
                                        <?php }else{?>
                                        <tr>
                                            <td colspan="8">
                                                <p class="mb-0">No Data In The Database</p>
                                            </td>
                                        </tr>
                                        <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Medicare 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>