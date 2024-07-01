<?php

function getAnimals()
{
    $animals = [
        [
            'title' => 'giant Pandas',
            'place' => 'Native to Southwest China',
            'img' => '../assets/img/animals/pandas.png',
            'eat' => '../assets/img/banana-bamboo_icon.png',
        ],
        [
            'title' => 'Eagles',
            'place' => 'Native to South America',
            'img' => '../assets/img/animals/eagles.png',
            'eat' => '../assets/img/meet-fish_icon.png',
        ],
        [
            'title' => 'Gorillas',
            'place' => 'Native to Congo',
            'img' => '../assets/img/animals/gorillas.png',
            'eat' => '../assets/img/banana-bamboo_icon.png',
        ],
        [
            'title' => 'Two-toed Sloth',
            'place' => 'Mesoamerica, South America',
            'img' => '../assets/img/animals/Two-toedSloth.png',
            'eat' => '../assets/img/banana-bamboo_icon.png',
        ],
        [
            'title' => 'cheetahs',
            'place' => 'Native to Africa',
            'img' => '../assets/img/animals/cheetahs.png',
            'eat' => '../assets/img/meet-fish_icon.png',
        ],
        [
            'title' => 'Penguins',
            'place' => 'Native to Antarctica',
            'img' => '../assets/img/animals/Penguins.png',
            'eat' => '../assets/img/meet-fish_icon.png',
        ],
    ];

    foreach ($animals as $key) {
        echo "<div class='animalCard'>
        <img src='$key[img]' alt='$key[title]'/>
          <div class='animalCardWrapper'>
            <div class='description'>
              <h2>$key[title]</h2>
              <p>$key[place]</p>
            </div>
            <img src='$key[eat]' alt='icon'>
          </div>
        </div>";
    }
} ?>

<section class='zoos'>
  <div class='animalsContainer'>
    <?php getAnimals(); ?>
  </div>
  <button>choose your favorite</button>
  <img class='palm' src='../assets/img/palmzoosLeft.png' alt='palm'/>
  <img class='strelitzia' src='../assets/img/strelitziaZoosRight.png' alt='strelitzia'/>
</section>
