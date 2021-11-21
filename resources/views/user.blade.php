<!DOCTYPE html>
<html>
<head>
<title>ユーザー一覧</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>名前</th>
      <th>メールアドレス</th>
    </tr>
    <tr>
      <td>田中</td>
      <td>aaaaa@aaaa</td>
    </tr>
    <tr>
      <td>佐藤</td>
      <td>aaaaa@aaaa</td>
    </tr>
  </table>
  <br>
  {{$users}}
  <br>
  <table border="1">
    <tr>
      <th>名前</th>
      <th>メールアドレス</th>
    </tr>
    @foreach ($users as $key => $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
  </table>
</body>
</html>


