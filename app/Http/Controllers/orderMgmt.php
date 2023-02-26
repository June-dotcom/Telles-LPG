<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class orderMgmt extends Controller
{
    function setPending($invoice_id){
    	DB::table('invoices')->where('invoice_id','=', $invoice_id)
    	->update(['Status'=> 'Pending']);
    	return back();
    }
     function setDone($invoice_id){
    	DB::table('invoices')->where('invoice_id','=', $invoice_id)
    	->update(['Status'=> 'Done']);
    	return back();
    }
     function setDeleted($invoice_id){
    	DB::table('invoices')->where('invoice_id','=', $invoice_id)
    	->update(['Status'=> 'Deleted']);
    	return back();
    }
}
