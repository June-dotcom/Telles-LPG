<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class myAccount extends Controller
{
    function index(){
    	$myAccount_info = DB::table('users')
    	->join('users_profile', 'users.id', '=', 'users_profile.user_id')->where('users.id', '=', Auth::id())->first();

    	$myOrders = DB::table('invoices')->where('user_id', '=',  Auth::id())->orderByDesc('created_at')->paginate(5);

    	return view('my_account_details')
    	->with('myAccount_info', $myAccount_info)
    	->with('myOrders', $myOrders);

    }

    function admin_editAccForms(Request $data){

        
        $cust_uid = $data->user_id;
    
        $cust_address = DB::table('users')
        ->join('users_profile', 'users.id', '=', 'users_profile.user_id')->where('users.id', '=', $cust_uid)->first();
        return view('admin_edit_customers')
        ->with('cust_address', $cust_address)
        ->with('cust_uid', $cust_uid);



        // return view('admin_edit_customers')->with('cust_uid', $cust_uid);    
    }

     function admin_editAccConf(Request $form){
        $uid = $form->uid;
               //update full_user_name
        DB::table('users')->where('id', '=',$uid)
        ->update(['name'=> $form->custname]);
            //update user_profiles
        DB::table('users_profile')->where('user_id', $uid)
        ->update([
            'houseNum'=> $form->address_house_num,
            'barangay' => $form->address_barangay,
            'town_city' => $form->address_town_city,
            'phone_number' => $form->phone
        ]);

        return view('home');

    }
}
