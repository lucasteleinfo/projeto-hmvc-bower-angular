<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html ng-app='projeto'>
<head>
<meta charset="UTF-8">
<title><?php echo $titulo;?></title>
<link rel="shortcut icon" href="<?php echo base_url()?>public/images/logo2.ico">

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootswatch/paper/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url();?>bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>custom_components/css/style.css" />
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url();?>">CI HMVC</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>
	</nav>