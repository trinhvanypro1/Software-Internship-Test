<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\InfoRequest;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InfoController extends Controller
{
    public function add_info_nav(){
        return view('admin.add_inf');
    }
    public function all_info_nav(){
        $all_info = DB::table('info_users')->get();
        $manager_info = view('admin.all_info')->with('all_info',$all_info);
        return view('home')->with('admin.all_info',$manager_info);
    }
    public function save_info(InfoRequest $request){
        $data = array();
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['notes']=$request->notes;
        DB::table('info_users')->insert($data);
        Session::put('message','Thêm thông tin thành công!');
        return Redirect::to('all-information');

    }
    public function delete_info($id){
        DB::table('info_users')->where('id',$id)->delete();
        return Redirect::to('all-info');
    }
}
