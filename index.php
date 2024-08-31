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
        [
            'name' => "x",
            "author" => "Mohamed",
            'releaseYear' => 1999,
            'puchaseUrl' => "http://example.com",
        ],
        [
            'name' => "y",
            "author" => "afshan",
            'releaseYear' => 2004,
            'puchaseUrl' => "http://example2.com",
        ],
        [
            'name' => "z",
            "author" => "afshan",
            'releaseYear' => 2024,
            'puchaseUrl' => "http://example3.com",
        ]
    ];

    function filterByAuthor($books , $author){
      $filteredBook = [];
      foreach($books as $book){
        if($book['author'] === $author){
          $filteredBook[] = $book;
        }
      }

      return $filteredBook;
    }
    $filteredBooks = filterByAuthor($books ,'afshan');
  ?>

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