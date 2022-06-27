<?php
    //事前準備
    $dsn = 'mysql:host=localhost;dbname=osimen_db;charset=utf8';
    $user = 'testuser';
    $pass = 'test';

    //DB接続
    $dbh = new PDO($dsn,$user,$pass);

    //INSERT文
    if (array_key_exists('submit_add_name', $_POST) && array_key_exists('love_name', $_POST)) {
      $insert_sql = 'INSERT INTO osimen_name(osimen_name) VALUES(:title)';
      $stmt = $dbh->prepare($insert_sql);
      $params = array(':title'=>$_POST['love_name']);
      $stmt->execute($params);
    }

    //DELETE文
    if (array_key_exists('submit_delete_name', $_POST) && array_key_exists('delete_osimen_id', $_POST)) {
        $delete_sql = 'DELETE FROM osimen_name WHERE osimen_id = :id';
        $stmt = $dbh->prepare($delete_sql);
        $params = array(':id'=>$_POST['delete_osimen_id']);
        $stmt->execute($params);
    }

    //SELECT文
    $select_sql = 'SELECT * FROM osimen_name';
    $stmt = $dbh->query($select_sql);

    $dbh = null;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>推しメン登録ページ</title>
    </head>
    <body>
        <h1>推しメン登録</h1>
        <h2>推しメン登録フォーム</h2>
        <form action="osimen.php" method="post">
            <input type="text" name="love_name" placeholder="推しメンを入力" required>
            <input type="submit" name="submit_add_name" value="登録">
        </form>
        <h2>登録された推しメン一覧</h2>
            <ul>
<?php
            if ($stmt) {
            foreach($stmt as $value){
              $id = $value['osimen_id'];
              $love_name = $value['osimen_name'];
?>
        <form action="osimen.php" method="post">
                <li>
                    <?php print htmlspecialchars($love_name, ENT_QUOTES, 'UTF-8'); ?>
                    <input type="hidden" name="delete_osimen_id" value="<?php print htmlspecialchars($id, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="submit" name="submit_delete_name" value="削除">
                </li>
        </form>
<?php
                }
            }
?>
            </ul>
    </body>
</html>
