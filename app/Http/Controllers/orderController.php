<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\users_profile;
use App\Models\invoices;
use Auth;
use DB;
class orderController extends Controller
{
    function index($gastype){
        $order_qt = DB::table('lpgtype')
        ->where('lpg_type', '=', $gastype)
        ->first();
        $cust_address = DB::table('users_profile')
        ->where('user_id', '=', Auth::id())
        ->first();
        return view('orderconfirmation')
        ->with('gastype', $gastype)
        ->with('order_qt', $order_qt)
        ->with('cust_address', $cust_address);
    }

    function request_order(Request $form){
        $invoice_orders = new invoices;
        $invoice_orders->user_id = Auth::id();
        $invoice_orders->tank_qty = $form->cust_qty_lpg;
        $invoice_orders->bill = $form->cust_bill;
        $invoice_orders->lpg_type = $form->cust_lpg_type;
        $invoice_orders->shipping_fee = 0;
        $invoice_orders->Status = 'Pending';
        $invoice_orders->save();
               //update full_user_name
        DB::table('users')->where('id', Auth::id())
        ->update(['name'=> $form->custname]);
            //update user_profiles
        DB::table('users_profile')->where('user_id',  Auth::id())
        ->update([
            'houseNum'=> $form->address_house_num,
            'barangay' => $form->address_barangay,
            'town_city' => $form->address_town_city,
            'phone_number' => $form->phone
        ]);

        return redirect('/');

    }

    function update_delivery_profiles(Request $form){


    }
}
