スタッフ追加しますよ！

<form method="post" action="{{ route('staffConfirm') }}">
    {{ csrf_field() }}
  <label for="staff_name">スタッフの名前：</label>
  <input type="text" name="staff_name" maxlength="10" value="" placeholder="スタッフの名前" id="staff_name">
  <br>
  <label for="staff_name_kana">スタッフの名前（かな）：</label>
  <input type="text" name="staff_name_kana" maxlength="30" value="" placeholder="スタッフの名前(かな)" id="staff_name_kana">
  <br>
  <label for="staff_type">職種：</label>
  <input type="text" name="staff_type" maxlength="10" value="" placeholder="スタッフの職種" id="staff_type">
  <br>
  <input type="submit" name="register" value="登録">
</form>