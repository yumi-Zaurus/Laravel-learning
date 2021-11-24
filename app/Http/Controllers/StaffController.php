<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;



class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();

        return view('staff')->with('staffs', $staffs);
    }

    /**
     * スタッフデータ追加
     */
    public function add()
    {
        return view('staff-add');
    }

    /**
     * スタッフデータ検索
     */
    public function search()
    {
        return view('staff-search');
    }

    /**
     * スタッフ登録データ確認
     */
    public function confirm(Request $request)
    {
        $staff_name = $request->input('staff_name');
        $staff_name_kana = $request->input('staff_name_kana');
        $staff_type = $request->input('staff_type');
        return view('staff-confirm')->with([
            'staff_name' => $staff_name,
            'staff_name_kana' => $staff_name_kana,
            'staff_type' => $staff_type,
        ]);
    }

    /**
     * スタッフデータ登録
     */
    public function register(Request $request)
    {
        $staff_name = $request->input('staff_name');
        $staff_name_kana = $request->input('staff_name_kana');
        $staff_type = $request->input('staff_type');
        
        $staff = new Staff();
        $staff->name = $staff_name;
        $staff->name_kana = $staff_name_kana;
        $staff->staff_type = 1;
        $staff->save();

        return redirect(route('staffHome'));
    }
    
    /**
     * スタッフデータ削除
     */
    public function delete()
    {
        return view('staff-delete');
    }

    /**
     * スタッフデータ編集
     */
    public function edit($id)
    {
        $data = Staff::find($id);

        return view('staff-edit')->with('data',$data);
    }

    /**
     * スタッフデータ更新
     */
    public function update(Request $request)
    {
        $staff_id = $request->input('staff_id');
        $staff_name = $request->input('staff_name');
        $staff_name_kana = $request->input('staff_name_kana');
        $staff_type = $request->input('staff_type');

        $staff = Staff::find($staff_id);
        $staff->name = $staff_name;
        $staff->name_kana = $staff_name_kana;
        $staff->staff_type = $staff_type;
        $staff->save();
        
        return redirect(route('staffHome'));
    }
}
