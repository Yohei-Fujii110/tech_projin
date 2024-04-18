<?php
  class _ {
    // 第二引数$cbにはnullが入っているので、デフォルトはnullになる
    public static function f($v, $cb = null) {
      // is_callable()：引数が現在のスコープから関数として呼び出し可能か調べる
      if(is_callable($cb)) {
        return $cb($v);
      } else {
        return date('Y-m-d', $v);
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>42問目</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1><i class="fa fa-check-square"></i>PHP問題４２</h1>
    </div>

    <div class="jumbotron">
      <h3>
        <?php
          // 第二引数がnullではないので、第二引数になっているfunction($V)が動作する
          // 第一引数($V)にdate('Y-m-d')を代入
          echo _::f(date('Y-m-d'), function($v){return $v;});
          echo '<br>';
          echo _::f(strtotime('2016-03-01'));
          echo '<br>';
        ?>
      </h3>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>