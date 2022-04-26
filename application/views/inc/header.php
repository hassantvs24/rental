<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bluebird Self Storage</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>css/multiselect-styles.css" rel="stylesheet" type="text/css">





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<script src="https://kit.fontawesome.com/fc7094061a.js" crossorigin="anonymous"></script>

    <link href="<?= base_url() ?>css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css">

<?php if(!isset($_GET['script'])) {?>

	



    <!-- Custom CSS -->
    <link href="<?= base_url() ?>css/modern-business.css" rel="stylesheet" type="text/css">


<script type="text/javascript">
			( function( w, d, s, l, i ) {
				w[l] = w[l] || [];
				w[l].push( {'gtm.start': new Date().getTime(), event: 'gtm.js'} );
				var f = d.getElementsByTagName( s )[0],
					j = d.createElement( s ), dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore( j, f );
			} )( window, document, 'script', 'dataLayer', 'GTM-NRZFG7H' );
			
</script>
    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" type="text/css">
<?php
}
?>




</head>

<body class="<?php if(isset($_GET['location'])) {echo $_GET['location'];} ?>">

<?php if(!isset($_GET['script'])) {?>
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRZFG7H" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>

	<script type="text/javascript" src='https://www.googletagmanager.com/gtag/js?id=G-MFD92RD6P6' id='google_gtagjs-js' async></script>
	<script type="text/javascript" id='google_gtagjs-js-after'>
	window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
	gtag("js", new Date());
	gtag("set", "developer_id.dZTNiMT", true);
	gtag("config", "G-MFD92RD6P6");
	</script>
<?php
}
?>


<div class="wrapper">
    <!-- Page Content -->
    <div class="container rentContent">