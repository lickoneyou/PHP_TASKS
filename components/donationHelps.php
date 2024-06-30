<?php

function createAmount()
{
    $amountArr = [
        '$5000',
        '$2000',
        '$1000',
        '$500',
        '$250',
        '$100',
        '$50',
        '$25',
    ];

    for ($i = 0; $i < count($amountArr); $i++) {
        echo "<div class='amountContainer'>
        <div class='largeBorder'>
          <div class='mediumBorder'>
            <div class='easyBorder'>
            </div>
          </div>
        </div>
        <p class='amountCurrency'>$amountArr[$i]</p>
      </div>";
    }
} ?>

<section class='donationHelps'>
  <h2 class='donationHelpsTitle'>THE ZOO HAS OFFICIALLY REOPENED BUT WE STILL NEED YOUR HELP!</h2>
  <p class='donationHelpsDescr'>Even though the Zoo has been able to reopen, we are at a greatly reduced capacity with educational programs and public and private events cancelled or postponed for additional months. We need you now more than ever to help ensure that we overcome these challenges. We have been actively raising funds in the community, and we are grateful for the generosity.  But much more support is still needed, and we need your help! Please consider a gift today – no matter what size – to help us sustain our mission.</p>
  <div class='donationInformation'>
    <h2 class='donationInformationTitle'>Donation Information</h2>
    <div class='donationInformationConainer'>
      <h3 class='donationInformationConainerTitle'>Pick and feed a friend</h3>
      <p class='donationInformationConainerDesc'>We know the animals bring you joy, and in these extraordinary times, we’re glad.</p>
      <div class='pandaContainer'>
        <div class='aboutPandaDiet'>
          <h4>4</h4>
          <p>Panda diet for the day.</p>
        </div>
        <div class='aboutPandaDietX'>x</div>
        <img src='../assets/img/panda.png' alt='panda'>
      </div>
      <h4 class='amountTitle'>Amount</h4>
      <div class='amoutnSchedule'>
        <div class='amountEllipseWrapper'>
          <?php createAmount(); ?>
        </div>
        <hr />
      </div>
      <form>
        <input type='number' placeholder='Another amount'/>
        <div class='radioWrapper'>
          <div class='form_radio'>
            <input type='radio' id='monthly' name="payment" checked/>
            <label for="monthly">Monthly</label>
          </div>
          <div class='form_radio'>
            <input type='radio' id='once' name="payment"/>
            <label for="once">Once</label>
          </div>
        </div>
      </form>
      <button>Feed a friend now</button>
      <p class='share'>Share with your friends on social networks</p>
    </div>
  </div>
</section>