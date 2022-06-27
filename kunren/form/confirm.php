<?php 
  declare(strict_types=1);
  require_once __DIR__.'/functions.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
      <?php 
          if (!isset($_POST["form_submit"])) 
          {
          echo 'この画面への直接アクセスは許可されていません。';
          return;
          }
      ?>
      <p>確認画面</p>
      <form action="./create.php" method="post" class="form">
        <table border="1">
        <tr>
          <th>名前</th>
          <td><?php echo escape($_POST["name"]); ?></td>
          <input type="hidden" name="name" value="<?php echo escape($_POST["name"]); ?>">
        </tr>
        <tr>
          <th>電話番号</th>
          <td><?php echo escape($_POST["tel"]); ?></td>
          <input type="hidden" name="tel" value="<?php echo escape($_POST["tel"]); ?>">
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><?php echo escape($_POST["email"]); ?></td>
          <input type="hidden" name="email" value="<?php echo escape($_POST["email"]); ?>">
        </tr>
        <tr>
          <th>件名</th>
          <td><?php echo escape($_POST["title"]); ?></td>
          <input type="hidden" name="title" value="<?php echo escape($_POST["title"]);  ?>">
        </tr>
        <tr>
          <th>内容</th>
          <td><?php echo escape($_POST["content"]); ?></td>
          <input type="hidden" name="content" value="<?php echo escape($_POST["content"]); ?>">
        </tr>
        </table>
          <input type="submit">
      </form>
  </body>
</html>