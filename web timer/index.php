<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming soon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <img src="img/kim.jpg" class="logo">

    <div class="content">
        <p>Website is under maintainers</p>
        <h1>We' re <span>launching</span> soon</h1>
            <div class="launch-time">
                <div>
                    <p id="days">00</p>
                    <span>Days</span>
                </div>
                <div>
                    <p id="hours">00</p>
                    <span>Hours</span>
                </div>
                <div>
                    <p id="minutes">00</p>
                    <span>Minutes</span>
                </div>
                <div>
                    <p id="seconds">00</p>
                    <span>Seconds</span>
                </div>
            </div>
        <button type="button">Learn More <img src="img/search.png"></button>
    </div>
    <img src="img/target.png" class="rocket">
  </div>
  <script>
      var countDownDate = new Date("oct 22, 2021 00:00:00").getTime();/*This is the stop date */
      var kim = setInterval(function(){
          var now = new Date().getTime(); /*Stores the current date */
          var distance = countDownDate - now;

          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60 )) / 1000);

        /*Display values in html id */
          document.getElementById("days").innerHTML = days;
          document.getElementById("hours").innerHTML = hours;
          document.getElementById("minutes").innerHTML = minutes;
          document.getElementById("seconds").innerHTML = seconds;

          if(distance < 0){
              /*Clears the timer to zero */
              clearInterval(kim);
          document.getElementById("days").innerHTML = 00;
          document.getElementById("hours").innerHTML = 00;
          document.getElementById("minutes").innerHTML = 00;
          document.getElementById("seconds").innerHTML = 00;

          }
      },1000)
  </script>
</body>
</html>