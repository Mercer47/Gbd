<!DOCTYPE html>
<html>
<head>
	<title>GBD Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
</head>
<body>
<div class="col-md-12 header" align="center">
	<p style="font-size: 30px;">GBD<sub>Admin</sub></p>
</div>
<div class="col-md-3">
	<a href="<?php echo site_url('home/orders'); ?>">Orders</a><br>
	<a href="<?php echo site_url('home/inventory') ?>">Inventory</a><br>
	<a href="<?php echo site_url('login/logout'); ?>">Logout</a>
</div>
