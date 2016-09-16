@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
	<div style="text-align: center; margin-top:50px">
		<img src="img/user.png" alt="User" class="img-circle img-responsive" style="width: 32vh; height: 32vh; background-color:#a6a6a6; margin-left:auto; margin-right:auto; position: relative;">
		<div style="margin-top:20px; font-size:3.7vh">Qrim.in/user</div>

		<div style="border:2px solid #ddd; width:60%; ; margin-right:auto; margin-left:auto;">
			<div style="border-bottom:1px solid #ddd">dompetQ</div>
			<div class="row" style="width:100%; padding:0px; margin-left:auto; margin-right:auto;">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="text-align:left;">Balance : Rp </div><!--
				--><button class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="font-size:1.5vh; ">TOP-UP</button>
			</div>
		</div>

		<table style="width:70%; margin-left:auto; margin-right:auto; border:1px solid #ddd; ">
			<tr>
				<td>TimeStamp</td>
				<td>L</td>
				<td>R</td>
				<td>Balance</td>
				<td>Status</td>
			</tr>
		</table>
	</div>
@endsection