スタッフデータ更新しますよ！

<form method="post" action="{{ route('staffUpdate') }}">
    {{ csrf_field() }}
  <label for="staff_name">スタッフの名前：</label>
  <input type="text" name="staff_name" maxlength="10" value="{{ $data->name }}" id="staff_name">
  <br>
  <label for="staff_name_kana">スタッフの名前（かな）：</label>
  <input type="text" name="staff_name_kana" maxlength="30" value="{{ $data->name_kana }}" id="staff_name_kana">
  <br>
  <label for="staff_type">職種：</label>
  <input type="text" name="staff_type" maxlength="10" value="{{ $data->staff_type }}" placeholder="スタッフの職種" id="staff_type">
  <br>
  <input type="submit" name="register" value="登録">
  <input type="hidden" name="staff_id" value="{{ $data->id }}" id="staff_id">
</form>
