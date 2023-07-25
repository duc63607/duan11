<?php
// Khởi tạo session bằng session_start()
session_start();
ob_start();

include "../global.php";
include "../guest/category.php";
include "../guest/order.php";
include "../guest/product.php";
include "../guest/account.php";
include "../guest/binh_luan.php";
include "../site/layout/header.php";
$san_pham = count(lay_tat_ca_san_pham_guest());
$dsdm = lay_tat_ca_danh_muc();
$sptop10 = lay_san_pham_noi_bat();
$sugget = lay_san_pham_goi_y();
// Kiểm tra biến chuyển trang ?act
if (isset($_GET['act'])) {
  // Nếu tồn tại giá trị biến ?act thì gán $_GET['act'] cho biến $act
  $act = $_GET['act'];

  // Kiểm tra các trường hợp chuyển trang
  switch ($act) {
      // Trang sản phẩm
    case "san_pham":
      if (isset($_POST['kw']) && ($_POST['kw'] != "")) {
        $kw = $_POST['kw'];
      } else {
        $kw = "";
      }
      if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
        $iddm = $_GET['iddm'];
      } else {
        $iddm = 0;
      }
      $ds_san_pham = lay_tat_ca_san_pham($kw, $iddm);
      $tendm = load_ten_dm($iddm);
      $danh_sach_sp_moi = lay_san_pham_theo_trang('id', 9);
      //  $ds_san_pham = lay_san_pham_theo_kw($kw);
      include "san-pham/products.php";
      break;
    case 'signup':
      if (isset($_POST['confirm'])) {
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = ($_POST['password']);
        $address = $_POST['address'];
        $role = 1;
        $_SESSION['role'] = $role;
        $sql_dangky = pdo_execute("INSERT INTO `user`( `user_name`, `full_name`, `email`, `phone`, `address`, `role`, `password`) VALUES ('$username','$fullname','$email','$phone','$address','$role','$password')");
        echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
        $_SESSION['dangky'] = $fullname;
        $_SESSION['email'] = $email;
        $_SESSION['id_user'] = search_id();
        header('Location:index.php?act=home');
      }
      break;
    case 'signin':
      if (isset($_POST['signin']) && ($_POST['signin'])) {
        $user = $_POST['name'];
        $pass = $_POST['password'];
        $check_user = check_user($user, $pass);
        if (is_array($check_user)) {
          $_SESSION['dangky'] = $check_user['full_name'];
          $_SESSION['role'] = $check_user['role'];
          $_SESSION['id_user'] = $check_user['id'];
          if ($check_user['role'] == 1) {
            header('Location: ../admin/index.php');
          } else {
            // $thongbao = "Bạn đã đăng nhập thành công!";
            header('Location: index.php');
          }
        } else {
          echo 'Sai tên tài khoản hoặc mật khẩu';
        }
      }
      break;
    case 'signout':
      if (isset($_POST['signout']) && ($_POST['signout'])) {
        session_unset();
        header('Location: index.php');
      }
      break;
    case 'addtocart':
      $_SESSION['thongbao'] = "";
      if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
      if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
        if ((!isset($_POST['colors'])) || (!isset($_POST['size']))) {
          $_SESSION['thongbao'] = "Vui lòng chọn đầy đủ màu và size";
          header('location: index.php?act=productdetail&id=' . $_POST['id'] . '');
          break;
        }
        $colors = $_POST['colors'];
        $size = $_POST['size'];
        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $image = $_POST['image'];
        $product_price = $_POST['product_price'];
        $sl = 1;
        $i = 0;
        $arr = [$id, $product_name, $image, $product_price, $sl, $colors, $size];
        $check = 0;
        foreach ($_SESSION['cart'] as $product) {
          if ($product[0] == $id && $product[5] == $colors && $product[6] == $size) {
            //cập nhật mới số lượng
            $sl += $product[4];
            $tm = 1;
            //cập nhật số lượng mới vào giỏ hàng
            $_SESSION['cart'][$i][4] = $sl;
            $check = 1;
            break;
          }
          $i++;
        }
        if ($check == 0) {
          array_push($_SESSION['cart'], $arr);
        }
        $tm = 0;
        // tìm và so sánh sp trong giỏ hàng
        include "cart/viewcart.php";
      }
      break;
    case 'delcart':
      if (isset($_GET['idcart'])) {
        array_splice($_SESSION['cart'], $_GET['idcart'], 1);
      } else {
        $_SESSION['cart'] = [];
      }
      header('Location: index.php?act=viewcart');
      break;
    case 'viewcart':
      include "cart/viewcart.php";
      break;
    case "gioi_thieu":
      include "layout/gioithieu.php";
      break;
    case "lien_he":
      include "layout/lienhe.php";
      break;
    case "productdetail":
      $pro = [];
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        update_view($_GET['id']);
        $pro = showspdetail($_GET['id']);
        if (isset($_POST['stars'])) {
          $comment = $_POST['comment'];
          $ma_hang_hoa = $_GET['id'];
          // date_format(object, format): hàm trả về ngày(date) theo định dạng được chỉ định
          // *) object: tạo một(khởi tạo) đối tượng date bằng date_create()
          // *) format: chỉ định định dạng cho kiểu ngày
          $ngay_bl = date_format(date_create(), 'Y-m-d'); // format theo năm - tháng - ngày
          $stars = $_POST['stars'];
          // Thêm bình luận 
          them_binh_luan($comment, $_GET['id'], $_SESSION['id_user'], $ngay_bl, $stars);
          $danh_sach_bl = lay_binh_luan_theo_hh($ma_hang_hoa);

          include "san-pham/productdetail.php";
        }


        // Lấy danh sách bình luận theo hàng hóa với tham số $ma_hang_hoa ở trên


        else {
          $ma_hang_hoa = $_GET['id'];
          
          $danh_sach_bl = lay_binh_luan_theo_hh($ma_hang_hoa);
          include "san-pham/productdetail.php";
        }
      }
      break;
    case 'camon':
      include "thanhtoan/camon.php";
      break;
    case 'thanhtoan':
      if (isset($_SESSION['dangky'])) {
        $money = $_GET['tong'];
        include "thanhtoan/xulythanhtoanmomo.php";
      } else {
        echo '<h1 class=" text-center text-[32px] border border-slate-300 ...">Vui lòng đăng nhập để thanh toán</h1>';
        include "cart/viewcart.php";
      }
      break;
    case 'thanhtoan_COD':
      if (isset($_SESSION['dangky'])) {
        $money = $_GET['tong'];
        include "thanhtoan/camon.php";
      } else {
        echo '<h1 class=" text-center text-[32px] border border-slate-300 ...">Vui lòng đăng nhập để thanh toán</h1>';
        include "cart/viewcart.php";
      }
      break;
    case 'detail_order':
      include "detail_order.php";
      break;
    default:
      include "../site/layout/home.php";
      $san_pham = count(lay_tat_ca_san_pham_guest());
      break;
  }
} else {
  include "../site/layout/home.php";
  $danh_sach_sp_noi_bat = lay_san_pham_noi_bat();
  $danh_sach_sp_hot = lay_san_pham_dac_biet();
  $san_pham = count(lay_tat_ca_san_pham_guest());
}
include "../site/layout/footer.php";
