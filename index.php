<?php
session_start();
include "config.php";
include "autoload.php";
include ROOT."/include/function.php";
$db= new Db();
$obj = new Dongdt();
$cart = new Cart();
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
                        <a href="giohang.php">
                    <img src="image/giohang-icon.png" alt="Giỏ hàng">
                </a>
                        </div>
                    </div>
                </div>
                <div class="box-menu">
                    <div class="menu-wrapper">
                        <ul>
                        <li id="trangchu"><a href="index.php">Trang Chủ </a></li>
                            <li id="gioithieu"><a href="introduce.php">Giới Thiệu shop </a></li>
                            <li id="sanpham"><a href="product.php">Sản Phẩm chính</a></li>
                            <li id="installment"><a href="phukien.php">phụ kiện ô tô </a></li>    
                            <li id="newcar"><a href="newsinformation.php">Ô Tô Mui Trần</a></li>
                            <li><a href="newcarprice.php">Siêu Xe Thể Thao</a></li>    
                            <li id="news"><a href="news.php">Đánh giá</a></li>                                             
                            <li id="contact"><a href="contact.php">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="body_shop">
            <div class="body_shop-wrapper">
                <div class="slideshow">
                    <button class="left"><i class="fa-solid fa-chevron-left"></i></button>
                    <div class="imageToyota">
                        <img src="image/bìa/b8.jpg" alt="">
                        <img src="image/bìa/b9.jpg" alt="">
                        <img src="image/bìa/b6.jpg" alt="">
                    </div>
                    <button class="right"><i class="fa-solid fa-chevron-right"></i></button>
                    <div class="list-slide">
                        <div class="box-list">
                            <span for="radio1" class="active"></span>
                            <span for="radio1"></span>
                            <span for="radio1"></span>
                        </div>
                    </div>
                </div>
                <div class="product1">
                    <div class="title-product">
                        <h1>Xe Porsche</h1>
                    </div>
                    <div class="product-toyota">
                        <button class="leftproduct"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="product-toyotaxe">
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/gg/cl7.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Porsche</h3>
                                        <span>4.880.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/gg/cl8.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Porsche</h3>
                                        <span>4.380.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/gg/cl9.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Porsche</h3>
                                        <span> 7.620.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/gg/cl10.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Porsche</h3>
                                        <span>8.310.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/gg/cl11.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Porsche</h3>
                                        <span>8.470.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/gg/cl12.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Porsche</h3>
                                        <span> 9.630.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="rightproduct"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="product2">
                    <div class="title-product">
                        <h1>Xe BMW</h1>
                    </div>
                    <div class="product2-toyota">
                        <button class="leftproduct2"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="product2-toyotaxe">
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/lv/6.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe BMW</h3>
                                        <span>6.299.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/lv/7.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe BMW</h3>
                                        <span>6.899.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/lv/8.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe BMW</h3>
                                        <span>7.199.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="product-item1 product-xe">
                            <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/lv/9.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe BMW</h3>
                                        <span>10.099.000.000 <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/lv/10.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe BMW</h3>
                                        <span>6.599.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/lv/11.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe BMW</h3>
                                        <span>7.399.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <button class="rightproduct2"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="product3">
                    <div class="title-product">
                        <h1>Xe AUDI</h1>
                    </div>
                    <div class="product3-toyota">
                        <button class="leftproduct3"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="product3-toyotaxe">
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/bl/7.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe AUDI</h3>
                                        <span>3.200.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/bl/8.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe AUDI</h3>
                                        <span>5.200.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/bl/9.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe AUDI</h3>
                                        <span>6.000.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/bl/10.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe AUDI</h3>
                                        <span>3.460.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/bl/11.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe AUDI</h3>
                                        <span>4.976.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/bl/12.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe AUDI</h3>
                                        <span>7.890.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="rightproduct3"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="product4">
                    <div class="title-product">
                        <h1>Xe MAYBACH</h1>
                    </div>
                    <div class="product4-toyota">
                        <button class="leftproduct4"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="product4-toyotaxe">
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/mlb/7.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe MAYBACH</h3>
                                        <span>8.199.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/mlb/8.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe MAYBACH</h3>
                                        <span>8.713.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/mlb/9.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe MAYBACH</h3>
                                        <span>9.612.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/mlb/10.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe MAYBACH</h3>
                                        <span>8.799.000.000 VNĐ<u></u></span> 
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/mlb/11.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe MAYBACH</h3>
                                        <span>15.990.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/mlb/12.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe MAYBACH</h3>
                                        <span>12.199.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="rightproduct4"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="product5">
                    <div class="title-product">
                        <h1>Xe Rolls-Royce</h1>
                    </div>
                    <div class="product5-toyota">
                        <button class="leftproduct5"><i class="fa-solid fa-chevron-left"></i></button>
                        <div class="product5-toyotaxe">
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/dr/7.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Rolls-Royce</h3>
                                        <span>29.900.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/dr/8.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Rolls-Royce</h3>
                                        <span>31.391.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/dr/9.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Rolls-Royce</h3>
                                        <span>35.494.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item1 product-xe">
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/dr/10.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Rolls-Royce</h3>
                                        <span>36.348.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/dr/11.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Rolls-Royce</h3>
                                        <span>38.653.000.000 VNĐ <u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                                <div class="productvios">
                                    <div class="image-product">
                                        <img src="../image/dr/12.jpg" alt="">
                                    </div>
                                    <div class="product-title">
                                        <h3>Xe Rolls-Royce</h3>
                                        <span>41.072.000.000 VNĐ<u></u></span>
                                        <a href="chitiet.php">chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <button class="rightproduct5"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="youtube-posts">
                <div class="youtubeposts-wrapper">
                    <div class="box-youtube">
                        <div class="youtube-wrapper">
                            <iframe width="400" height="325" src="../image/thanhthao.png" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="box-posts">
                        <div class="posts-content">
                            <div class="image-content">
                                <img src="../image/mau2.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Chọn màu ô tô phù hợp với chủ xe theo phong thủy</h3>
                                <p>Việc chọn ô tô theo phong thủy mang lại nhiều may mắn và tài lộc chủ xe cần phải xác định được năm sinh của mình tương ứng với mệnh gì trong ngũ hành phong thủy từ đó chọn màu xe cho phù hợp với tuổi.</p>
                            </div>
                        </div>
                        <div class="posts-content">
                            <div class="image-content">
                                <img src="../image/nhanhieu1.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Chọn các nhãn hiệu của xe</h3>
                                <p>Trên thế giới hiện nay có rất nhiều các thương hiệu xe hơi có tiếng. Mỗi hãng xe trên thế giới đều có nhiều loại, thậm chí nhiều màu và nhiều phân khúc, việc chọn nhãn hiệu xe ô tô tùy sở thích của mỗi người thích mua và lựa chọn hãng nào </p>
                            </div>
                        </div>
                        <div class="posts-content">
                            <div class="image-content">
                                <img src="../image/tien.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Chọn mua đắt hay rẻ</h3>
                                <p>Việc chọn mua đắt hay rẻ tùy thuộc vào tài chính của mỗi người. Họ có thể bỏ tiền ra mua những loại ô tô đắt tiền để đi và đó cũng là niềm đam mê của họ  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer1">
                    <div class="footer1-left">
                        <h1>
                        Công Ty Thanh Thảo Ô tô Việt Trì - Phú Thọ
                        </h1>
                        <h3>
                        <b>Công Ty Thanh Thảo Ô tô Việt Trì - Phú Thọ</b> là công ty chuyên sản xuất xe ô tô hạng sang những ô tô nổi tiếng trên khắp thế giới được thành vào năm 15/1/1990.<br>
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
        <div class="phoneFixed">
            <div class="phone-wrapper">
                <i class="fa-solid fa-phone"></i>
            </div>
        </div>

        <div class="loader-wrapper">
            <div class="loader">
                <div class="inner one" style="--i:1;"></div>
                <div class="inner two" style="--i:1;"></div>
                <div class="inner three" style="--i:1;"></div>
                <div class="box-heart">
                    <div class="heart"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/app.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(window).on('load', function(event){
        $('body').removeClass('preloading');
        $('.loader-wrapper').delay(1000).fadeOut('fast');
    });
    </script>
</body>
</html>