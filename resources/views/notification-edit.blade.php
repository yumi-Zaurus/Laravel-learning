@extends('adminlte::page')

@section('title', 'お知らせ編集')

@section('content_header')
<h1>お知らせ編集</h1>
@stop

@section('content')
<div class="card">
    <form method="post" action="{{ route('notificationUpdate') }}">
        {{ csrf_field() }}
        <div class="card-body">
            <input type="hidden" name="notification_id" value="{{ $notification->id }}">
            <div class="form-group">
                <label for="title">お知らせタイトル</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="お知らせタイトル" value="{{ $notification->title }}" required>
            </div>
            <div class="form-group">
                <label for="contents">お知らせ内容</label>
                <textarea class="form-control" name="contents" id="contents" cols="30" rows="10" placeholder="お知らせの内容をここに入力してください" required>{{ $notification->contents }}</textarea>
            </div>
            {{ $notification->delivered_at }}
            <div class="form-group">
                <label>重要度</label>
                <select name="importance" class="form-control" required>
                    <option value=1
                        @if ($notification->importance == 1) selected @endif>
                        低</option>
                    <option value=2
                        @if ($notification->importance == 2) selected @endif>
                        中</option>
                    <option value=3
                        @if ($notification->importance == 3) selected @endif>
                        高</option>
                </select>
            </div>
            <div class="form-group">
                <label for="delivered_at">公開日：</label>
                <input type="datetime-local" name="delivered_at" class="form-control" id="delivered_at" placeholder="内容" value="{{ date('Y-m-d\TH:i', strtotime($notification->delivered_at)) }}" required>
            </div>
            <div class="form-group">
                <span>
                    <input type="radio" name="is_open" id="open" value=1
                        @if ($notification->is_open == 1) checked @endif>
                    <label for="open">公開</label>
                    </span>
                    <span>
                        <input type="radio" name="is_open" id="private" value=0
                            @if ($notification->is_open == 0) checked @endif>
                        <label for="private">非公開</label>
                </span>
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