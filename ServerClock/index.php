<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Clock</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="clock">
    <div class="hour">
        <div class="hr" id="hr"></div>
    </div>
    <div class="min">
        <div class="mn" id="mn"></div>
    </div>
    <div class="sec">
        <div class="sc" id="sc"></div>
    </div>
</div>

<?php
$hour = getdate()['hours'];
$min = getdate()['minutes'];
$seconds = getdate()['seconds'];
$year = getdate()['year'];
$mon = getdate()['mon'];
$mday = getdate()['mday'];
$deg = 6;
?>


    <script>
      const hr = document.querySelector('.hr');
      const mn = document.querySelector('.mn');
      const sc = document.querySelector('.sc');

      const data = new Date(<?= $year ?>, <?= $mon ?>, <?= $mday ?>, <?= $hour ?>, <?= $min ?>, <?= $seconds ?>)


      setInterval(() => {
        data.setSeconds(data.getSeconds() + 1)
        sc.style.transform = `rotateZ(${data.getSeconds() * <?= $deg ?>}deg)`;
        mn.style.transform = `rotateZ(${data.getMinutes() * <?= $deg ?>}deg)`;
        hr.style.transform = `rotateZ(${(data.getHours() * 30) + (data.getMinutes() * <?= $deg ?> / 12)}deg)`;
      }, 1000);

    </script>

</body>
</html>