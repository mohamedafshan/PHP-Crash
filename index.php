<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <!-- Array -->
     <p>The Array list below</p>
  <?php
    $books = [
        "Array Element 1",
        "Array Element 2",
        "Array Element 3"
    ];
  ?>


  <!-- Metode 1 -->
  <!-- <ul> -->
    <!-- <?php
        foreach($books as $book){
            echo "<li>{$book}</li>";
        }
    ?> -->
  <!-- </ul> -->

<ul>
    <?php foreach($books as $book) : ?>
        <li><?= $book ?></li>
        <?php endforeach; ?>
</ul>

</body>
</html>