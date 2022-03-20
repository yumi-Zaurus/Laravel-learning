@extends('adminlte::page')

@section('title', '患者情報')

@section('content_header')
    <h1>患者情報</h1>
@stop

@section('content')
<div>
    <span>カルテNo.</span>
    <span>{{ $data->medical_record_id }}</span>
</div>
<br>
<div>
    <span>名前：</span>
    <span>{{ $data->name }}</span>
</div>
<br>
<div>
    <p>性別</p>
    <p>{{ $data->sex }}</p>
</div>
<br>
<div>
    <span>電話番号：</span>
    <span>{{ $data->tel }}</span>
</div>
<br>
<div>
    <p>住所</p>
    <span>〒</span>
    <span>{{ $data->postal_code }}</span>
    <p>{{ $data->address }}</p>
</div>
<div>
    <p>診察履歴</p>
</div>
<form action="">
    <a href="{{ route('patientEdit', ['id' => $data->id]) }}">患者情報編集</a>
    <!-- TODO: patientEditのルーティング設定をする
          こっちはこのユーザーの情報を編集できるようにする -->
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
