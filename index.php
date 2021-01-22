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
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Dischi</title>
</head>
<body>
  <?php include __DIR__ . '/partials/header.php'; ?>
  <main>
    <div class="discs-container">
      <?php foreach ($discs as $key => $disc): ?>
          <div class="box-cd">
              <img src="<?php echo $disc["poster"]?>" alt="">
              <h4><?php echo $disc["title"]?></h4>
              <div class="info-cd">
                <p><?php echo $disc["author"]?></p>
                <p><?php echo $disc["year"]?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
  </main>
</body>
</html>
