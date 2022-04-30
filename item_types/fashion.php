<?php

    $con = mysqli_connect('localhost:3307', 'root', '', 'e_commerce');

    $que="SELECT * FROM `items` WHERE `type`='Fashion'";
    $result = mysqli_query($con, $que);
    while($rows = mysqli_fetch_assoc($result)){
?>
        <div class="item">
            <div class="item-image">
                <img class="image" src="img/Items/<?php echo $rows['item_image']; ?> "alt="item image">
            </div>
            <div class="item-info">
                <h4 class="item-name"><?php echo $rows['iname']; ?></h4>
                <h5 class="item-price"><?php echo $rows['iprice']; ?><span style="font-size: 15px;">Rs</span><span class="item-offer"><?php echo $rows['ioff']; ?>% OFF</span></h5>
                <div class="ratings">
                    <i class="bi-star"></i>
                    <i class="bi-star"></i>
                    <i class="bi-star"></i>
                    <i class="bi-star"></i>
                    <i class="bi-star"></i>
                </div>
                <h4 class="item-op-icon">
                    <i id="h<?php echo $rows['id']; ?>" class="bi-heart icon" onclick="addToLike(this.id)"></i>
                    <i id="c<?php echo $rows['id']; ?>" class="bi-cart icon" onclick="addToCart(this.id)"></i>
                    <form class="top-item" action="orderPage.php" method="post">
                        <input name="item_no" type="text" value="<?php echo $rows['id']; ?>" style="display:none;"/>
                        <input name="buy" class="btn-sm buy-btn" type="submit" value="Buy"/>
                    </form>
                </h4>
            </div>
        </div>
<?php
    }
?>