<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">

</head>

<body>
<header id="header"><!--header-->

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <h2>Logo</h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/cart/index"><i class="fa fa-shopping-cart"></i> Корзина
                                    (<span id="cart-count"><?php echo Cart::countItems();?></span>)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left col-md-offset-2">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/">Главная</a></li>
                            <li class="dropdown"><a href="/category">Категории<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="/category/view/1">Роман</a></li>
                                    <li><a href="/category/view/2">Детектив</a></li>
                                    <li><a href="/category/view/3">Зарубежная литература</a></li>
                                    <li><a href="/category/view/4">Русская литература</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->

</header><!--/header-->