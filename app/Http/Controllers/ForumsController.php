<?php

namespace App\Http\Controllers;

use App\Groups;
use App\Requests;
use App\User;
use Illuminate\Pagination\Paginator;

class ForumsController extends Controller
{
    public function index(){

    	$request = Requests::OrderBy('required_till' , 'asc')->paginate(3);
		$user = User::all();
    	$group = Groups::all();
    	
    	return view('forum.forum')->with('requests' , $request)
								  ->with('groups' , $group)
								  ->with('users' , $user);
	}


	public function who(){
    	return view('forum.who');

	}


	public function show($id){
		$request = Requests::where('groups_id' , $id)->OrderBy('required_till' , 'asc')->paginate(3);
		$user = User::all();
		$group = Groups::all();

		return view('forum.show')->with('requests' , $request)
			->with('groups' , $group)
			->with('users' , $user);
	}

}
