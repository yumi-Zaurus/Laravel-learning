Staff一覧ページです

<!DOCTYPE html>
<html>
<head>
<title>スタッフ一覧</title>
</head>
<body>
<form method="get" action="{{ route('staffSearch') }}">
    {{ csrf_field() }}
    <input type="search" name="staff_search" placeholder="検索したいスタッフ名">
    <input type="submit" name="search_button" value="検索">
</form>
<form action="">
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前（かな）</th>
            <th>職種</th>
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
{{ csrf_field() }}
</body>
</html>
