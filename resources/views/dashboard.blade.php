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