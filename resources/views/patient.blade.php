@extends('adminlte::page')

@section('title', '患者一覧')

@section('content_header')
    <h1>患者一覧</h1>
@stop

@section('content')
<form action="">
    <input type="search" name="staff_search" placeholder="検索したい患者情報">
    <input type="submit" name="search_button" value="検索">
    <!-- TODO: 名前、カルテ番号、かなで検索ができるように -->
</form>
<form action="">
    <table border="1">
        <tr>
            <th>カルテNo.</th>
            <th>患者氏名</th>
            <th>患者氏名（カナ）</th>
            <th>生年月日</th>
            <th>性別</th>
            <th>電話番号</th>
        </tr>
        @foreach ($patients as $key => $patient) 
        <tr>
            <td>{{ ($patient->medical_record_id) }}</td>
            <td>{{ ($patient->name) }}</td>
            <td>{{ ($patient->name_kana) }}</td>
            <td>{{ ($patient->birthday) }}</td>
            <td>{{ ($patient->sex) }}</td>
            <td>{{ ($patient->tel) }}</td>
            <td><a href="{{ route('patientInfo', ['id' => $patient->id]) }}">詳細</a></td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('patientAdd') }}">新規患者情報追加</a>
    <a href="#">患者情報編集</a>
    <!-- TODO: 患者を検索して編集できるようにする
          患者検索画面->患者情報編集画面 -->
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
