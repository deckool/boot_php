<!DOCTYPE html>
<html lang="en">
<?php 
$path_only = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Hi there</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<?php include("elements/header.html"); ?>

<?php include("elements/nav.html"); ?>

<?php include("elements/search.html"); ?>

<?php include("elements/carousel.html"); ?>

<?php include("elements/content.html"); ?>

<?php include("elements/list-grup.html"); ?>

<?php include("elements/comments.html"); ?>

<?php include("elements/footer.html"); ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>

</body>
</html>