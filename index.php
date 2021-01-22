<?php
include __DIR__ . '/db.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- foglio di stile -->
  <link rel="stylesheet" href="css/app.css">
  <title>Dischi</title>
</head>
<body>
  <main>
    <?php foreach ($discs as $key => $disc): ?>
      <h1><?php echo $disc["title"]?></h1>
    <?php endforeach; ?>

  </main>
</body>
</html>
