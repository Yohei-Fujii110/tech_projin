<?php
class Calc {
  public $x = 0;
  public $y = 0;
  public function dispach() {
    // $this->を書かないとエラー
    // return $x + $y;
    return $this->x + $this->y;
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>37問目</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1><i class="fa fa-check-square"></i>PHP問題３７</h1>
    </div>

    <div class="jumbotron">
      <h3>
        <?php
        $c = new Calc();
        $c->x = 10;
        $c->y = 5;
        echo $c->dispach();
        ?>
      </h3>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>