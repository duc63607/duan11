<?php 
if(isset($_GET['partnerCode'])){
		$partnerCode = $_GET['partnerCode'];
		$orderId = $_GET['orderId'];
		$amount = $_GET['amount'];
		$orderInfo = $_GET['orderInfo'];
		$orderType = $_GET['orderType'];
		$transId = $_GET['transId'];
		$payType = $_GET['payType'];
		$cart_payment = 'momo';
		//thong tin van chuyen
		$get_address = getaddress($_SESSION['id_user']);
		$id_khachhang = $_SESSION['id_user'];
		$code_order = rand(0,9999);
		$ship_address= $get_address['address'];
		$ship_name_user =  $get_address['full_name'];
		$ship_phone_user = $get_address['phone'];
		$now = date('h:i:sa d/m/Y');
		//lay thong tin van chuyen
		//insert database momo
		$insert_momo = "INSERT INTO tbl_momo(partner_code,order_id,amount,order_info,order_type,trans_id,pay_type,code_cart) VALUE('".$partnerCode."','".$orderId."','".$amount."','".$orderInfo."','".$orderType."','".$transId."','".$payType."','".$code_order."')";
		$cart_excute = pdo_execute($insert_momo);
		if($_GET['message']== "Giao dịch thành công."){
			$insert_order = "INSERT INTO `order`(id_user,code_cart,status,total,time,ship_address,ship_name_user,ship_phone_user,pttt)
			 VALUE('".$id_khachhang."','".$code_order."',1,'".$amount."','".$now."','".$ship_address."','".$ship_name_user."','".$ship_phone_user."','".$cart_payment."')";
			  pdo_execute($insert_order);	
			//insert gio hàng
			//them don hàng chi tiet
			foreach($_SESSION['cart'] as $key => $value){
				$id_sanpham = $value[0];
				
				$colors = $value[5];
				$size = $value[6];
				$soluong = $value[4];
				$insert_order_details = "INSERT INTO detail_order(id_product,id_order,quanlity,color,size) VALUE('".$id_sanpham."','".$code_order."','".$soluong."','".$colors."','".$size."')";
				pdo_execute($insert_order_details);
			}
			unset($_SESSION['cart']);
			echo '<h3 class=" text-center text-[32px]">Giao dịch thanh toán bằng MOMO thành công</h3>';
			echo '<p  class=" text-center text-[32px] ">Vui lòng vào trang <a  href="index.php?act=detail_order" class="border border-slate-300 ">Đơn hàng của tôi</a> để xem chi tiết đơn hàng của bạn</p>';
		}
		else{
			echo '<h3 class=" text-center text-[32px]">Giao dịch thanh toán bằng MOMO thất bại</h3>';
		}
	}
	else if(isset($_GET['COD'])){
		$get_address = getaddress($_SESSION['id_user']);
		$id_khachhang = $_SESSION['id_user'];
		$code_order = rand(0,9999);
		$ship_address= $get_address['address'];
		$ship_name_user =  $get_address['full_name'];
		$ship_phone_user = $get_address['phone'];
		$now = date('h:i:sa d/m/Y');
		$cart_payment = 'COD';
		$amount = $_GET["tong"];
		$insert_order = "INSERT INTO `order`(id_user,code_cart,status,total,time,ship_address,ship_name_user,ship_phone_user,pttt)
			 VALUE('".$id_khachhang."','".$code_order."',1,'".$amount."','".$now."','".$ship_address."','".$ship_name_user."','".$ship_phone_user."','".$cart_payment."')";
			  pdo_execute($insert_order);
			  if (isset($_SESSION['cart'])) {
			  
			  foreach($_SESSION['cart'] as $key => $value){
				$id_sanpham = $value[0];
				
				$colors = $value[5];;
				$size = $value[6];;
				$soluong = $value[4];
				$insert_order_details = "INSERT INTO detail_order(id_product,id_order,quanlity,color,size) VALUE('".$id_sanpham."','".$code_order."','".$soluong."','".$colors."','".$size."')";
				pdo_execute($insert_order_details);
			}}
			unset($_SESSION['cart']);
			echo '<h3 class=" text-center text-[32px]">Đặt hàng thành công, quý khách vui lòng chuẩn bị số tiền '.$amount.' VNĐ khi nhận hàng</h3>';
			echo '<p  class=" text-center text-[32px] ">Vui lòng vào trang  <a  href="index.php?act=detail_order" ><span class="text-red bg-black-300" >Đơn hàng của tôi</span></a> để xem chi tiết đơn hàng của bạn</p>';
	}
?>
