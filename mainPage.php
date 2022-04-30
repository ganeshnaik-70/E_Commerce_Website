<?php

    $con = mysqli_connect('localhost:3307', 'root', '', 'e_commerce');
    session_start();
    if(isset($_POST['logout'])){
        session_destroy();
        header('location:index.php');
    }

    $que="SELECT * FROM `items`";
    $result = mysqli_query($con, $que);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
 
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/index.css" type="text/css">

    <title>Bazy.com</title>
</head>
<body>
    <div class="top-bar">
        <h3 class="top-item logo">Bazy.com</h3>
        <h5 class="username text-danger"><?php echo $_SESSION['fname'];?></h5>
        <div class="top-item side-items">
            <div class="top-item">
                <input class="search" type="text" placeholder="search">
                <input type="submit" value="Search">
            </div>
            <h3 class="top-item special-item">
                <i class="bi-heart special-item"></i>
                <button type="submit" class="logout" onclick="openStore(this.id)"><i class="bi-bag-check special-item"></i></button>
                <form action="mainPage.php" method="POST" class="top-item">
                    <button type="submit" name="logout" class="logout"><i class="bi bi-box-arrow-right special-item"></i></button>
                </form>
            </h3>
        </div>
    </div>
    <div class="topnav">
        <a class='' id='M' href="#Mobiles" onclick="changeItems('mobile', this.id)">Mobiles</a>
        <a class='active' id='F' href="#Fashion" onclick="changeItems('fashion', this.id)">Fashion</a>
        <a class='' id='E' href="#Electronics" onclick="changeItems('electronics', this.id)">Electronics</a>
        <a class='' id='S' href="#Shoes" onclick="changeItems('shoes', this.id)">Shoes</a>
        <a class='' id='FA' href="#Furniture_and_Appliances" onclick="changeItems('furniture', this.id)">Furniture and Appliances</a>
        <a class='' id='H' href="#Health_Care" onclick="changeItems('health', this.id)">Health Care</a>
        <a class='' id='K' href="#Kids_Toys" onclick="changeItems('kids', this.id)">Kids Toys</a>
        <a class='' id='G' href="#Groceries" onclick="changeItems('groceries', this.id)">Groceries</a>
    </div>
    <div class="content-box">
        <div class="items-box" id='fashion'>
            <?php include "item_types/fashion.php" ?>
        </div>
        <div class="items-box" id='mobile' style="display:none;">
            <?php include "item_types/mobiles.php" ?>
        </div>
        <div class="items-box" id='electronics' style="display:none;">
            <?php include "item_types/electronics.php" ?>
        </div>
        <div class="items-box" id='shoes' style="display:none;">
            <?php include "item_types/shoes.php" ?>
        </div>
        <div class="items-box" id='furniture' style="display:none;">
            <?php include "item_types/furniture.php" ?>
        </div>
        <div class="items-box" id='health' style="display:none;">
            <?php include "item_types/health.php" ?>
        </div>
        <div class="items-box" id='kids' style="display:none;">
            <?php include "item_types/kids.php" ?>
        </div>
        <div class="items-box" id='groceries' style="display:none;">
            <?php include "item_types/groceries.php" ?>
        </div>
        <div class="items-box" id='booking' style="display:none;">
            <?php include "item_types/book.php" ?>
        </div>
        <div class="offer-box">
            <div class="offers">
                <div class="offer-item" style="background-color: rgb(170, 214, 250);">
                    <h2 class="Offtitle">Special Offers</h2>
                </div> 
                <div class="offer-item">
                    <h5 class="offer-tag">20% OFF on Fashion Items</h5>
                </div>
                <div class="offer-item">
                    <h5 class="offer-tag">10% OFF on Mobile Phones</h5>
                </div>
                <div class="offer-item">
                    <h5 class="offer-tag">30% OFF on Shoes</h5>
                </div>
                <div class="offer-item">
                    <h5 class="offer-tag">20% OFF on Electronics Items</h5>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addToLike(id){
            var icon = document.getElementById(id);
            if(icon.classList.contains("bi-heart")){
                icon.classList.remove("bi-heart");
                icon.classList.add("bi-heart-fill");
                icon.style["color"]="red";
            }
            
            else if(icon.classList.contains("bi-heart-fill")){
                icon.classList.remove("bi-heart-fill");
                icon.classList.add("bi-heart");
                icon.style["color"]="black";
            }
        }
        function addToCart(id){
            var icon = document.getElementById(id);
            if(icon.classList.contains("bi-cart")){
                icon.classList.remove("bi-cart");
                icon.classList.add("bi-cart-fill");
                icon.style["color"]="blue";
            }
            
            else if(icon.classList.contains("bi-cart-fill")){
                icon.classList.remove("bi-cart-fill");
                icon.classList.add("bi-cart");
                icon.style["color"]="black";
            }
        }
        function changeItems(id, thisid){
            removeActive();
            makeDisplayNone();
            var itemid = document.getElementById(id);
            itemid.style['display']='block';
            document.getElementById(thisid).classList.add("active");
        }
        function removeActive(){
            document.getElementById('M').classList.remove("active");
            document.getElementById('F').classList.remove("active");
            document.getElementById('E').classList.remove("active");
            document.getElementById('S').classList.remove("active");
            document.getElementById('FA').classList.remove("active");
            document.getElementById('H').classList.remove("active");
            document.getElementById('K').classList.remove("active");
            document.getElementById('G').classList.remove("active");
        }
        function makeDisplayNone(){
            document.getElementById('fashion').style['display']='none';
            document.getElementById('mobile').style['display']='none';
            document.getElementById('electronics').style['display']='none';
            document.getElementById('shoes').style['display']='none';
            document.getElementById('furniture').style['display']='none';
            document.getElementById('health').style['display']='none';
            document.getElementById('kids').style['display']='none';
            document.getElementById('groceries').style['display']='none';
            document.getElementById('booking').style['display']='none';
        }
        function openStore(id){
            makeDisplayNone();
            removeActive();
            document.getElementById('booking').style['display']='block';
        }
    </script>
</body>
</html>