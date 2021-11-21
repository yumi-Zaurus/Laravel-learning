Staff一覧ページです

<!DOCTYPE html>
<html>
<head>
<title>スタッフ一覧</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>名前</th>
      <th>名前（かな）</th>
      <th>スタッフタイプ</th>
    </tr>
    @foreach ($staffs as $key => $staff)
        <tr>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->name_kana }}</td>
            <td>{{ $staff->staff_type }}</td>
        </tr>
    @endforeach
  </table>
  <a href="{{ route('staffAdd') }}">スタッフ追加</a>
  {{ csrf_field() }}
</body>
</html>
