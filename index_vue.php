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
  <div id="app">
    <header>
      <div class="container">
        <div class="logo">
          <img :src="logo" alt="">
        </div>
      </div>
    </header>
    <main>
      <div class="main-box">
        <div class="container">
            <div v-for="disc in discs" class="box-cd">
              <div class="poster-box">
                <img :src="disc.poster" alt="">
              </div>
              <div class="title-box">
                <h4>{{ disc.title }}</h4>
              </div>
              <div class="info-cd">
                <p>{{ disc.author }}</p>
                <p>{{ disc.year }}</p>
              </div>
            </div>
        </div>
      </div>
    </main>
  </div>
<script src="js/app.js" charset="utf-8"></script>
</body>
</html>
