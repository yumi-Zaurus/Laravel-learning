@extends('adminlte::page')

@section('title', 'スタッフ編集')

@section('content_header')
<h1>スタッフ編集</h1>
@stop

@section('content')
<div class="card">
    <form method="post" action="{{ route('staffUpdate') }}">
        {{ csrf_field() }}
        <div class="card-body">
            <input type="hidden" name="staff_id" value="{{ $staff->id }}">
            <div class="form-group">
                <label for="staff_name">名前：</label>
                <input type="text" name="staff_name" class="form-control" id="staff_name" placeholder="名前" value="{{ $staff->name }}">
            </div>
            <div class="form-group">
                <label for="staff_name_kana">名前（かな）：</label>
                <input type="text" name="staff_name_kana" class="form-control" id="staff_name_kana" placeholder="なまえ" value="{{ $staff->name_kana }}">
            </div>
            <div class="form-group">
                <label>職種</label>
                <select name="position_id" class="form-control">
                    @foreach ($positions as $key => $position)
                        @if ($position->id == $position_id)
                            <option value="{{ $position->id }}" selected="selected">{{ $position->name }}</option>
                        @else
                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">更新</button>
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