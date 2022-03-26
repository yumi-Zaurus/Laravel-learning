@extends('adminlte::page')

@section('title', 'スタッフ登録')

@section('content_header')
    <h1>スタッフ登録 - 確認</h1>
@stop

@section('content')
<form method="post" action="{{ route('staffRegister') }}">
{{ csrf_field() }}
    <table border="1">
        <tr>
            <td>スタッフの名前</td>
            <td>{{ $staff_name }}</td>
        </tr>
        <tr>
            <td>スタッフの名前（かな）</td>
            <td>{{ $staff_name_kana }}</td>
        </tr>
        <tr>
            <td>職種</td>
            <td>{{ $position_data->name }}</td>
        </tr>
    </table>
    <input type="hidden" name="staff_name" value="{{ $staff_name }}">
    <input type="hidden" name="staff_name_kana" value="{{ $staff_name_kana }}">
    <input type="hidden" name="position_id" value="{{ $position_data->id }}">
    <input type="submit" value="内容を登録する">
    <input type="button" value="内容を修正する" onclick="history.back(-1)">
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
