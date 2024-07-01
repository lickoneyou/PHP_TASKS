<?php
$title = 'Donate';
$page = 'donateLinks';
require './components/header.php';
?>
<main>
  <?php
  $display = 'none';
  $height = '390px';
  require './components/showcase.php';
  require './components/donationHelps.php';
  ?>
</main>
<?php 
$jsScripts = 'donateJS';
require './components/footer.php';
?>
