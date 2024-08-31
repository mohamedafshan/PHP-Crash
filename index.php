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
            "author" => "Ahamed",
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

    function filterByAuthor(){
      return 'This is came from function';
    }
  ?>

  <ul>
    <?php foreach($books as $book) : ?> 
      <?php if($book['author'] ==='afshan'): ?>
        <li>
              <a href="<?= $book['puchaseUrl'] ?>">
                  <?= $book['author']; ?> (<?= $book['releaseYear'] ?>) - by <?= $book['author'] ?>
              </a>
        </li>
      <?php endif; ?>  
    <?php endforeach; ?>
  </ul>

  <p>
      <?= filterByAuthor()?>
  </p>

    <!-- <?php echo $student[0]['name'] ?>    -->

</body>
</html>