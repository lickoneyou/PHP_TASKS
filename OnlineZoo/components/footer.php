  <?php function createSotial()
  {
      $sotialArr = [
          [
              'title' => 'Facebook',
              'img' => '../assets/img/socialIcons/fb.png',
              'href' => 'https://x.com/',
          ],
          [
              'title' => 'Twitter',
              'img' => '../assets/img/socialIcons/twitter.png',
              'href' => 'https://twitter.com/',
          ],
          [
              'title' => 'Instagram',
              'img' => '../assets/img/socialIcons/insta.png',
              'href' => 'https://www.instagram.com/',
          ],
          [
              'title' => 'YouTube',
              'img' => '../assets/img/socialIcons/youtube.png',
              'href' => 'https://www.youtube.com/',
          ],
      ];

      foreach ($sotialArr as $key) {
          echo "<a href='$key[href]' class='sotialCard' target='_blank'>
            <div class='sotialCardEllipse'>
              <img src='$key[img]' alt='$key[title]'>
            </div>
            <p>$key[title]</p>
         </a>";
      }
  } ?>
  
  <footer>
    <div class='formAndLogoWrapper'>
      <?php require './components/logo.php'; ?>
      <div class='formWrapper'>
        <h2>Subscribe to our news</h2>
        <form>
          <input type='email' placeholder='Enter your email'/>
          <input type='submit' value='Submit'/>
        </form>
      </div>
    </div>
    <button>donate for volunteers</button>
    <div class='contacts'>
      <div class='sotialContainer'>
        <?php createSotial(); ?>
      </div>
      <?php require './components/nav.php'; ?>
      <div class='footerCopyWrapper'>
          <p>Designed by Alisa Samborskaya</p>
          <p>©RSSchool & ©Yem Digital 2021</p>
        </div>
    </div>
  </footer>
  <script src='../assets/js/nav.js'></script>
  <?php require "./components/$jsScripts.php"; ?>
</body>
</html>