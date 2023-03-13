<?php require 'components/header.php';
    $sql = "SELECT * FROM attt.Fish";
    if($connection != null)
    {
        echo'<div class="container">';
        try{
           echo'<div class="container">';
            $stm = $connection->prepare($sql);
            $stm->execute();
            $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
            $fishInfos = $stm->fetchALL();
            echo '<div class="row">';
            foreach($fishInfos as $fishinfo)
            {
                $imageurl = $fishinfo['image'];
                $fish_name = $fishinfo['name'];
                $price_beforeFortmat = $fishinfo['price'];
                $price = number_format( $fishinfo['price']);
                echo "
                <div class='col-md-3 margin-bottom'> 
                 <div class='card' style='width: 18rem; box-shadow:5px 5px 0 rgb(234, 228, 228);'>
                     <img class='card-img-top image-top' style='width:287px;height:200px;'  src='Images/$imageurl' alt='$imageurl'>
                     <div class='card-body'>
                     <h5 class='card-title'>$fish_name</h5>
                     <p class='card-text'>$price vnđ</p>
                     <form action='carts.php' method='post' style='border:none'> 
                        <input type='number' name ='quantity' min='1' max='50' value='1'>
                        <input type='submit' name ='addtocart' class='button btn btn-primary' value ='Thêm vào giỏ hàng'>
                        <input type='hidden' name='fish_name' value='$fish_name'>
                        <input type='hidden' name='price_beforeFortmat' value='$price_beforeFortmat'>
                        <input type='hidden' name='image' value='Images/$imageurl'>
                     </form>
                 </div>
              </div>
                 </div>";                
            }
            echo "</div>";
            echo'</div>';
        }catch(PDOException $e){
            echo "Cannot query database. Error:".$e->getMessage();
        }
        echo'</div>';
    }
;?>

<?php require 'components/footer.php';?>