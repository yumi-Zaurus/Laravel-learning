@extends('adminlte::page')

@section('title', 'お知らせ登録')

@section('content_header')
    <h1>お知らせ登録 - 確認</h1>
@stop

@section('content')
<form method="post" action="{{ route('notificationRegister') }}">
{{ csrf_field() }}
    <table border="1">
        <tr>
            <td>お知らせタイトル</td>
            <td>{{ $title }}</td>
        </tr>
        <tr>
            <td>内容</td>
            <td>{{ $contents }}</td>
        </tr>
        <tr>
            <td>重要度</td>
            @switch ($importance)
                @case(1)
                    <td>低</td>
                    @break
                @case(2)
                    <td>中</td>
                    @break
                @case(3)
                    <td>高</td>
                    @break
            @endswitch
        </tr>
        <tr>
            <td>公開日</td>
            <td>{{ $delivered_at }}</td>
        </tr>
        <tr>
            <td></td>
            @if ($is_open == 1)
                <td>公開</td>
            @else
                <td>非公開</td>
            @endif
        </tr>
    </table>
    <input type="hidden" name="title" value="{{ $title }}">
    <input type="hidden" name="contents" value="{{ $contents }}">
    <input type="hidden" name="importance" value="{{ $importance }}">
    <input type="hidden" name="delivered_at" value="{{ $delivered_at }}">
    <input type="hidden" name="is_open" value="{{ $is_open }}">
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
