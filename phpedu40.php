<?php
class Staff {
  private $name;
  function setName($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
}

class Manager extends Staff {
  private $div;
  function setDiv($div) {
    $this->name = '山田';
    $this->div = $div;
  }
  function getDiv() {
    return $this->name.$this->div;
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>40問目</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1><i class="fa fa-check-square"></i>PHP問題４０</h1>
    </div>

    <div class="jumbotron">
      <h3>
        <?php
        $m = new Manager();
        $m->setName('高橋');
        $m->setDiv('商品管理');
        echo '1.'.$m->getName().'<br>';
        echo "2.{$m->getDiv()}<br>";
        print_r($m);
        ?>
      </h3>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>