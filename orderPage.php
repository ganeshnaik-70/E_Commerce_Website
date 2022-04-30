<?php

$con = mysqli_connect('localhost:3307', 'root', '', 'e_commerce');
session_start();

if (isset($_POST['buy'])) {
    $item_no = $_POST['item_no'];
    $_SESSION['i_no']=$item_no;
    $que="SELECT * FROM `items` WHERE `id`='$item_no'";
    $result = mysqli_query($con, $que);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Item</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!--My css-->
    <link rel="stylesheet" type="text/css" href="css/orderPage.css">
</head>
<body>
    <div class="container mt-5 pt-3 pb-5">
        <h2>Buy Items</h2><hr>
        <div class="content">
            <?php
                while($rows = mysqli_fetch_assoc($result))
                {
            ?>
            <div class="image">
                <img class="item-image" src="img/Items/<?php echo $rows['item_image']; ?>" alt="item Image">
            </div>
            <div class="details">
                <h3><?php echo $rows['iname']; ?></h3><hr>
                <p><?php echo $rows['idesc']; ?></h3></p>
                <h5 id="price">Rating: <?php echo $rows['rating']; ?> </h5>
                <h5 id="price">Quantity Available: <?php echo $rows['quantity']; ?></h5>
                <?php $_SESSION['price']= $rows['iprice'];?>
                <h5 id="price">Price: <?php echo $rows['iprice']; ?> Rs</h5>
                <h5 id="price">Offer Discount: <?php echo $rows['ioff']; ?> %</h5>
                <form action="payment.php" method="POST">
                    <input type="submit" name="order" class="btn btn-warning btn-sm" value="Buy">
                </form>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction(index) {
            document.getElementById("myDropdown1").classList.remove('show');
            document.getElementById("myDropdown"+index).classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        function trackChange(val){
            var b = parseInt(val)
            if(!isNaN(b)){
                var value=document.getElementById("price").innerHTML;
                console.log(value.slice(7,9));
                document.getElementById("total").innerHTML="Total: "+parseInt(value.slice(7,9))*b+" $";
                document.getElementById("totalbox").value=parseInt(value.slice(7,9))*b;
            }
        }
    </script>

    <!--Bootstrap and JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>