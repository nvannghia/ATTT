<?php 
require 'components/header.php';

//session 
session_start();
//hủy(xóa) giỏ hàng
if(isset($_GET['delcart']) && $_GET['delcart'])
    unset($_SESSION['carts']);

//xóa sản phẩm trong giỏ hàng
if(isset($_GET['delcartid']) && $_GET['delcartid']) // ktra form submit ch
{
    if(isset($_GET['delid']) && $_GET['delid'] >= 0)
    {
        array_splice($_SESSION['carts'],$_GET['delid'],1);  // array_splice(mảng cần xóa,bđ từ vị trí, số pt muốn xóa);
    }

}

// nếu giỏ hàng chưa tồn tại thì tạo giỏ hàng.
if(!isset($_SESSION['carts'])) 
 $_SESSION['carts'] = [];

//lấy dữ liệu từ form.
if(isset($_POST['addtocart']) && $_POST['addtocart'])
  $fish_name = $_POST['fish_name'] ?? '';
  $price = $_POST['price_beforeFortmat'] ?? '';
  $quantity = $_POST['quantity'] ?? '';
  $image = $_POST['image'] ?? '';

  $validate_success = empty($fish_name)
                    && empty($price)
                    && empty($quantity)
                    && empty($image);

if($validate_success != true){

    $fl = 0; // biến cờ thay đổi sau khi vào các vòng lặp
    //kiểm tra sp có trong giỏ hàng hay không?
    for ($i = 0; $i < sizeof($_SESSION['carts']); $i++) {
        if ($fish_name == $_SESSION['carts'][$i][3]) {
            $newquantity = $quantity + $_SESSION['carts'][$i][2];
            $_SESSION['carts'][$i][2] = $newquantity;
            $fl = 1; // cập nhật biến cờ để chỉ rằng đã có "cá đó" trong giỏ hàng
            break;
        }
    }

    // sau khi thoát vòng lặp ở trên mà biến fl = 0 thì tức là "cá đó" không có sẵn trong cart -> tiến hành thêm mới
    //Thêm mới "cá" vào giỏ hàng
    if ($fl == 0) {
        $fish = [$image, $price, $quantity, $fish_name];
        $_SESSION['carts'][] = $fish;
    }
}
function showcart(){
  if(isset($_SESSION['carts']) && (is_array($_SESSION['carts']))){
    if(sizeof($_SESSION['carts']) > 0) // giỏ hàng đang có "cá"
    {
            $total_all = 0;
            for ($i = 0; $i < sizeof($_SESSION['carts']); $i++) {
                $total = number_format((int)$_SESSION['carts'][$i][2] * (int)$_SESSION['carts'][$i][1]);
                $total_all += (int)$_SESSION['carts'][$i][2] * (int)$_SESSION['carts'][$i][1];
                echo '<tr>
                
              <td >' . ($i + 1) . '</td>
              <td>  <img style="width:200px;height:170px" src=' . $_SESSION['carts'][$i][0] . '>  </td>
              <td>' . $_SESSION['carts'][$i][3] . '</td>
              <td>' . $_SESSION['carts'][$i][1] . '</td>
              <td>' . $_SESSION['carts'][$i][2] . '</td>
              <td>' . $total . 'vnđ</td>
              <td>
                <form style="border:none" action="carts.php" method="get"> 
                    <input type="hidden" value=' . $i . ' name="delid">
                    <input type="submit" class="btn btn-primary" name="delcartid" value="-">
                </form>
              </td>
           </tr>';
            }
            echo '<tr>
              <th colspan="6">Tổng đơn hàng </th>
              <th> <div> ' . number_format($total_all) . 'vnđ </div> </th>
         </tr>';
    } else echo "<h1>Giỏ hàng đang rỗng!<h1>";
  }
}


require 'components/footer.php'
;?>

<table class="table table-dark">
  <thead>
    <tr>
            <th >STT</th>
            <th scope='col'>Hình</th>
            <th scope='col'>Tên cá</th>
            <th scope='col'>Đơn giá</th>
            <th scope='col'>Số lượng </th>
            <th scope='col'>Thành tiền</th>
            <th scope='col'>Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php showcart();?>
  </tbody>
</table>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
    <a class="btn btn-primary" href="index.php">Tiếp tục đặt hàng</a>
     <input class="btn btn-primary" type="submit" name="delcart" value="Xóa giỏ hàng"></a>
</form>
 

