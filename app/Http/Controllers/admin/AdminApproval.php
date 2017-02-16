<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cheques;
use DB;

class AdminApproval extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
   	public function __construct(){
   		$this->middleware('admin');
   	}


   	public function cheques_approval(){
      $cheques = Cheques::paginate(15);
   		return view('cheques_approval', ['data' => $cheques]);
   	}

    public function request_approve(Request $request){
        $status = DB::table('cheques')->where('id', $request->cheque_id)->value('approved');
        if ($status != 0) {
          return 0;
        }
        else{
          DB::table('cheques')->where('id', $request->cheque_id)->update(['approved' => 1]);
          return 1;
        }
    }
}
