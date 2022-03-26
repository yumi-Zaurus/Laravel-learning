@extends('adminlte::page')

@section('title', 'お知らせ登録')

@section('content_header')
<h1>お知らせ登録</h1>
@stop

@section('content')


<div class="card">
	<form method="post" action="{{ route('notificationConfirm') }}">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <label for="title">お知らせタイトル：</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="タイトル" required>
            </div>
            <div class="form-group">
                <label for="contents">内容：</label>
                <input type="text" name="contents" class="form-control" id="contents" placeholder="内容" required>
            </div>
            <div class="form-group">
                <label>重要度：</label>
                <select name="importance" class="form-control" required>
                    <option value=3>高</option>
                    <option value=2>中</option>
                    <option value=1 selected>低</option>
                </select>
            </div>
            <div class="form-group">
                <label for="delivered_at">公開日：</label>
                <input type="datetime-local" name="delivered_at" class="form-control" id="delivered_at" placeholder="内容" required>
            </div>
            <div class="form-group">
                <span>
                    <input type="radio" name="is_open" id="open" value=1 >
                    <label for="open">公開</label>
                </span>
                <span>
                    <input type="radio" name="is_open" id="private" value=0 required>
                    <label for="private">非公開</label>
                </span>
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

    // 今日の日付を取得
    window.addEventListener('load', () => {
    const now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
    var now_date = now.toISOString().slice(0, -8);
    document.getElementById('delivered_at').value = now_date;
    });
</script>
@stop
