<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Position;



class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::with('Position')->get();

        return view('staff')
            ->with('staffs', $staffs->toArray());
    }

    /**
     * スタッフデータ登録画面
     */
    public function add()
    {
        $positions = Position::getPositions();
        return view('staff-add')->with('positions', $positions);
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
        $position_id = $request->input('position_id');
        $position = Position::getPositions();
        $position_data = $position[$position_id];

        return view('staff-confirm')->with([
            'staff_name' => $staff_name,
            'staff_name_kana' => $staff_name_kana,
            'position_data' => $position_data,
        ]);
    }

    /**
     * スタッフデータ登録
     */
    public function register(Request $request)
    {
        $staff_name = $request->input('staff_name');
        $staff_name_kana = $request->input('staff_name_kana');
        $position_id = $request->input('position_id');

        $staff = new Staff();
        $staff->name = $staff_name;
        $staff->name_kana = $staff_name_kana;
        $staff->position_id = $position_id;
        $staff->save();
        session()->flash('flash_message', '登録が完了しました。');

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
        $staff = Staff::find($id);
        $position_id = $staff->position_id;
        $positions = Position::getPositions();

        return view('staff-edit')
            ->with('staff', $staff)
            ->with('position_id', $position_id)
            ->with('positions', $positions);
    }

    /**
     * スタッフデータ更新
     */
    public function update(Request $request)
    {
        $staff_id = $request->input('staff_id');
        $staff_name = $request->input('staff_name');
        $staff_name_kana = $request->input('staff_name_kana');
        $position_id = $request->input('position_id');

        $staff = Staff::find($staff_id);
        $staff->name = $staff_name;
        $staff->name_kana = $staff_name_kana;
        $staff->position_id = $position_id;
        $staff->save();
        session()->flash('flash_message', '更新が完了しました。');

        return redirect(route('staffHome'));
    }
}
