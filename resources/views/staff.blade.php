@extends('adminlte::page')

@section('title', 'スタッフ一覧')

@section('content_header')
    <h1>スタッフ一覧</h1>
@stop

@section('content')
<form method="get" action="{{ route('staffSearch') }}">
    <input type="search" name="staff_search" placeholder="検索したいスタッフ名">
    <input type="submit" name="search_button" value="検索">
</form>
<form action="">
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前（かな）</th>
            <th>職種</th>
            <th colspan="2">編集</th>
        </tr>
        @foreach ($staffs as $key => $staff)
            <tr>
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->name_kana }}</td>
                <td>{{ $staff->staff_type }}</td>
                <td><a href="{{ route('staffDelete') }}">削除</a></td>
                <td><a href="{{ route('staffEdit', ['id' => $staff->id]) }}">変更</a></td>
            </tr>
        @endforeach
    </table>
</form>
<a href="{{ route('staffAdd') }}">スタッフ追加</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
