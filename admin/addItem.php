<?php
  $con = mysqli_connect('localhost:3307', 'root', '', 'e_commerce');
  session_start();

  if(isset($_POST['sellItem'])){
    $iname = $_POST['iname'];
    $idesc = $_POST['idesc'];
    $iprice = $_POST['iprice'];
    $ioff = $_POST['ioff'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];
    $sname=$_SESSION['fname'];
    $spassword=$_SESSION['password'];

    $que="INSERT INTO `items`(`iname`, `idesc`, `iprice`, `ioff`, `quantity`, `type`, `item_image`, `rating`, `sname`, `password`) VALUES ('$iname' ,'$idesc','$iprice','$ioff','$quantity','$type','$filename',0,'$sname','$spassword')";
    $folder = "../img/Items/".$filename;
    // Get all the submitted data from the form
    mysqli_query($con, $que);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder))  {
      header('location:addItem.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Salers Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    .input-box{
      width: 300px;
      height: 40px;
      margin-left: 20px;
    }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    <?php include 'nav.php'; ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Sell New Items</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-body bg-light">
                <div class="table-upgrade">
                  <form class="col-md-6 ml-auto mr-auto" method="POST" action="addItem.php" enctype="multipart/form-data">
                    <input name="iname" class="input-box my-2" type="text" value="" placeholder="Item Name" required>
                    <input name="idesc"  class="input-box my-2" type="text" value="" placeholder="Item Description" required>
                    <input name="iprice" class="input-box my-2" type="text" value="" placeholder="Price" required>
                    <input name="ioff" class="input-box my-2" type="number" value="" placeholder="Discount on Item (in %)" min="0" max="100" required>
                    <h5 class="input-box my-0">Add Item Image</h5>
                    <input name="image" class="input-box my-2" type="file" value="" placeholder="Select Image" required>
                    <input name="quantity" class="input-box my-2" type="number" value="" placeholder="Enter the Quantity of item" min="1" required>
                    <h5 class="input-box my-0">Select Item Type</h5>
                    <select class="input-box" name="type" id="type">
                      <option value="Mobiles">Mobiles</option>
                      <option value="Fashion">Fashion</option>
                      <option value="Electronics">Electronics</option>
                      <option value="Shoes">Shoes</option>
                      <option value="Furnitures">Furniture and Appliances</option>
                      <option value="Health">Health Care</option>
                      <option value="Kids">Kids Toys</option>
                      <option value="Groceries">Groceries</option>
                    </select>
                    
                    <input name="sellItem" class="input-box my-2 btn btn-primary" type="submit" value="Sell Item">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>