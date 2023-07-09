// Sticky Navbar
window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

// To Top
var toTop = document.querySelector("#arrowup");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 70) {
        toTop.classList.add("activeup");
    } else {
        toTop.classList.remove("activeup");
    }
})

// Parallax Movement
window.addEventListener('scroll', function() {
    var parallax1 = document.querySelector('.parallax1');
    let scrollPosition = window.pageYOffset;

    parallax1.style.transform = 'translateY(' + scrollPosition * -.3 + 'px)';
});

// whyus_summary ul li
var content1 = document.querySelector('.active1');
var content2 = document.querySelector('.active2');
var content3 = document.querySelector('.active3');


function show_hide1() {
    document.getElementById("tab1").style.display = "block";
    content1.setAttribute("style", " cursor: pointer; color: orange; padding-bottom: 10px; border-bottom: 3px solid orange;");
    content2.setAttribute("style", "color:black; border:none;");
    content3.setAttribute("style", "color:black; border:none;");

    document.getElementById("tab2").style.display = "none";
    document.getElementById("tab3").style.display = "none";
}
// 
function hover_ul(content1) {
    if (content1.style.color == 'orange') {
        content1.style.color == 'black';
    } else {
        content1.style.color == 'orange';
    }
}


// 
// content2.onmousemove = () => {
//         content2.classList.add("hover1");
//     }
// content2.onmousemove = () => {
//     content2.classList.remove("hover1");
// }

// content3.onmousemove = () => {
//         content3.classList.add("hover1");
// }
// content3.addEventListener('mouseleave', () => {
//     content3.classList.remove("hover1");
// })

function show_hide2() {
    document.getElementById("tab2").style.display = "block";
    document.getElementById("tab2").style.paddingTop = "10px";
    content2.setAttribute("style", " cursor: pointer; color: orange; padding-bottom: 10px; border-bottom: 3px solid orange;");
    content1.setAttribute("style", "color:black; border:none;");
    content3.setAttribute("style", "color:black; border:none;");

    document.getElementById("tab1").style.display = "none";
    document.getElementById("tab3").style.display = "none";
}
// 


// 
// content1.onmousemove = () => {
//         content1.classList.add("hover1");
//     }
// content1.addEventListener('mouseleave', () => {
//     content1.classList.remove("hover1");
// })

// content3.onmousemove = () => {
//         content3.classList.add("hover1");
//     }
// content3.addEventListener('mouseleave', () => {
//     content3.classList.remove("hover1");
// })

function show_hide3() {
    document.getElementById("tab3").style.display = "block";
    document.getElementById("tab3").style.paddingTop = "10px";
    content3.setAttribute("style", " cursor: pointer; color: orange; padding-bottom: 10px; border-bottom: 3px solid orange;");

    content1.setAttribute("style", "color:black; border:none;");
    content2.setAttribute("style", "color:black; border:none;");

    document.getElementById("tab1").style.display = "none";
    document.getElementById("tab2").style.display = "none";
}
// 




// 
// content1.onmousemove = () => {
//         content1.classList.add("hover1");
//     }
// content1.addEventListener('mouseleave', () => {
//     content1.classList.remove("hover1");
// })

// content2.onmousemove = () => {
//         content2.classList.add("hover1");
//     }
// content2.addEventListener('mouseleave', () => {
//     content2.classList.remove("hover1");
// })

// content2.addEventListener('click', () => {
//     document.getElementById("tab1").style.display = "none";
//     document.getElementsByClassName(".active").style.color = "black";
//     document.getElementsByClassName(".active").style.border = "none";


//     document.getElementById("tab2").style.display = "block";
//     document.getElementById("tab2").style.paddingTop = "10px";
//     content2.setAttribute("style", " cursor: pointer; color: orange; padding-bottom: 10px; border-bottom: 3px solid orange;");

//     document.getElementById("tab3").style.display = "none";
// })

// content3.addEventListener('click', () => {
//     document.getElementById("tab1").style.display = "none";
//     document.getElementById("tab2").style.display = "none";

//     document.getElementById("tab3").style.paddingTop = "10px";
//     document.getElementById("tab3").style.display = "block";

// })