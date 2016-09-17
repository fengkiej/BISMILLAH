<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TransactionController extends Controller
{
	public static function test()
	{
		return 'Hello';
	}

	public function transfer(Request $req, $user)
	{
		$data = $req->all();
		$nominal = $data['nominal'];
		if($data['transferMode' == 1){
			$senderid = \Auth::user()->username;
			$receiverid = $user;

			if(addTransferRecord($senderid, $nominal, $receiverid, "DONE")){
				commitTransfer($nominal, $receiverid);
			};
			return 'thankyou!';
		} 
		else if($data['transferMode' == 2) 
		{
			$senderid = \Auth::user()->username;
			$receiverid = $user;

			addTransferRecord($senderid, $nominal, $receiverid, "PENDING");
			return 'thankyou!';
		}
		else if($data['transferMode' == 3)
		{
			$receiverid = $user;

			addTransferRecord("BANKTRANSFER", $nominal, $receiverid, "ONCONFIRMATION");
		}
		else if($data['transferMode' == 4)
		{
			return 'coming soon!';
		}
	}

	public static function addTransferRecord($senderid, $nominal, $receiverid, $status)
	{
		$record = new \App\Ledger;
		if($senderid != "BANKTRANSFER"){
			$sender = \App\BalanceDetail::where('user', $senderid)->first();

			if($sender->balance - $nominal >= 0) 
			{
				$record->from = $senderid;
				$record->to = $receiverid;
				$record->nominal = $nominal;
				$record->status = $status;
				$record->save();

				$sender->balance -= $nominal;
				$sender->save();

				updateChartData($senderid);
				return true;
			} 
		} else {
			$record->from = $senderid;
			$record->to = $receiverid;
			$record->nominal = $nominal;
			$record->status = $status;
			$record->save();

			return true;
		}
	}

	public static function commitTransfer($nominal, $receiverid)
	{
		$receiver = \App\BalanceDetail::where('user', $receiverid)->first();

		$receiver->balance += $nominal; 
		$receiver->save();

		updateChartData($receiverid);
		return true;
	}

	public function confirmBankTransaction($transactionId){
		$record = \App\Ledger::where('id', $transactionId)->first();
    	$confirmed = true; //check for confirmation by web scraping or bank api
    	if($confirmed){
    		if(commitTransfer($nominal, $receiverid)){
    			$record->status = "DONE";
    			$record->save();
    		}
    	}
    }

    public function confirmRekber($transactionId){
    	$record = \App\Ledger::where('id', $transactionId)->first();
    	$nominal = $record->nominal;
    	$receiverid = $record->to;
    	if(commitTransfer($nominal, $receiverid))
    	{
    		$record->status = "DONE";
    		$record->save();
    	}
    	return "thankyou!"
    }

    private function updateChartData($username){
    	$newPoint = new \App\ChartData;
    	$bd = \App\BalanceDetail::where('username', $username)->first();
    	$newPoint->username = $username;
    	$newPoint->balance = $bd->balance;
    	$newPoint->save();
    }
}
