<?php require 'components/header.php';
    session_start();
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
                $price = number_format( $fishinfo['price']);
                echo "
                <div class='col-md-3 margin-bottom'> 
                 <div class='card' style='width: 18rem;'>
                     <img class='card-img-top image-top' style='width:287px;height:200px'  src='Images/$imageurl' alt='Card image cap'>
                     <div class='card-body'>
                     <h5 class='card-title'>$fish_name</h5>
                     <p class='card-text'>$price vnđ</p>
                     <a href='#' class='btn btn-primary'>Thêm vào giỏ hàng</a>
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