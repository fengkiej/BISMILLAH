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
	<div class="card" style="text-align: center; margin : 40px 16px 50px 16px; border: 2px solid white;">

			<div class="profile-header img-responsive" style="margin-top: 20px">
				<img src="images/team-6.png" alt="User" class="img-circle img-responsive" style="width: 20vh; height: 20vh; background-color:#fff; margin-left:auto; margin-right:auto;">
				<div class="glyphicon glyphicon-share-alt" style="position: absolute; top:145px; right: 10px"></div>
			</div>

			<h3>{{\Auth::user()->name}}</h3>
			<a style="margin-top:20px; font-size:2.7vh">qrim.in/{{\Auth::user()->username}}</a> <br>

			<div style="width:80%; ; margin-top: 20px; margin-right:auto; margin-left:auto;">
				<div style="border-bottom:1px solid #ddd">dompetQ</div>
				<div class="row" style="width:100%; padding:0px; margin-left:auto; margin-right:auto;">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="text-align:left;">Balance : Rp{{\App\BalanceDetail::where('user', $username)->first()->balance}}</div><!--
				--><button class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="font-size:1.5vh; border-radius: 7px; background-color: white">TOP-UP</button>
			</div>
		</div>


		<table style="width:95%; height: 180px; overflow-y:scroll; overflow-x: scroll; white-space: nowrap;margin-left:auto; margin-right:auto; margin-top: 16px;">
			<tr>
				<td><b>Time Stamp</b></td>
				<td><b>From</b></td>
				<td><b>To</b></td>
				<td><b>Nominal</b></td>
				<td><b>Status</b></td>
			</tr>

			@foreach($ledger as $record)
			<tr>
				<td>{{$record->updated_at}}</td>
				<td>@if($record->from == $username)
						<b>{{$username}}</b>
					@else
						{{$record->from}}
					@endif</td>

					<td>@if($record->to == $username)
						<b>{{$username}}</b>
					@else
						{{$record->to}}
					@endif</td>
				<td>Rp.{{$record->nominal}}</td>
				<td>@if($record->status=="DONE")
						<span style="color: green;">DONE</span>
					@elseif($record->status=="ONCONFIRMATION")
						<form action="/confirmbank/{{$record->id}}" method="POST"><button class="btn btn-success" type="submit">Confirm</button></form>
					@elseif($username == $record->from && $record->status == "PENDING")
						<form action="/confirmrekber/{{$record->id}}" method="POST"><button class="btn btn-success" type="submit">Confirm</button></form>
					@elseif($record->status == "PENDING")
						<span style="color: yellow;">PENDING</span>
					@endif</td>
			</tr>
			@endforeach
		</table>

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
		        { x: new Date(2015, 11, 1), y: 500 }
		        
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