<?php 
$sql = 'SELECT * from orders where user_id = "' . $_SESSION['id'] . '"';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)){
    echo '<div class="order-box dashboard-bg-box">
        <div class="order-container">
            <div class="order-icon">
                <i data-feather="box"></i>
            </div>';
        if($row['delivery_status'] == "Pending"){
            echo '<div class="order-detail">
            <h4>Yet to Deliver <span>Pending</span></h4>
            <h6 class="text-content"></h6>
        </div>
    </div>';
        }else if($row['delivery_status'] == "Confirmed"){
            echo '<div class="order-detail">
            <h4>Order is Preparing<span>Confirmed</span></h4>
            <h6 class="text-content"></h6>
        </div>
    </div>';
        }
    

    $pids = explode(",", $row['products']);
    $rates = explode(",", $row['rate']);
    $quantity = explode(",",$row['quantity']);
    for($i=0; $i<count($pids); $i++){
        $sqli = 'SELECT * from products where pid =  "' .$pids[$i]. '"';
        $results = mysqli_query($conn, $sqli);
        $rows = mysqli_fetch_assoc($results);

        echo '   <div class="product-order-detail ">
        <a href="product-left-thumbnail.php?product='.$rows['pname'].'" class="order-image">
            <img src="'.$rows['image_url'].'" alt="" class="blur-up lazyload" width="130" height="130" style="border-radius: 10px;">
        </a>

        <div class="order-wrap">
            <a href="product-left-thumbnail.php?product='.$rows['pname'].'">
                <h3>'.$rows['pname'].'</h3>
            </a>
          
            <ul class="product-size">
                <li>
                    <div class="size-box">
                        <h6 class="text-content">Price : </h6>
                        <h5>'.$quantity[$i]*$rates[$i].'.00</h5>
                    </div>
                </li>

                <li>
                    <div class="size-box">
                        <h6 class="text-content">Sold By : </h6>
                        <h5>Fastkart</h5>
                    </div>
                </li>

                <li>
                    <div class="size-box">
                        <h6 class="text-content">Quantity : </h6>
                        <h5>'.$quantity[$i].'</h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>';


    }
  }
}else{
    echo "No orders placed yet";
}

?>