<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class adminPanelController extends Controller
{
	function index(){
		$get_customers_count = DB::table('users')->count() - 1;
		$get_pending_orders = DB::table('invoices')->where('Status', '=', 'Pending')->count();
		$get_delivered_orders = DB::table('invoices')->where('Status', '=', 'Delivered')->count();
		$get_total_orders = DB::table('invoices')->where('Status', '!=', 'Deleted')->count();

		return view('telles_admin')
		->with('get_customers_count', $get_customers_count)
		->with('get_pending_orders', $get_pending_orders)
		->with('get_delivered_orders', $get_delivered_orders)
		->with('get_total_orders', $get_total_orders)
		;
	}
	function orders(){
		$get_orders_list = DB::table('invoices')
		->join('users_profile', 'invoices.user_id', '=', 'users_profile.user_id')
		->join('users', 'invoices.user_id', '=', 'users.id')
		->where('invoices.status', '!=', 'Deleted')
		->paginate(6);
		return view('telles_admin_orders')->with('get_orders_list', $get_orders_list);
	}
	function products(){
		return view('telles_admin_products');
	}
	function customers(){
		$get_custs_list = DB::table('users')
		->join('users_profile', 'users.id', '=', 'users_profile.user_id')->paginate(6);
		return view('telles_admin_customers')->with('get_custs_list', $get_custs_list);;
	}
	


	// order management



}
