<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cheques;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function no_access(){
        return view('no_access');
    }

    public function cheque(){
        //return view('create_cheques');
        return view('create_cheque');
    }

    public function cheques_list(){
        $cheques_list = Cheques::paginate(15);
        return view('cheques_list', ['data' => $cheques_list]);
    }


    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|max:50',
            'amountIC' => 'required|max:18',
            'amountIW' => 'required|max:255',
            'date' => 'required',
        ]);
    }

    protected function create_cheque(array $data){
        return Cheques::create([
            'name' => $data['name'],
            'amount' => $data['amountIC'],
            'amount_inwords' => $data['amountIW'],
            'date' => $data['date']
        ]);
    }
    public function cheque_store(Request $request){
        $this->validator($request->all())->validate();
        $cheque = $this->create_cheque($request->all());
        if($cheque){
            return redirect('create_cheque')->with('success', '1');
        }
        else{
            return redirect('create_cheque')->with('success', '-1');
        }
    }

    public function cheque_print(Request $request){
        $status = DB::table('Cheques')->where('id', $request->cheque_id)->first();
        if($status->approved == 1){
            return view('cheque_print', ['results' => $status]);
        }
        else{
            return redirect('no_access');
        }
    }
}
