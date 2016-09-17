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
				commitTransfer($senderid, $nominal, $receiverid);
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
			//CEK LEWAT WEB SCRAPING ATO AKSES API BANK YBS
			$receiverid = $user;

			if(addTransferRecord("BANKTRANSFER", $nominal, $receiverid, "DONE")){
				commitTransfer("BANKTRANSFER", $nominal, $receiverid);
			};
		}
		else if($data['transferMode' == 4)
		{
			return 'coming soon!';
		}
	}

    public static function addTransferRecord($senderid, $nominal, $receiverid, $status)
    {
    	$record = new \App\Ledger;
    	if($sender->balance - $nominal >= 0) 
    	{
			$record->from = $senderid;
			$record->to = $receiverid;
			$record->nominal = $nominal;
			$record->status = $status;
			return true;
		} 
		return false;
    }

    public static function commitTransfer($senderid, $nominal, $receiverid)
    {
	    	if($senderid != "BANKTRANSFER"){
	    		$sender = \App\BalanceDetail::where('user', $senderid)->first();
	    	}
    		$receiver = \App\BalanceDetail::where('user', $receiverid)->first();

			$sender->balance -= $nominal;
			$receiver->balance += $nominal; 
			$record->save(); $sender->save(); $receiver->save();
			return true;
    }
}
