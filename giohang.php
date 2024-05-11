<?php
if (!isset($_SESSION)) session_start();
include "config.php";
include ROOT."/include/function.php";
include "autoload.php";
$db= new Db();
$cart = new Cart();
$a = new Dh();
$ac= getIndex("ac");

if ($ac=="add")
{
	$quantity = getIndex("quantity", 1);
	$id = getIndex("id");

	$cart->add($id, $quantity);
	
	/*echo $id."</br>";
	echo $quantity;*/exit;
}
//Biến $cart được tạo từ trang chủ index.php
if ($ac=="del")
		{
			$quantity = getIndex("quantity", 1);
			$id = getIndex("id");
			$cart->remove($id);
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Trang Chủ - Quần áo  thời trang</title>
</head>
<body class="preloading">
    <div class="wrapper">
        <header>
            <div class="header-wrapper">
                <div class="box-logo_mail flex-row">
                    <div class="logo">
                        <img src="../image/thanhthao.png" alt="">
                    </div>
                    <div class="phone-mail">
                        <div class="phone">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="title">
                                <span>Tư vấn sản phẩm </span>
                                <p>Phan Thanh Thảo  0822104248<p>
                            </div>
                        </div>
                        <div class="mail">
                            <div class="icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="title">
                                <span>Gmail</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-menu">
                    <div class="menu-wrapper">
                        <ul>
                        <li id="trangchu"><a href="index.php">Trang Chủ </a></li>
                            <li id="gioithieu"><a href="introduce.php">Giới Thiệu shop </a></li>
                            <li id="sanpham"><a href="product.php">Sản Phẩm chính</a></li>
                            <li id="installment"><a href="installment.php">phụ kiện ô tô </a></li>    
                            <li id="newcar"><a href="newsinformation.php">Ô Tô Mui Trần</a></li>
                            <li><a href="newcarprice.php">Siêu Xe Thể Thao</a></li>    
                            <li id="news"><a href="news.php">Đánh giá</a></li>                                             
                            <li id="contact"><a href="contact.php">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <header>
      
    <div class="giohang">
      <br>
    <a>GIỎ HÀNG</a><br>
    <a>
    <?php
		$cart->show();
		$nl= Date("Y-m-d");
		$ma= $a->chuoiTuDong();
		?>
    </a>
    <div class="button">       
    <button onclick="self.location.href='donhang.php'">ĐẶT HÀNG
		</button>
    </div>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
    </div>
    <div class="footer2">
                    <div class="footer2-content">
                        <p><i class="fa-solid fa-house-chimney"></i>Phan Thanh Thảo</p>
                        <p><i class="fa-solid fa-phone"></i>Hotline: 0822104248</p>
                        <p><i class="fa-solid fa-gear"></i>Uy tín-Đẹp-Chất lượng</p>
                    </div>
                </div>
</body>             
    <script src="../js/app.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(window).on('load', function(event){
        $('body').removeClass('preloading');
        $('.loader-wrapper').delay(1000).fadeOut('fast');
    });
    </script>
    
</header>
</html>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
        