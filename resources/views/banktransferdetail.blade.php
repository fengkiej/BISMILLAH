@extends('layouts.master')

@section('head')
<link href="/css/styleTransfer.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="/js/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Cousine:700" rel="stylesheet"> 
@endsection

@section('title', 'Bank Transfer Detail')

@section('content')
<div class="main" style="background-color: #f9f9f9">
	<h1 style="font-weight: 300;font-family:'Open Sans'; color: #000; font-size:1.7em; margin: 0.3em 0 0 0;">Detail Transfer</h1>
	<div class="content">

		<!-- Nominal -->
		<div class="resp-tabs-container" style="margin-bottom:15px;">
			<h3 style="font-size: 26px;text-align: center;margin-bottom: 15px;color: #3AD5A0;font-weight: 500;font-family: 'Open Sans', sans-serif; ">
				Bank Transfer
			</h3>
			<p>Terima kasih telah memilih Qrim! Silahkan transfer sejumlah {{$record->nominal}} (tepat hingga 3 angka di belakang koma) ke rekening berikut untuk melanjutkan transaksi: <br/></p>
			<h4>Bank: xxx<br/>
			No. Rekening: xxxxxxxx <br />
			Atas nama: xxxxxxxx <br /></h4>
			<p>Jika anda telah melakukan transaksi, silahkan tekan tombol berikut untuk kembali ke dashboard untuk melakukan konfirmasi</p>
			<a href="/dashboard" class="btn btn-success">Kembali ke dashboard</a>
		</div>
	</div>
</div>
@endsection