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

	<div class="card main" style="text-align: center; border: 2px solid white;">

			<div class="profile-header img-responsive">
				<img src="img/user.png" alt="User" class="img-circle img-responsive" style="width: 20vh; height: 20vh; background-color:#a6a6a6; margin-left:auto; margin-right:auto;">
				<div class="glyphicon glyphicon-share-alt _share" style="position: absolute; right: 13px"></div>
			</div>

			<a style="margin-top:20px; font-size:3.7vh">Qrim.in/user</a> <br>

			<div style="width:80%; ; margin-top: 20px; margin-right:auto; margin-left:auto;">
				<div style="border-bottom:1px solid #ddd">dompetQ</div>
				<div class="row" style="width:100%; padding:0px; margin-left:auto; margin-right:auto;">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="text-align:left;">Balance : Rp </div><!--
				--><button class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="font-size:1.5vh; border-radius: 7px; background-color: white">TOP-UP</button>
			</div>
		</div>


		<table style="width:95%; margin-left:auto; margin-right:auto; margin-top: 16px;">
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

		<script type="text/javascript">
			var JSONstring = '[{"year": 2000,"month": 7,"day": 14,"balance": 45237363}, {"year": 2000,"month": 5,"day": 14,"balance": 11817330}, {"year": 2023,"month": 9,"day": 26,"balance": 60910369}, {"year": 2009,"month": 1,"day": 13,"balance": 94760892}, {"year": 2021,"month": 5,"day": 12,"balance": 98196305}]';
			var JSONobject = JSON.parse(JSONstring);
		//	console.log(JSONobject);

			JSONobject.sort(function(a, b){return a['year']!=b['year'] ? a['year']-b['year'] : a['month']!=b['month'] ? a['month']-b['month'] : a['day']-b['day']});

			var JSONdata = [];

			for(var key in JSONobject){
				var xx = new Date(JSONobject[key]['year'], JSONobject[key]['month']-1, JSONobject[key]['day']);
				var yy = JSONobject[key]['balance'];

				JSONdata[key] = {x: xx, y: yy};
			}

			console.log(JSONdata);
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
		        dataPoints: JSONdata
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