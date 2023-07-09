<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="../Css/Homepagestyle.css" type="text/css" rel="stylesheet">
    <link href="../Css/cssfile.css" type="text/css" rel="stylesheet">

</head>

<body>

<nav class="navbar">
      <div class="navbar__container">
        <a href="Homepage.php" id="navbar__logo"
          ><i class=></i>SMART SHAMBA</a
        >
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="Homepage.php" class="navbar__links">Home</a>
          </li>
          <li class="navbar__item">
            <a href="market2.php" class="navbar__links">Markets</a>
          </li>
          <li class="navbar__item">
            <a href="contact.php" class="navbar__links">Contacts</a>
          </li>
          <li class="navbar__item">
            <a href="about.php" class="navbar__links">About</a>
          </li>
          <li class="navbar__btn">
            <a href="login-reg.php" class="button">Login</a>
          </li>
        </ul>
      </div>
    </nav>




<!-- slider -->
<div class="slider">
      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Smart Farming:<br />"Growing Smarter, Sustaining Better"</p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/parallax9.jpg" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide Weather Notification<br />Farmer can search his location and <br> get the weather of the specific location</p>
          <ul>
          <li class="navbar__btn">
            <a href="login-reg.php" class="button2">Register</a>
          </li>
          </ul>
        </div>
        <img
        class="Aru"
          src="../images/quality for jpg"
          style="width: 100%; height: 100%"
        />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide ShambaBot<br />Which will help you in fighting <br>against pest and diseases in your <br>farm through chating with it </p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/chatbot4.png " style="width: 100%; height: 100%" />
        
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide USSD<br />Through Dialing <strong>*380*3600# </strong> Farmer <br> will get benefit information like crop price,<br> weather notification and Agriculture advice</p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/for ussd.webp" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>SMART SHAMBA</h1>
          <p>Provide Market<br />Where by Farmer will post his or her crops <br> inorder the buyer can see it <br> and buy without need of brokers</p>
          <ul>
            <li class="navbar__btn">
              <a href="login-reg.php" class="button2">Register</a>
            </li>
            </ul>
        </div>
        <img class="Aru" src="../images/soko.jpg" style="width: 100%; height: 100%" />
      </div>
      <!-- /fade css -->

      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dotsbox" style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      <!-- /onclick js -->
    </div>


    </div>


































    <!-- <main class="wallpaper">
        <div class="socials">
            <a href=""><img src="../images/facebook.svg"></a>
            <a href=""><img src="../images/linkedin.svg"></a>
            <a href=""><img src="../images/twitter.svg"></a>
            <a href=""><img src="../images/whatsapp.svg"></a>

        </div>
        <header>

            <div class="navbar">
                <div class="logo">
                    <h1 class="t1"><a href "#" class="home">SMART SHAMBA</a></h1>
                </div>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="register.php">Registration</a></li>
                    <li><a href="market2.php">Market</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="about.php">About</a></li>

                </ul>
            </div>
        </header>
        <div class="homewelcome">
            <div class="welcoming">
                <h1>SMART SHAMBA</h1>
                <p id="motto">Your order is our first priority</p>

                <div class="btns">
                    <a href="login.php" class="btn1">Log In</a>
                    <a href="about.php" class="btn1">Learn more</a>
                </div>
            </div>
        </div>


    </main> -->

    <!---- Here the main is concerned with the bg only and div=wall will continue--->

    <div class="whyus">
        <div class="whyusimage">
            <img src="../images/parallax4.avif" class="parallax1">
        </div>

        <div class="whyusexplanation">
            <p>Learn about us</p>
            <h2>Tanzania's AgroBusiness Website</h2>
            <div class="whyus_summary">
                <ul>
                    <li><a class="active1" onclick="show_hide1()" onmouseover="hover_ul(this)" onmouseout="hover_ul(this)">About</a></li>
                    <li><a class="active2" onclick="show_hide2()" onmouseover="hover_ul(this)" onmouseout="hover_ul(this)">Mission</a></li>
                    <li><a class="active3" onclick="show_hide3()" onmouseover="hover_ul(this)" onmouseout="hover_ul(this)">Vision</a></li>
                </ul>


                <div class="content">
                    <div id="tab1">
                        <p>
                            Smart Shamba is an AgroBusiness system which brings farmers and customer from different countryside together so as they could conduct business in a smart and very meaningful way so as both of them could benefit easily.   
                        
                        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pellentesque turpis. Donec in hendrerit dui, vel blandit massa. Ut vestibulum suscipit cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit
                            luctus dictum. Phasellus et felis sed purus tristique dignissim. Morbi sit amet leo at purus accumsan pellentesque. Vivamus fermentum nisi vel dapibus blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                             -->
                        </p> 
                    </div>
                    <div id="tab2">

                        Our mission is to majorily help and equip farmers with some necessary knowledge and equipments so as they could be able to strive in Agricultural sector in Tanzania and by building a very wide picture, by helping diferent farmers in Tanzania we also help Tanzania as a whole because it is known that Agriculture is the backbone of economic sector in Tanzania. 

                        <!-- Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum
                        et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. -->
                    </div>
                    <div id="tab3">

                    We intend to improve Tanzania's Economy by only dealing with Agriculture and our vision is to increase Tanzania's economic to 70% and making Tanzania a leading East African country with massive improvement in Agricultural sector


                        <!-- Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci.
                        Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whatwedo">
        <p>What we do</p>
        <h2>We believe that we can help more famers</h2>

        <div class="arragement">
            <div class="block pests">
                <img src="../images/pest.svg" class="a2">
                <p>

                    There is a wide variety of pests and diseases that farmers are unaware of, so Smart Shamba is here for you to provide you farmer with important and  knowledge and awareness of combating these different pests and diseases.

                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis delectus veritatis, optio sunt animi molestias et neque dignissimos cumque velit. -->

                </p>
            </div>

            <div class="block cash">
                <img src="../images/cash.svg" class="a2">
                <p>

                    We are not only based with farmers bu as customers, Smart Shamba will provide you farmers suitable markets for them to sell thei agricultural products. 

                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo neque, maiores architecto illo molestiae aspernatur eos sunt quam facere distinctio. -->
                </p>
            </div>

            <div class="block robot">
                <img src="../images/robot.svg" class="a2">
                <p>In Smart Shamba, there is a chatbot which will talk, understand and answer different questions that the farmer has to offer and these question must majorily deals with matters concerning Agriculture.

                    <!-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi pariatur est odio commodi. Natus mollitia soluta dolorum commodi error. Molestiae! -->
                </p>
            </div>

            <div class="block hali">
                <img src="../images/cloud.svg" class="a2">
                <p>
                    In here, Farmers will be given necessary information on matter relating weaher condition so as farmers could know what kind of crops should be grown in that particular season of the year.


                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit tempora exercitationem optio tenetur, ipsam explicabo id nam impedit consectetur architecto. -->
                </p>
            </div>

        </div>
    </div>


    <div class="meetheading">
        <p>Our Blog</p>
        <h2>Latest news & articles directly from our blog</h2>
    </div>

    <div class="meet">

        <div class="rain">
            <img src="../images/rain.jpg" alt="">
            <h2>Heavy rainfall in Shinyanga.</h2>
            <p>
            There is an upcoming rainfall in shinyaga so people who are present there either farmer or a normal citizen should be aware of this generous opportunity to grow crops which highly depend on heavy rainfall, and this rainfall will continue for a period of 3 month!!!.
            <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas eligendi, accusamus sit suscipit asperiores voluptate incidunt debitis ea aspernatur repellat atque officia pariatur odio placeat possimus doloribus blanditiis libero quo odit                 -->
            </p>
        </div>

        <div class="kariakoo">
            <img src="../images/kariakoo.jpg" alt="">
            <h2>RICE IS IN HIGH DEMAND!!.</h2>
            <p>
            Biggest selling market of dar (Kariakoo) stated that rice is on a very high demand and farmer from different countryside who ae able to exploit such kind of opportunity should be able to adapt with the environment and take over the market in kariakoo.
            <!-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam neque eligendi illum consequatur ipsum sapiente velit sint temporibus voluptates nisi ut, eaque adipisci doloremque minus? Dignissimos deleniti ab aspernatur magni? -->
        
        </p>
        </div>

        <div class="insects">
            <img src="../images/insects.jpg" alt="">
            <h2>Have you heard of "DUNGAMAWE" ?.</h2>
            <p>
                DUNGAMAWE is a dangerous pests that majorily target maize, and these pests are majorily located in coastal areas, so farmers located in those area are strongly advised to be awaare to such ind of pests and its advised to call a professional pests control immediately when you encounter it.

                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt in distinctio ab velit consequuntur totam dignissimos blanditiis hic, mollitia inventore aut similique neque pariatur libero iusto aliquid facere dolor eum? -->
            </p>
        </div>
    </div>

    <footer>
        <div class="last">
            <div class="location">
            <h3>Location</h3>
                <p>Dar es salaam, Tanzania</p>
                <p>+255 689 737 839</p>
                <p>info@smartshambatz.com</p>
            </div>
            <div class="link">
                <h3>Popular Links</h3>
                <p>About us</p>
                <p>Contact us</p>
                <p>Latest blog</p>
            </div>
            <div class="useful">
                <h3>Useful Links</h3>
                <p>Term of use</p>
                <p>Privacy policy</p>
                <p>Cookies</p>
                <p>Help</p>
                <p>FQAs</p>
            </div>
            <div class="search">
                <h3>Search for something</h3>
                <input class="footersearch" type="text" placeholder="search">
                <button id="b3">search</button>
            </div>
        </div>
        <div class="linearrangement">
            <hr id="line">
            <p class="l1">Copyright © Smart Shamba 2023. All Rights Reserved</p>
        </div>


    </footer>
    <a id="arrowup" href="#">
        <img id="up" src="../images/arrowup.svg">
    </a>
    <script src="../JavaScript/jsfile.js"></script>
    <script src="../JavaScript/Homepage.js"></script>

</body>

</html>