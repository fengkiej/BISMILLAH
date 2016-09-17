<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChartController extends Controller
{
    public function chartData(){
    	$username = \Auth::user()->username;
    	$cdatas = \App\ChartData::where('username', $username)->get();
    	$dataPoints = array();
    	foreach($cdatas as $cdata)
    	{
    		$year = $cdata->created_at->year;
    		$month = $cdata->created_at->month;
    		$day = $cdata->created_at->day;
    		$balance = $cdata->balance;

    		$point = array("year"=>$year, "month"=>$month, "day"=>$day, "balance"=>$balance);
    		$dataPoints[] = $point;
    	}

    	return json_encode($dataPoints);
    }
}
