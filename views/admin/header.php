<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<link href="/css/font-awesome.css" rel="stylesheet">
<script src="/js/jquery.min.js"> </script>
<script src="/js/bootstrap.min.js"> </script>

<!-- Mainly scripts -->
<script src="/js/jquery.metisMenu.js"></script>
<script src="/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="/css/custom.css" rel="stylesheet">
<script src="/js/custom.js"></script>

<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>

<script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
<!-- <script src="/ckeditor/config.js"></script> -->

<script src="/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});



		});
		</script>

<!----->

</head>
<body>
<div id="wrapper">
     <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="/admin/">EPU</a></h1>
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>
			</section>
      <div class="clearfix"> </div>
     	</div>

			<div class="clearfix">

     </div>

		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                  <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Контент</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/posts" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Все записи</a></li>
                            <li><a href="/admin/categories" class=" hvr-bounce-to-right"><i  class="fa fa-inbox nav_icon"></i>Все Категории</a></li>
                        </ul>
 </li>  <li>
												<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Добавить</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
												<li><a href="/admin/create_post" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Запись</a></li>
												<li><a href="/admin/create_category" class=" hvr-bounce-to-right"><i  class="fa fa-inbox nav_icon"></i>Категорию</a></li>
											</a>
                 </li>


                </ul>
            </div>
			</div>
		</nav>
