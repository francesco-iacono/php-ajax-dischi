<main>
  <div class="main-box">
    <div class="discs-container">
      <?php foreach ($discs as $key => $disc): ?>
        <div class="box-cd">
          <div class="poster-box">
            <img src="<?php echo $disc["poster"]?>" alt="">
          </div>
          <div class="title-box">
            <h4><?php echo $disc["title"]?></h4>
          </div>
          <div class="info-cd">
            <p><?php echo $disc["author"]?></p>
            <p><?php echo $disc["year"]?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>
