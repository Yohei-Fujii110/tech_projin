<?php
class Calc {
  // マジックメソッド：特殊な状況で実行されるメソッド。
  // コンストラクタは「インスタンスが生成される」という特殊な状況で実行されるもの
  private $x = 0;
  private $y = 0;
  function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }
  public function dispach() {
    return $this->x + $this->y;
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>38問目</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1><i class="fa fa-check-square"></i>PHP問題３８</h1>
    </div>

    <div class="jumbotron">
      <h3>
        <?php
        $c = new Calc(10, 15);
        echo $c->dispach();
        ?>
      </h3>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>