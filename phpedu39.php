<?php
class Staff {
  private $name = 'no name';
  function __construct($name) {
    $this->name = $name;
  }
  function getName() {
    return $this->name;
  }
}

class Yamada extends Staff {
}

class Tanaka extends Staff {
    function __construct($name) {
    $this->name = $name;
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>39問目</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="page-header">
      <h1><i class="fa fa-check-square"></i>PHP問題３９</h1>
    </div>

    <div class="jumbotron">
      <h3>
        <?php
        $y = new Yamada('takeru');
        $t = new Tanaka('kyouko');
        echo "{$y->getName()}<br>";
        print_r($y);
        echo '<br><br>';

        echo "{$t->name}<br>";
        print_r($t) . '<br>';
        ?>
      </h3>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>