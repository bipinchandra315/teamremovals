
<?php $fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
"https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  ?>
<?php $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
"https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/teamremovals/"; ?>
<base href="<?php echo $link; ?>">

<!-- Required meta tags -->
<meta charset="utf-8">
<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="canonical" href="<?php echo $fullurl; ?>" />
<link rel="alternate" href="<?php echo $fullurl; ?>" hreflang="en-IN" />
<link rel="alternate" href="<?php echo $fullurl; ?>" hreflang="x-default" />

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="geo.region" content="IN-UT" />
<meta name="geo.placename" content="" />
<meta name="geo.position" content="" />
<meta name="ICBM" content="" />

<link rel="stylesheet" href="<?php echo $link; ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $link; ?>assets/css/fontfamily.css">
<link rel="stylesheet" href="<?php echo $link; ?>assets/css/bootstrap-icons.css">
<link rel="stylesheet" href="<?php echo $link; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo $link; ?>assets/css/mobileheader.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
<script src="https://kit.fontawesome.com/723b1db29f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo $link; ?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $link; ?>assets/css/owl.theme.default.min.css"> 

