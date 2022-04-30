<?php 
if(isset($_POST['logout'])){
    session_destroy();
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
            </a>
            <a href="#" class="simple-text logo-normal">
            <?php
            echo $_SESSION['fname'];
            ?>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            <li>
                <a href="./addItem.php">
                <i class="nc-icon nc-simple-add"></i>
                <p>Sell Item</p>
                </a>
            </li>
            <li>
                <a href="./updateCoffee.php">
                <i class="nc-icon nc-layout-11"></i>
                <p>Item List</p>
                </a>
            </li>
            <li>
                <a href="./updateCoffee.php">
                <i class="nc-icon nc-single-02"></i>
                <form action="../index.php" method="get">
                    <p><input style="border-style: none; background-color:white;" type="submit" value="Logout" name="logout"></p>
                </form>
                </a>
            </li>
            </ul>
        </div>
    </div>
    <script>
        function check(){
            console.log("hello world");
        }
    </script>
</body>
</html>