<?php
$date = date("Y/m/d H:i:s");
$name = $_POST["name"];
$mail = $_POST["mail"];
$memo = $_POST["memo"];

$all = array(
    $date,
    $name,
    $mail,
    $memo
);
$line = implode(',' , $all);

$file = fopen('./data/data.csv','a');
fwrite($file, $line . "\n");
fclose($file);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>File書き込み</title>
  </head>
  <body>
    <ul>
  	  <li><a href="index.php">戻る</a></li>
    </ul>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">datetime</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">memo</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>

    <?php
        $file = fopen('./data/data.csv','r');
        $num = 1;
  
        // whileで行末までループ処理
        
        while($line = fgetcsv($file)){
            echo "<tr>";
            echo "  <th scope='row'>" . $num ."</th>";
            echo "  <td>" . $line[0] . "</td>";
            echo "  <td>" . $line[1] . "</td>";
            echo "  <td>" . $line[2] . "</td>";
            echo "  <td>" . $line[3] . "</td>";
            echo "  <td><button type='button' class='btn btn-danger btn-sm' name='delete-" . $num ."'>削除</button></td>";
            echo "</tr>";
            $num++;
        }
        // fcloseでファイルを閉じる
        fclose($file);
        $num--;
        echo '<ul class="pagination justify-content-center">';
        echo "全件数: " . $num . "件";
        echo '</ul>';
    ?>

    <?php
        $result = "";
        if (isset($_POST['delete-1'])) {
            $result = "登録しました";
        }
        echo $result;
    ?>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

