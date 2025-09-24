<!-- 
film informatie

detail.php?id=0 → Deadpool

detail.php?id=1 → Jurassic World

detail.php?id=2 → Pieter Konijn

detail.php?id=3 → Solo -->
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title><?php echo $film["title"]; ?></title>
  <link rel="stylesheet" href="assets/css/detail.css">
   <link rel="stylesheet" href="assets/css/main.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
   
<?php
 include 'includes/h1.php';
include 'includes/array.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 3;

if (!isset($films[$id])) {
    echo "<h2>Film niet gevonden</h2>";
    exit;
}

$film = $films[$id];
?>


<body>

<header class="detail-header">
  <?php echo $film["title"]; ?>
</header>

<main class="film-detail">
  <div class="film-container">
    <div class="film-poster">
      <?php if (!empty($film["poster"])): ?>
        <img src="<?php echo $film["poster"]; ?>" alt="Poster">
      <?php else: ?>
        <p class="no-poster">Geen poster beschikbaar</p>
      <?php endif; ?>
    </div>

    <div class="film-info">
       <p class="film-rating"><?php echo $film["rating"]; ?></p>
       <?php if (!empty($film["kijkwijzer"])): ?>
  <div class="kijkwijzer-icons">
    <?php foreach ($film["kijkwijzer"] as $icon): ?>
      <img src="<?php echo $icon; ?>" alt="Kijkwijzer icoon" class="kijkwijzer-icon">
    <?php endforeach; ?>
  </div>
<?php endif; ?>
     <p class="film-release"><strong>release:</strong> <?php echo $film["release"]; ?></p> 
      <p class="film-description"><?php echo $film["description"]; ?></p>

      <?php if (!empty($film["actors"])): ?>
        <h3 class="actors-heading">Acteurs</h3>
        <div class="actors-list">
          <?php foreach ($film["actors"] as $actor): ?>
            <img src="<?php echo $actor; ?>" alt="acteur" class="actor-photo">
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <p class="no-actors">Geen acteurs beschikbaar</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- //Button buiten film-container -->
  <a href="#" class="btn-ticket">KOOP JE TICKETS</a>

  <div class="film-trailer">
    <iframe src="<?php echo $film["trailer"]; ?>" allowfullscreen></iframe>
  </div>
</main>
<?php
 include 'includes/footer.php'
 ?>
</body>
</html>