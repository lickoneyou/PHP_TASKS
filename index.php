  <?php
  $title = 'Online Zoo';
  $page = 'indexLinks';
  require './components/header.php';
  ?>
  <main>
      <?php
      $display = 'block';
      $height = '700px';
      require './components/showcase.php';
      require './components/about.php';
      require './components/zoo.php';
      require './components/map.php';
      ?>
      
  </main>
  <?php require './components/footer.php'; ?>
