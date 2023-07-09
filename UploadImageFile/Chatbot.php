<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHAMBA BOT</title>
    <!-- <link rel="stylesheet" href="../Css/chatbot.css"> -->
  
    <style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  width: 100%;
  height: 100vh;
  overflow: hidden; 
  background: #22222A;
  font-family: 'Fira Mono', monospace;
  -webkit-font-smoothing: antialiased;
  font-size: .88rem;
  color: #bdbdd5;
}

.content-width {
  width: 86%;
  height: 100vh;
  margin: 0 auto;
}

.slideshow {
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.slideshow-items {
  position: relative;
  width: 100%;
  height: 300px;
}

.item {
  position: absolute;
  width: 100%;
  height: auto;
}

.item-image-container {
  position: relative;
  width: 42%;
}

.item-image-container::before {
  content: '';
  position: absolute;
  top: -1px;
  left: 0;
  width: 101%;
  height: 101%;
  background: #22222A;
  opacity: 0;
  z-index: 1;
}

.item-image {
  position: relative;
  width: 100%;
  height: auto;
  opacity: 0;
  display: block;
  /* transition: property name | duration | timing-function | delay  */
  transition: opacity .3s ease-out .45s;
}

.item.active .item-image {
  opacity: 1;
}

.item.active .item-image-container::before {
  opacity: .8;
}

.item-description {
  position: absolute;
  top: 182px;
  right: 0;
  width: 50%;
  padding-right: 4%;
  line-height: 1.8;
}

/* Staggered Vertical Items ------------------------------------------------------*/
.item-header {
  position: absolute;
  top: 150px;
  left: -1.8%;
  z-index: 100;
}

.item-header .vertical-part {
  margin: 0 -4px;
  font-family: 'Montserrat', sans-serif;
  -webkit-font-smoothing: auto;
  font-size: 7vw;
  color: #fff;
}

.vertical-part {
  overflow: hidden;
  display: inline-block;
}

.vertical-part b {
  display: inline-block;
  transform: translateY(100%);
}

.item-header .vertical-part b {
  transition: .5s;
}

.item-description .vertical-part b {
  transition: .21s;
}

.item.active .item-header .vertical-part b {
  transform: translateY(0);
}

.item.active .item-description .vertical-part b {
  transform: translateY(0);
}

/* Controls ----------------------------------------------------------------------*/
.controls {
  position: relative;
  text-align: right;
  z-index: 1000;
}

.controls ul {
  list-style: none;
}

.controls ul li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 3px;
  background:#bdbdd5;;
  cursor: pointer;
}

.controls ul li.active {
  background:#6a6a77;;
}

</style>
    
</head>



<body>


<div class="content-width">
  <div class="slideshow">
    <!-- Slideshow Items -->
    <div class="slideshow-items">
      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="img/Chatbot.png" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part"><b>T</b></span>
          <span class="vertical-part"><b>u</b></span>
          <span class="vertical-part"><b>o</b></span>
          <span class="vertical-part"><b>n</b></span>
          <span class="vertical-part"><b>g</b></span>
          <span class="vertical-part"><b>e</b></span>
          <span class="vertical-part"><b>e</b></span>
          <span class="vertical-part"><b>!</b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class="item-description">
          <span class="vertical-part">
            <b>SHAMBA BOT</b>
          </span>
          <span class="vertical-part">
            <b>Helps</b>
          </span> 
          <span class="vertical-part">
            <b>you</b>
          </span>
          <span class="vertical-part">
            <b>to</b>
          </span> 
          <span class="vertical-part">
            <b>get</b>
          </span>
          <span class="vertical-part">
            <b>info</b>
          </span> 
          <span class="vertical-part">
            <b>through</b>
          </span>
          <span class="vertical-part">
            <b>talking</b>
          </span> 
          <span class="vertical-part">
            <b>to</b>
          </span>
          <span class="vertical-part">
            <b>the</b>
          </span> 
          <span class="vertical-part">
            <b>bot</b>
          </span>
        </div>
      </div>
      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="img/Chatbot.png" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part"><b>S</b></span>
          <span class="vertical-part"><b>h</b></span>
          <span class="vertical-part"><b>a</b></span>
          <span class="vertical-part"><b>m</b></span>
          <span class="vertical-part"><b>b</b></span>
          <span class="vertical-part"><b>a</b></span>
          <span class="vertical-part"><b> </b></span>
          <span class="vertical-part"><b>B</b></span>
          <span class="vertical-part"><b>o</b></span>
          <span class="vertical-part"><b>t</b></span>
        </div>
        <!-- Staggered Description Elements -->
        <div class="item-description">
          <span class="vertical-part">
            <b>SHAMBA BOT</b>
          </span>
          <span class="vertical-part">
            <b>This</b>
          </span>
          <span class="vertical-part">
            <b>is</b>
          </span>
          <span class="vertical-part">
            <b>Bot</b>
          </span>
          <span class="vertical-part">
            <b>which</b>
          </span>
          <span class="vertical-part">
            <b>help farmer</b>
          </span>
          <span class="vertical-part">
            <b>to know</b>
          </span>
          <span class="vertical-part">
            <b>about Pest and Diseases.</b>
          </span>
          <span class="vertical-part">
            <b>Also</b>
          </span>
          <span class="vertical-part">
            <b>enable</b>
          </span>
          <span class="vertical-part">
            <b>him/her</b>
          </span>
          <span class="vertical-part">
            <b>to </b>
          </span>
          <span class="vertical-part">
            <b>get</b>
          </span>
          <span class="vertical-part">
            <b>advice</b>
          </span>
          <span class="vertical-part">
            <b>on how </b>
          </span>
          <span class="vertical-part">
            <b>to</b>
          </span>
          <span class="vertical-part">
            <b>control them</b>
          </span>
        </div>
      </div>
      <div class="item">
        <div class="item-image-container">
          <img class="item-image" src="img/Chatbot.png" />
        </div>
        <!-- Staggered Header Elements -->
        <div class="item-header">
          <span class="vertical-part"><b>L</b></span>
          <span class="vertical-part"><b>e</b></span>
          <span class="vertical-part"><b>t</b></span>
          <span class="vertical-part"><b>s</b></span>
          <span class="vertical-part"><b>C</b></span>
          <span class="vertical-part"><b>h</b></span>
          <span class="vertical-part"><b>a</b></span>
          <span class="vertical-part"><b>t</b></span>

        </div>
        <!-- Staggered Description Elements -->


        
        <div class="item-description">
          <span class="vertical-part">
            <b>Chat</b>
          </span>
          <span class="vertical-part">
            <b>with</b>
          </span>
          <span class="vertical-part">
            <b>SHAMBA BOT</b>
          </span>
          <span class="vertical-part">
            <b>to</b>
          </span>
          <span class="vertical-part">
            <b>know </b>
          </span>
          <span class="vertical-part">
            <b>about</b>
          </span>
          <span class="vertical-part">
            <b>pest</b>
          </span>
          <span class="vertical-part">
            <b>diseases</b>
          </span>
          <span class="vertical-part">
            <b>on</b>
          </span>
          <span class="vertical-part">
            <b>Agricultural</b>
          </span>
          <span class="vertical-part">
            <b>issues</b>
          </span>
        </div>
      </div>
    </div>
    <div class="controls">
      <ul>
        <li class="control" data-index="0"></li>
        <li class="control" data-index="1"></li>
        <li class="control" data-index="2"></li>
      </ul>
    </div>
  </div>
