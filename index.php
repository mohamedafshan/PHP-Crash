<?php require 'index.view.php' ?>
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

  <ul>
    <?php foreach($filteredBooks as $book) : ?> 
        <li>
              <a href="<?= $book['puchaseUrl'] ?>">
                  <?= $book['author']; ?> (<?= $book['releaseYear'] ?>) - by <?= $book['author'] ?>
              </a>
        </li>
    <?php endforeach; ?>
  </ul>

    <!-- <?php echo $student[0]['name'] ?>    -->

</body>
</html>