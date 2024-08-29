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
    // $student = [
    //     [
    //         "hello",
    //         "New",
    //         "something"
    //     ],
    //     [
    //         "x",
    //         "y"
    //     ]
    // ];

     $student = [
        [
            'name' => "Mohamed",
            "age" => 24,
            'Qualification' => "BIT"
        ],
        [
            'name' => "Ahamed",
            "age" => 21,
            'Qualification' => "HNDIT"
        ]
    ];
  ?>

  <ul>
    <?php foreach($student as $student) : ?> 
    <li>
          <?= $student["name"]; ?>  
    </li>
    <?php endforeach ?>
  </ul>

    <!-- <?php echo $student[0]['name'] ?>    -->

</body>
</html>