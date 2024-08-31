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
            'releaseYear' => 2024,
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

    function filter($items ,$fn){
      $filteredItem = [];

      foreach($items as $item){
        if($fn($item)){
          $filteredItem[] = $item;
        }
      }

      return $filteredItem;
    };
    $filteredBooks = array_filter($books, function($book){
      return $book['releaseYear'] >=2000;
    });
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