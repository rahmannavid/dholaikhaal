<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>public/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">JDM Original</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/shop">Shop</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/auction">Auction</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/place_order/user_order_list">Your Order</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/contact">Contact</a>
                    </li>
                </ul>
                <ul class="nav pull-right navLogin">
                <?php
                if(!isset($this->session->userdata['logged_in']))
                {
                ?>
                    <a href="<?php echo base_url() ?>index.php/account/login">Login</a>
                    |
                    <a href="<?php echo base_url() ?>index.php/account/registration">Registration</  a>
                <?php } else { ?>
                   Welcome <a href="<?php echo base_url() ?>index.php/user_a/user_info_update"> <?php echo $this->session->userdata['logged_in']['user_name']; ?> </a> |
                    <a href="<?php echo base_url() ?>index.php/account/logout">Logout</a>
               <?php } ?>    
                     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Category</p>
                <div class="list-group">
                    <?php foreach ($cat as $c) { ?>
                        <a href="<?php echo base_url() ?>index.php/product/category/<?php echo $c["id"] ?>" class="list-group-item"><?php echo $c['name'] ?></a>
                    <?php } ?>
                </div>
            </div>
<!--Header End-->