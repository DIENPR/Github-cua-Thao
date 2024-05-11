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
    <title>Trang Chủ - Công Ty Thanh Thảo Ô tô Việt Trì - Phú Thọ</title>
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
    <div style="clear: both"></div>
<div class="product-toyotaxe " style="background-color: white">
	<div class="row">
		<div class="col-xs-12">
			<div class="tieu_de">
								<?php
		        $obj = new Dongdt();
		        $data = $obj->getOne('SA03');
		        foreach ($data as $r) {
		       
				?>
				<h2><?php echo $r['TenDongDT']; ?></h2>
			</div>
		</div>			
			<div class="imageChange"> 			
					<img src="image/gg/cl7.jpg" style="float:left; width:1200px;height:600px;" />			
			</div>
		</div>		
		</div>
		<div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background-color: white">
			<div class="mua_hang">
                <a>𝔾𝕚á𝕋𝕚ề𝕟:</a>
				<h2><?php echo $r['DonGia']; ?> ₫</h2>
			</div>
			<div>
				<ul>
					<li>
						<label>𝘾𝙝𝙞 𝙩𝙞ế𝙩 𝙭𝙚:</label><br>
						<span>Porsche Taycan là dòng xe Sedan lai Coupe 4 cửa chạy điện hoàn toàn của nhà sản xuất ô tô Porsche, Đức. Được giới thiệu lần đầu dưới dạng concept tại triển lãm Frankfurt Motor Show 2015 và chính thức ra mắt cũng tại triển lãm này năm 2019.

Theo tiếng Thổ Nhĩ Kỳ, Taycan tức là "ngựa ngon dũng mãnh". Dự án sản xuất xe điện hoàn toàn Porsche Taycan ngốn của Porsche tới 6 tỷ USD cùng 5 năm nghiên cứu. 1.200 nhân sự trình độ cao được tuyển mới chỉ để phục vụ cho dự án này. Xe được sản xuất tại nhà máy Zuffenhausen của Porsche ở Stuttgart, Đức.

porsche-taycan-ra-mat

Porsche Taycan là mẫu xe chạy điện hoàn toàn đầu tiên của Porsche, hứa hẹn sẽ cạnh tranh với các đối thủ như Tesla Model S.

porsche-taycan-ra-mat-tai-viet-nam

Porsche Taycan ra mắt tại Việt Nam

Porsche Taycan 2024 chính thức ra mắt tại Việt Nam trong tháng 10 năm 2020, dù trước đó nhiều tháng đã nhận đơn đặt hàng. Taycan cũng đã vinh dự giành được giải thưởng Xe Thế Giới của Năm 2020 (World Car of the Year 2020) ở cả hai hạng mục: Xe Hiệu Suất Cao Của Năm và Xe Sang Trọng Của Năm.

Porsche-Taycan-Cross-Turismo-co-gia-bao-nhieu

Porsche Taycan Cross Turismo

Sau một năm ra mắt Porsche Taycan tại Việt Nam, Porsche Việt Nam tiếp tục trình làng phiên bản Porsche Taycan Cross Turismo vào tháng 10-2021. Đây là chiếc shooting brake lai crossover của Taycan.
					</li>
				</ul>
			</div>					
		</div>
		<div>
				<div class="col-lg-12 col-md-12 col-sm-6 col-zs-12 mua_hang_1" style="margin-top: 20px;">
					<div class="dat_hang">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dat_hang_2">
							<button onclick="self.location.href='giohang.php?ac=add&id=<?php echo $r["MaDongDT"];?>'">THÊM VÀO GIỎ HÀNG<br>
							</button>
						</div>
						<?php } ?>
					</div>				
				</div>
		</div>
	</div>
</div>

<footer>
                <div class="footer1">
                    <div class="footer1-left">
                        <h1>
                        Công ty Thanh Thảo Shop Ô tô Việt Trì - Phú Thọ
                        </h1>
                        <h3>
                        <b>Công ty Thanh Thảo Shop Ô tô Việt Trì - Phú Thọ</b> là công ty chuyên sản xuất xe ô tô hạng sang những ô tô nổi tiếng trên khắp thế giới được thành vào năm 15/1/1990.<br>
                           Địa chỉ: Đường Hùng Vương Khu 4 - Vân Phú, thành phố Việt Trì, Tỉnh Phú Thọ.
                        <p>Hotline Phan Thanh Thảo: 0822104248</p>
                    </div>
                    <div class="footer1-right">
                        <div class="left">
                            <h2>giới thiệu</h2>
                            <ul>
                                <li id="gioithieuFooter"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                    </svg>
                                  <a href="#">Giới thiệu</li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                  </svg>
                                  <a href="#">Sản phẩm</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                  </svg>
                                  <a href="#">Bảng giá</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                  </svg>
                                  <a href="#">Tin tức</a></li>
                            </ul>
                        </div>  
                        <div class="right">
                            <h2>chính sách</h2>
                            <ul>
                                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                  </svg>
                                  <a href="#">Chính sách bán hàng</a></li>
                                <li id="installmentFooter"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                  </svg>
                                  <a href="#">Chính sách bảo hành</a></li>
                                <li id="newcarFooter"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                  </svg>
                                  <a href="#">Giá mặt hàng</a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                  </svg>
                                  <a href="#">ship toàn quốc</a></li>
                            </ul>
                        </div>                    
                    </div>
                </div>
                <div class="footer2">
                    <div class="footer2-content">
                        <p><i class="fa-solid fa-house-chimney"></i>Phan Thanh Thảo</p>
                        <p><i class="fa-solid fa-phone"></i>Hotline: 0822104248</p>
                        <p><i class="fa-solid fa-gear"></i>Uy tín-Đẹp-Chất lượng</p>
                    </div>
                </div>
            </footer>
        </div>
                </header>
</body>
</html>
