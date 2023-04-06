<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <style>
        .z{
            width: 30%;
            float: right;
        }
    </style>
</head>
<?php 
    include("../admincp/connect/config.php");
    session_start();
    
?>
<body>
    <!-- Topbar Start -->
    <?php include("topbar.php"); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <?php
                            include("menu.php") 
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

  
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
               <p>Xin chào : 
                <?php
                    if(isset($_SESSION['dangky'])){
                        echo $_SESSION['dangky'];
                        
                    } 
                    
                ?>
                
               </p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <?php
	if(isset($_SESSION['cart'])){

	}
    ?>

    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Id</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá sản phẩm</th>
                            <th>Thành tiền</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <?php
                        if(isset($_SESSION['cart'])){
                        $i = 0;
                        $tongtien = 0;
                        foreach($_SESSION['cart'] as $cart_item){
                            $thanhtien =$cart_item['soluong']*$cart_item['giasp'];
                            $tongtien+=$thanhtien;
                            $i++;
                    ?>
                    <tr>
                        <td class="align-middle"><img src="/admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']?>" alt="" style="width: 50px;"></td>
                        <td class="align-middle"><?php echo $i; ?></td>
                        <td class="align-middle"><?php echo $cart_item['tensanpham']; ?></td>
                        <td class="align-middle"><?php echo $cart_item['masp']; ?></td>
                        <td class="align-middle">
                                <!-- <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div> -->
                            <a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-square-plus"></i></a>
                            <?php echo $cart_item['soluong']; ?>
                            <a href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-square-minus"></i></a>
                                    <!-- <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div> -->
                        </td>
                        <td class="align-middle"><?php echo number_format($cart_item['giasp'],0,',','.').'vnd' ?></td>  
                        <td class="align-middle"><?php echo  number_format($thanhtien,0,',','.').'vnd'?></td>
                        <td class="align-middle"><a href="themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
                        
                    </tr>


                    <?php
                        }
                    ?>
                    <tr>  
                        <td colspan="8">
                            
                            <p>Tổng tiền : <?php echo  number_format($tongtien,0,',','.').'vnd'?></p>
                            <p style="text-align:center; padding: 15px"><a href="themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
                            <?php
                            if(isset($_SESSION['dangky'])){
                                ?>
                               <form method="POST"  action="thanhtoanmomo.php">
                                <input type="hidden" value="<?php echo $tongtien ?>" name="tongtien">
                                <input type="submit" class="btn btn-danger" value="Thanh toán momo" name="payUrl">
                            </form>
                            <?php  
                            }else{
                            ?>
                                <p><a href="dangky.php?quanly=dangky">Đăng ký đặt hàng</a></p>
                            <?php    
                            }   
                            ?>
                    
                           
                        </td>
                        <php
                         
                        ?>
                        
                    </tr>
                    <?php
                    }else {
                    ?>       
                    <tr>
                        <td colspan="8">Hiện tại giỏ hàng trống</td>
                    </tr>
                    <?php
                    } 
                    ?>
                </table>

            </div>
           
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>