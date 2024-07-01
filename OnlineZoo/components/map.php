<?php

function createMapCard()
{
    $mapArr = [
        ['img' => '../assets/img/map/pay.png', 'title' => 'Pay with card'],
        [
            'img' => '../assets/img/map/zoo.png',
            'title' => 'Payment goes to the zoo',
        ],
        [
            'img' => '../assets/img/map/monkey.png',
            'title' => 'Your favourite animal gets delicious dish',
        ],
    ];

    for ($i = 0; $i < count($mapArr); $i++) {
        $arr = $mapArr[$i];
        if ($i >= count($mapArr) - 1) {
            echo "<div class='mapCard'>
        <div class='imageWrapper'>
          <img src='$arr[img]' alt='$arr[title]'>
        </div>
        <p>$arr[title]</p>
      </div>";
        } else {
            echo "<div class='mapCard'>
        <div class='imageWrapper'>
          <img src='$arr[img]' alt='$arr[title]'>
        </div>
        <p>$arr[title]</p>
      </div>
      <img class='mapArrow' src='../assets/img/map/arrow.png' alt='arrow'>";
        }
    }
} ?>

<section class='map'>
  <div class='mapContainer'>
    <div class='mapDescriptionWrapper'>
      <h2 class='mapDescriptionTitle'>Pick and feed a friend</h2>
      <p class='mapDescription'>We know the animals bring you joy, and in these extraordinary times, we’re glad.</p>
      <p class='mapSubDescription weigth500'>During a time when the COVID-19 epidemic is touching all of our lives, we’re proud and glad that people around the world find joy in PetStory.</p>
      <p class='mapSubDescription'>Even though the zoo has reopened, we need you now more than ever to help us deal with these problems. Please consider a gift to our <em>Emergency Support Fund.</em></p>
    </div>
    <div class='mapWrapper'>
      <h2 class='mapTitle'>How it works</h2>
      <div class='mapCardContainer'>
        <?php createMapCard(); ?>
      </div>
    </div>
    <button>Feed a friend now</button>
  </div>
</section>