<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{asset('')}}">

    <title>Quản lý Tin Tức</title>

    <!-- Bootstrap Core CSS -->
    <link href="../resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../resources/css/shop-homepage.css" rel="stylesheet">
    <link href="../resources/css/my.css" rel="stylesheet">
    @yield("css")

</head>

<body>

    <!-- Navigation -->
    @include("FontEnd.Layout.header")
    

    <!-- Page Content -->
   @yield("content")
    <!-- end Page Content -->

    <!-- Footer -->
    @include("FontEnd.Layout.footer")
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="../resources/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../resources/js/bootstrap.min.js"></script>
    <script src="../resources/js/my.js"></script>
    @yield("script")
</body>

</html>

