<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weather</title>
</head>
<body>
<div class="socials">
            <a href=""><img src="../images/facebook.svg"></a>
            <a href=""><img src="../images/linkedin.svg"></a>
            <a href=""><img src="../images/twitter.svg"></a>
            <a href=""><img src="../images/whatsapp.svg"></a>

        </div>
        <header>

            <div class="navbar">
                <div class="logo">
                    <h1 class="t1">SMART SHAMBA</h1>
                </div>
                <ul>
                    <!-- <li><a href="farmer.php">Back</a></li> -->

                    <li><a href="#" >Home</a></li>
                    <li><a href="#" class="active" >Username: <?php 
                    session_start();
                    if(isset ($_SESSION['permission'] )){

                        echo $_SESSION['permission'];
                    }
    
                         ?>

                    </a></li>
                    <li><a href="logout.php">Logout</a></li>

                    <!-- <li><a href="#" class="active">Home</a></li>
                    <li><a href="register.php">Registration</a></li>
                    <li><a href="market2.php">Market</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="about.php">About</a></li> -->

                </ul>
            </div>
        </header>
       
    <style>body {background-image: url('mapbg.jpg');}</style>

    <div class="container">
        <div class="current-info">

            <div class="date-container">
                <div class="time" id="time">
                    12:30 <span id="am-pm">PM</span>
                </div>
                <div class="date" id="date">
                    Monday, 25 May
                </div>

                <div class="others" id="current-weather-items">
                    
                    
                </div>
            </div>

            <div class="place-container">
                <div style="font-weight: bold;" class="time-zone" id="time-zone"></div><!--Asia/Kolkata-->
                <section class="input-part">
                    <p class="info-txt"></p>
                    <div class="content">
                        <input class="ppp" type="text" spellcheck="false" placeholder="Enter city name" required>
                    </div>
                </section>
              <!--  <div id="country" class="country">IN</div> -->
            </div>
        </div>

        
    </div>

    <div class="future-forecast">
        <div class="today" id="current-temp">
            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
            <div class="other">
                <div class="day">Monday</div>
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
        </div>

        <div class="weather-forecast" id="weather-forecast">
            <div class="weather-forecast-item">
                <div class="day">Tue</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Wed</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Thur</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Fri</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Sat</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="script.js"></script>
</body>
</html>