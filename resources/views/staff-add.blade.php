@extends('adminlte::page')

@section('title', 'スタッフ登録')

@section('content_header')
<h1>スタッフ登録</h1>
@stop

@section('content')


<div class="card">
	<form method="post" action="{{ route('staffConfirm') }}">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <label for="staff_name">名前：</label>
                <input type="text" name="staff_name" class="form-control" id="staff_name" placeholder="名前" required>
            </div>
            <div class="form-group">
                <label for="staff_name_kana">名前（かな）：</label>
                <input type="text" name="staff_name_kana" class="form-control" id="staff_name_kana" placeholder="なまえ" required>
            </div>
            <div class="form-group">
                <label>職種</label>
                <select name="position_id" class="form-control" required>
                    <option selected disabled>職業を選択してください</option>
					@foreach ($positions as $key => $position)
                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">登録</button>
        </div>
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
	console.log('Hi!');
</script>
@stop
