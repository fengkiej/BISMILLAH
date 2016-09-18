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

	private function updateChartData($username){
    	$newPoint = new \App\ChartData;
    	$bd = \App\BalanceDetail::where('user', $username)->first();
    	$newPoint->username = $username;
    	$newPoint->balance = $bd->balance;
    	$newPoint->save();
    }

	public function transfer(Request $req, $user)
	{
		$data = $req->all();
		$nominal = $data['nominal'];
		if($data['transferMode']==1){
			$senderid = \Auth::user()->username;
			$receiverid = $user;

			if($this->addTransferRecord($senderid, $nominal, $receiverid, "DONE")){
				$this->commitTransfer($nominal, $receiverid);
				return 'thankyou!';
			} else {
				return 'balance is not enough!';
			}
		} 
		else if($data['transferMode']==2) 
		{
			$senderid = \Auth::user()->username;
			$receiverid = $user;

			addTransferRecord($senderid, $nominal, $receiverid, "PENDING");
			return 'thankyou!';
		}
		else if($data['transferMode']==3)
		{
			$receiverid = $user;
			$randomnumber = rand(1, 999);

			$record = $this->addTransferRecord("BANKTRANSFER", ($nominal+$randomnumber), $receiverid, "ONCONFIRMATION");

			return view('banktransferdetail', ['record'=>$record]);
		}
		else if($data['transferMode']==4)
		{
			return 'coming soon!';
		}
	}

	public function addTransferRecord($senderid, $nominal, $receiverid, $status)
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

				$this::updateChartData($senderid);
				return true;
			} 
		} else {
			$record->from = $senderid;
			$record->to = $receiverid;
			$record->nominal = $nominal;
			$record->status = $status;
			$record->save();

			return $record;
		}
	}

	public static function commitTransfer($nominal, $receiverid)
	{
		$receiver = \App\BalanceDetail::where('user', $receiverid)->first();

		$receiver->balance += $nominal; 
		$receiver->save();

		$this->updateChartData($receiverid);
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
    	return "thankyou!";
    }
}	