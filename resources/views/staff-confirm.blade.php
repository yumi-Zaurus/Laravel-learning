スタッフ登録しますか？



<form method="post" action="{{ route('staffRegister') }}">
{{ csrf_field() }}
    <table border="1">
        <tr>
            <td>スタッフの名前</td>
            <td>{{ $staff_name }}</td>
        </tr>
        <tr>
            <td>スタッフの名前（かな）</td>
            <td>{{ $staff_name_kana }}</td>
        </tr>
        <tr>
            <td>職種</td>
            <td>{{ $staff_type }}</td>
        </tr>
    </table>
    <input type="hidden" name="staff_name" value="{{ $staff_name }}" id="staff_name">
    <input type="hidden" name="staff_name_kana" value="{{ $staff_name_kana }}" id="staff_name_kana">
    <input type="hidden" name="staff_type" value="{{ $staff_type }}" id="staff_type">
    <input type="submit" value="内容を登録する">
    <input type="button" value="内容を修正する" onclick="history.back(-1)">
</form>