</div>


<script defer async>
  document.addEventListener('DOMContentLoaded', function() {
    // setting global variables
    window.botId = 1613
    
    // create div with id = sarufi-chatbox
    const div = document.createElement("div")
    div.id = "sarufi-chatbox"
    document.body.appendChild(div)

    // create and attach script tag
    const script = document.createElement("script")
    script.crossOrigin = true
    script.type = "module"
    script.src = "https://cdn.jsdelivr.net/gh/flexcodelabs/sarufi-chatbox/example/vanilla-js/script.js"
    document.head.appendChild(script)

    // create and attach css
    const style = document.createElement("link")
    style.crossOrigin = true
    style.rel = "stylesheet"
    style.href = "https://cdn.jsdelivr.net/gh/flexcodelabs/sarufi-chatbox/example/vanilla-js/style.css"
    document.head.appendChild(style)
  });
</script>
<script>
// Master DOManipulator v2 ------------------------------------------------------------
const items = document.querySelectorAll('.item'),
  controls = document.querySelectorAll('.control'),
  headerItems = document.querySelectorAll('.item-header'),
  descriptionItems = document.querySelectorAll('.item-description'),
  activeDelay = .76,
  interval = 5000;

let current = 0;

const slider = {
  init: () => {
    controls.forEach(control => control.addEventListener('click', (e) => { slider.clickedControl(e) }));
    controls[current].classList.add('active');
    items[current].classList.add('active');
  },
  nextSlide: () => { // Increment current slide and add active class
    slider.reset();
    if (current === items.length - 1) current = -1; // Check if current slide is last in array
    current++;
    controls[current].classList.add('active');
    items[current].classList.add('active');
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
  },
  clickedControl: (e) => { // Add active class to clicked control and corresponding slide
    slider.reset();
    clearInterval(intervalF);

    const control = e.target,
      dataIndex = Number(control.dataset.index);

    control.classList.add('active');
    items.forEach((item, index) => { 
      if (index === dataIndex) { // Add active class to corresponding slide
        item.classList.add('active');
      }
    })
    current = dataIndex; // Update current slide
    slider.transitionDelay(headerItems);
    slider.transitionDelay(descriptionItems);
    intervalF = setInterval(slider.nextSlide, interval); // Fire that bad boi back up
  },
  reset: () => { // Remove active classes
    items.forEach(item => item.classList.remove('active'));
    controls.forEach(control => control.classList.remove('active'));
  },
  transitionDelay: (items) => { // Set incrementing css transition-delay for .item-header & .item-description, .vertical-part, b elements
    let seconds;
    
    items.forEach(item => {
      const children = item.childNodes; // .vertical-part(s)
      let count = 1,
        delay;
      
      item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

      children.forEach(child => { // iterate through .vertical-part(s) and style b element
        if (child.classList) {
          item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
          child.firstElementChild.style.transitionDelay = `${delay}s`; // b element
          count++;
        }
      })
    })
  },
}

let intervalF = setInterval(slider.nextSlide, interval);
slider.init();
</script>
</body>
</html>