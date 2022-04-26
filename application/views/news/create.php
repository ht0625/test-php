

<?php 
 // フォームバリデーションを行い、戻されたすべてのエラーメッセージを返します。
 // メッセージがない場合、空の文字列を返します。
 echo validation_errors();
?>

<?php
 // form の開始タグを作成し、action 先を http://localhost/test_app/index.php/news/create に設定する。
 // フォームヘルパーは自動的に CSRF のための隠しフィールドを挿入する。
 // リクエストメソッドはデフォルトでは POST になるよう。
 echo form_open('news/create');
?>

    <label for="title">Title</label>
    <input type="text" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>
