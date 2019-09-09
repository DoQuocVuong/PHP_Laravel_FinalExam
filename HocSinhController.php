<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;

class HocSinhController
{
    public function create()
    {

        return view('hocsinh.create');
    }
    public function store(Request $request)
    {
        ;
        $allRequest  = $request->all();
        $name  = $allRequest['name'];
        $age = $allRequest['age'];
        $address = $allRequest['address'];
        $telephone = $allRequest['telephone'];
        $dataInsertToDatabase = array(
            'name'  => $name,
            'age'  => $age,
            'address'  => $address,
            'telephone'  => $telephone,
        );

        $insertData = DB::table('student')->insert($dataInsertToDatabase);

        if ($insertData) {
            Session::flash('success', 'Thêm mới học sinh thành công!');
        }else {
            Session::flash('error', 'Thêm thất bại!');
        }

        return redirect('hocsinh/create');
    }
    public function index()
    {

        $getData = DB::table('student')->select('id','name','age','address','telephone')->get();

        return view('hocsinh.list')->with('listhocsinh',$getData);
    }
}
