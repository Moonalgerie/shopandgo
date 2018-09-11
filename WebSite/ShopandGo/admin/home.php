<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shop and Go</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="../style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="../assets/ico/secondlogo.png">
  </head>
<body>
<!--
	Upper Header SectionN
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="index.php"> <span class="icon-home"></span> Accueil</a>
				<a href="#"><span class="icon-user"></span> Mon compte</a>
				<a href="../register.php"><span class="icon-edit"></span> Inscription </a>
				<a href="../contact.php"><span class="icon-envelope"></span> Contactez Nous</a>
				<a href="../cart.php"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.php"><span>Shop and Go</span>
		<img src="../assets/img/logo.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
       	AIDKOUM MOUBARAK
	</h1>
	</div>
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Appelez nous sur le :  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">$</span>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="index.php">Accueil	</a></li>
			  <li class=""><a href="../list-view.php">Liste des Produits</a></li>
			  <li class=""><a href="../grid-view.php">Grid View</a></li>
			  <li class=""><a href="../three-col.php">Three Column</a></li>
			  <li class=""><a href="../four-col.php">Four Column</a></li>
			  <li class=""><a href="../general.php">General Content</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Rechercher" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Se connecter <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Mot de Passe">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Se souvenir de moi
					</label>
					<button type="submit" class="shopBtn btn-block">Se connecter</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Produits Laitiers</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Conserves</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Produits Frais</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Pates</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Sucrerie</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Légumes Secs</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Boissons</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Epicerie</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Droguerie</a></li>
		<li><a href="../products.php"><span class="icon-chevron-right"></span>Accessoires</a></li>
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="cart.php"><strong>Prix Total  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>Promotion 50%</h2>
				  <p>
					 Sur ces produits<br><br><a class="defaultBtn" href="#">Cliquez ici</a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="../assets/img/livraison.jpg" alt="payment method paypal"></a></div>

			<a class="shopBtn btn-block" href="#">Top produits <br><small>Cliquez ici</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<img src="../assets/img/aa.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="../product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<img src="../assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="../product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<img src="../assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="../product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="../assets/img/a.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Shop and Go</h4>
                      <p><span>Shop and Go</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="../assets/img/m.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Shop and Go</h4>
                      <p><span>Shop and Go</span></p>
                </div>
              </div>
			  <div class="item active">
                <img style="width:100%" src="../assets/img/b.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Shop and Go</h4>
                      <p><span>Shop and Go</span></p>
                </div>
              </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->
	<div class="well well-small">
	<h3>Nouveaux Produits </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
					<a href="#" class="tag"></a>
					<a href="../product_details.php"><img src="../assets/img/bootstrap-ring.png" alt="bootstrap-ring"></a>
				</div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
					<a href="#" class="tag"></a>
					<a  href="../product_details.php"><img src="assets/img/d.jpg" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
					<a href="#" class="tag"></a>
					<a  href="../product_details.php"><img src="../assets/img/aa.png" alt=""></a>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
					<a  href="../product_details.php"><img src="../assets/img/bb.jpg" alt=""></a>
				  </div>
				</li>
			  </ul>
			  </div>
		   <div class="item">
		  <ul class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a  href="../product_details.php"><img src="../assets/img/i.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a  href="../product_details.php"><img src="../assets/img/f.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a  href="../product_details.php"><img src="../assets/img/h.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a  href="../product_details.php"><img src="../assets/img/j.jpg" alt=""></a>
			  </div>
			</li>
		  </ul>
		  </div>
		   </div>
		  <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">

				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a href="../product_details.php"><img src="../assets/img/b.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Ajouter au panier</a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Ajouter à la liste des souhaits </a>
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a href="../product_details.php"><img src="../assets/img/c.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Ajouter au panier</a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Ajouter à la liste des souhaits </a>
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a href="../product_details.php"><img src="../assets/img/a.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Manicure & Pedicure</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> ajouter au panier </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Ajouter à la liste des souhaits </a>
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	</div>
	<!--
	Featured Products
	-->
		<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="products.php" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a  href="product_details.php"><img src="../assets/img/d.jpg" alt=""></a>
				<div class="caption">
				  <h5>Manicure & Pedicure</h5>
				  <h4>
					  <a class="defaultBtn" href="../product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a  href="../product_details.php"><img src="../assets/img/e.jpg" alt=""></a>
				<div class="caption">
				  <h5>Manicure & Pedicure</h5>
				  <h4>
					  <a class="defaultBtn" href="../product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="../product_details.php" title="add to cart"><span class="icon-search"></span> Voir plus</a>
				<a  href="../product_details.php"><img src="../assets/img/f.jpg" alt=""/></a>
				<div class="caption">
				  <h5>Manicure & Pedicure</h5>
				  <h4>
					  <a class="defaultBtn" href="../product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
					  <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
					  <span class="pull-right">$22.00</span>
				  </h4>
				</div>
			  </div>
			</li>
		  </ul>
	</div>
	</div>

	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
	Produits Populaires
	</div>
	<hr>
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
	Best selling Products
	</div>
	</div>
	</div>
<!--
Clients
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/6.png"></a>
		</div>
	</div>
</section>

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">DISCOUNT</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="contact.php">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="#">NEW PRODUCTS</a> <br>
<a href="#">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
 Malorum" by Cicero are also reproduced in their exact original form,
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="../assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Shop and Go<br> ALGERIE</span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.easing-1.3.min.js"></script>
    <script src="../assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="../assets/js/shop.js"></script>
  </body>
</html>
