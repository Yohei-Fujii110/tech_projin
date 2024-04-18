<?php
  class DateFromatUtils {
    // staticメソッドはインスタンスを生成せずに呼び出せる。$thisは使えない
    public static function format($timestamp = false, $ptn = 'Y-m-d') {
      if($timestamp) {
        return date($ptn, $timestamp);
      } else {
        return date($ptn);
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>41問目</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1><i class="fa fa-check-square"></i>PHP問題４１</h1>
    </div>

    <div class="jumbotron">
      <h3>
        <?php
        // staticメソッドを呼び出すときは「クラス名::staticメソッド」
          echo DateFromatUtils::format() . '<br>';
          echo DateFromatUtils::format(strtotime('2016-06-30'));

        ?>
      </h3>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>