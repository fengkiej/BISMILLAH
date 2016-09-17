@extends('layouts.master')

@section('head')
	<style>
		tr td{
			padding: 8px;
			border:1px solid white;
		}
		td{
			white-space: nowrap;
		}
		table{
			overflow-x: scroll;
			overflow-y: scroll;
			border:1px solid white;
			border-collapse: collapse;
		}
	</style>

@endsection

@section('title', 'Dashboard')

@section('content')
	<div class="card" style="text-align: center; margin : 50px 16px 50px 16px; border: 2px solid white;">

			<div class="profile-header img-responsive">
				<img src="img/user.png" alt="User" class="img-circle img-responsive" style="width: 20vh; height: 20vh; background-color:#a6a6a6; margin-left:auto; margin-right:auto;">
				<div class="glyphicon glyphicon-share-alt" style="position: absolute; top:145px; right: 10px"></div>
			</div>

			<a style="margin-top:20px; font-size:3.7vh">Qrim.in/user</a> <br>

			<div style="width:80%; ; margin-top: 20px; margin-right:auto; margin-left:auto;">
				<div style="border-bottom:1px solid #ddd">dompetQ</div>
				<div class="row" style="width:100%; padding:0px; margin-left:auto; margin-right:auto;">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="text-align:left;">Balance : Rp </div><!--
				--><button class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="font-size:1.5vh; border-radius: 7px; background-color: white">TOP-UP</button>
			</div>
		</div>

		<div style="overflow-x:visible; width:10px; ">
		<table style="margin-left:auto; margin-top: 16px">
			<tr>
				<td>Time Stamp</td>
				<td>From</td>
				<td>To</td>
				<td>Balance</td>
				<td>Status</td>
			</tr>
			<tr>
				<td>2015/10/05 08:33:24</td>
				<td>User1</td>
				<td>User2</td>
				<td>Rp 150000</td>
				<td>Done</td>
			</tr>
			<tr>
				<td>2015/10/20 13:47:09</td>
				<td>User2</td>
				<td>User1</td>
				<td>Rp 40000</td>
				<td>Done</td>
			</tr>
			<tr>
				<td>2015/11/04 06:28:02</td>
				<td>User1</td>
				<td>User2</td>
				<td>Rp 1000000</td>
				<td>Done</td>
			</tr>
			<tr>
				<td>2015/11/21 15:56:58</td>
				<td>User2</td>
				<td>User1</td>
				<td>Rp 500000</td>
				<td>Done</td>
			</tr>
			<tr>
				<td>2015/11/30 21:36:54</td>
				<td>User2</td>
				<td>User1</td>
				<td>Rp 200000</td>
				<td>Done</td>
			</tr>
		</table>
		</div>

		<script type="text/javascript">
			window.onload = function () {
		    var chart = new CanvasJS.Chart("chartContainer",
		    {
		      title:{
		        text: "Balance History"
		      },
		      animationEnabled: true,
		      axisX: {
		        valueFormatString: "MMM",
		        interval:1,
		        intervalType: "month"
		        
		      },
		      axisY:{
		        includeZero: false
		        
		      },
		      data: [
		      {        
		        type: "line",
		        //lineThickness: 3,        
		        dataPoints: [
		        { x: new Date(2015, 00, 1), y: 450 },
		        { x: new Date(2015, 01, 1), y: 414 },
		        { x: new Date(2015, 02, 1), y: 520 },
		        { x: new Date(2015, 03, 1), y: 460 },
		        { x: new Date(2015, 04, 1), y: 450 },
		        { x: new Date(2015, 05, 1), y: 500 },
		        { x: new Date(2015, 06, 1), y: 480 },
		        { x: new Date(2015, 07, 1), y: 480 },
		        { x: new Date(2015, 08, 1), y: 410 },
		        { x: new Date(2015, 09, 1), y: 500 },
		        { x: new Date(2015, 10, 1), y: 480 },
		        { x: new Date(2015, 11, 1), y: 510 }
		        
		        ]
		      }
		      
		      
		      ]
		    });

			chart.render();
		}
		</script>
		<div id="chartContainer" style="height: 300px; width: 95%; margin-top:16px; margin-left:auto; margin-right:auto; margin-bottom: 20px;"></div>

	</div>

	<script src="js/canvasjs.min.js"></script>
	<script src="js/jquery.canvasjs.min.js"></script>

@endsection