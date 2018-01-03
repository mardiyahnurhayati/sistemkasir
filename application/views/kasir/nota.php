<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard<?php echo ucfirst($this->session->userdata('kasir_type'));?></title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/jquery.tagsinput.css">
	<script src="<?= base_url();?>assets/js/jquery.js"></script>
    <script src="<?= base_url();?>assets/js/summernote.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.tagsinput.js"></script>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">
		table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
	</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Kasir </span>Rental Motor</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
<div class="container-fluid nota" >
	
	<div class="col-sm-2"></div>
	<div class="col-sm-8" style="background-color: white;size: 800px" >
	  <div class="row"  >
	  	<div class="col-sm-2"></div>
	   	<div class="col-sm-1">
	   		<br>
				<img class="pull-left" width="90px" src="<?php echo base_url(). 'assets/images/jawi.png'; ?>"/>
	   	</div>
	   	<div class="col-sm-6">
	   		<center>
	   			<h2>RENTAL MOTOR AL-JAWI</h2>
				<p>Jl Timoho Condong Catur Sleman Yogyakarta</p>
				<p>Telp : (0274)-7162181</p>
				
			</center>
	   			
	   	</div>

	   	<div class="col-sm-3"></div>
	  </div>

	  <div class="row" style=" background-color: white;">
	  	
	  	<br>
	  	<div class="col-sm-12 table-responsive">
	  		<div class="col-sm-10"></div>
	  		<div class="col-sm-2">
	  			<table></table>
	  			<tr>
	  				<td>Kasir : </td>
	  				<td>Mardiyah</td>
	  			</tr>

	  		</div>
	  		<br>
	  		<br>
	  		<table style="width:100%" class="table-bordered">
	  		<tr>
	  			<th>ID Transaksi</th>
	  			<td colspan="5"></td>
	  		</tr>
		  	<tr>
		  		<th>Nama Pelanggan </th>
		  		<td colspan="5"></td>
		  	</tr>

		  	<tr>
		  		<th>Alamat </th>
		  		<td colspan="5"></td>
		  	</tr>

		  	<tr>
		  		<th>Universitas</th>
		  		<td colspan="5"></td>
		  	</tr>
		  	<tr>
		  		<th>Fakultas</th>
		  		<td colspan="5"></td>
		  	</tr>
		  	<tr>
		  		<th>Jenis Kendaraan</th>
		  		<td colspan="3"></td>
		  		<th>Harga sewa</th>
		  		<td>40.000</td>
		  	</tr>
		  	<tr>
		  		<th>Tanggal Sewa</th>
		  		<td><?php echo $tgl_transaksi;?></td>
		  		<th>Jam</th>
		  		<td>19.00</td>
		  		<th>Total Bayar</th>
		  		<td></td>
		  		
		  	</tr>
		  	<tr>
		  		<th>Tanggal Kembali</th>
		  		<td>27 Januari 2018</td>
		  		<th>Jam</th>
		  		<td>19.00</td>
		  		<th>Uang Bayar</th>
		  		<td></td>
		  	</tr>
		  	<tr>
		  		<th>Lama Pemakaian</th>
		  		<td colspan="3">9 jam</td>
		  		<th>Uang Kembali</th>
		  		<td></td>
		  	</tr>
	  	</table>
	  	<br>
	  	</div>
	  	
	  	
	  	
	  </div>
	</div>
	<div class="col-sm-2"></div>
</div>




