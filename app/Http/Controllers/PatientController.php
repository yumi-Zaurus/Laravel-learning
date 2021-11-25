<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;



class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        
        return view('patient')->with('patients', $patients);
    }

    /**
     * 患者情報詳細ページ
     */
    public function info($id)
    {
        $data = Patient::find($id);
        
        return view('patient-info')->with('data', $data);
    }

    /**
     * 
     */
    public function add()
    {
        return view('patient-add');
    }
    
    /**
     * 
     */
    public function edit($id)
    {
        $data = Patient::find($id);
        
        var_dump($data); 
    }
}

/**
 * TODO: 患者さん一覧ページでは電話番号まで、詳細ページを開いたら住所とか健康保険証の番号も表示される
 * TODO: 性別登録：文字、DB登録：数字、対応させる
 */