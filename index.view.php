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