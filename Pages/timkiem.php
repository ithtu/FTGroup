<?php 
    include("../admincp/connect/config.php");
    if(isset($_POST['timkiem'])){
       $tukhoa = $_POST['tukhoa'];
    }
   
    $sql_pro = "SELECT * FROM `tbl_sanpham` AS a, `tbl_danhmuc` AS b WHERE (a.id_danhmuc = b.id_danhmuc AND b.tendanhmuc LIKE '%".$tukhoa."%') OR (a.tensanpham LIKE '%".$tukhoa."%' AND a.id_danhmuc = b.id_danhmuc); ";

    $query_pro = mysqli_query($mysqli,$sql_pro);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>T-Phone</title>
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
</head>
<?php
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
                    <div><a href="index.php">
                        <img style="width: 30px; margin-right: 20px;" src="img/back.png"/>
                        </a>
                        
                        </div>
                       <?php
                            
                            include("menu.php") ;
                        ?>
                        
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


   

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
        <!-- value after search -->
        <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Từ khóa tìm kiếm: <?php echo $tukhoa; ?></span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php
				while ($row_pro = mysqli_fetch_array($query_pro)) {
			?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $row_pro['tensanpham'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6 class="text-muted ml-2"><?php echo number_format($row_pro['giasp'],0,',','.').'vnd' ?></h6>
                        </div>
                        
                    </div>
                    <form  method="POST" action="themgiohang.php?idsanpham=<?php echo $row_pro['id_sanpham'] ?> ">
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="detail.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <button name="themgiohang" value="Thêm giỏ hàng" class="themgiohang"><i class="fa fa-shopping-cart mr-1"></i>Thêm giỏ hàng</button>
                    </div>
                    </form>
                 </div>

            </div>
            <?php
            } 
            ?>
        </div>
</div>
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <?php
        include("footer.php");
    ?>
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