<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EdulevelController extends Controller
{
    public function data()
    {
        $edulevels = DB::table('adulevels')->get();
        //return $edulevels;
        return view('edulevel.data', ['adulevels' =>$edulevels]);
    }
    public function add()
    {
        return view('edulevel.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('adulevels')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status','Jenjang Berhasil Di tambah');
    }
    public function edit($id)
    {
        $edulevel = DB::table('adulevels')->where('id',$id)->first();
        return view('edulevel/edit', compact('edulevel'));
    }
    public function editProcess(Request $request,$id)
    {
        DB::table('adulevels')->where('id',$id)
            ->update([
                'name' => $request->name,
                'desc' => $request->desc 
            ]);
        return redirect('edulevels')->with('status','Jenjang Berhasil Di Edit');
    }
    public function delete($id)
    {
        DB::table('adulevels')->where('id',$id)->delete();
        return redirect('edulevels')->with('status','Jenjang Berhasil Di Hapus');
    }
}
