function onTabClick(event) {
  let activeTabs = document.querySelectorAll(".active");

  activeTabs.forEach(function (tab) {
    tab.className = tab.className.replace("active", "");
  });

  // activate new tab and panel
  event.target.parentElement.className += " active";
  document.getElementById(event.target.href.split("#")[1]).className +=
    " active";
}

const element = document.getElementById("nav-tab");

element.addEventListener("click", onTabClick, false);

/////////// Login //////////////////

const modal = document.querySelector(".modal");
const loginBtn = document.querySelector("#login-btn");
const closeBtn = document.querySelector(".close");

loginBtn.addEventListener("click", openModal);
closeBtn.addEventListener("click", closeModal);
window.addEventListener("click", outsideClick);

function openModal() {
  modal.style.display = "block";
}

function closeModal() {
  modal.style.display = "none";
}

function outsideClick(e) {
  if (e.target == modal) {
    closeModal();
  }
}

///////// sliders ////////

var i = 0;
var images = [
  "https://cdn.pixabay.com/photo/2017/01/20/00/30/maldives-1993704_960_720.jpg",
  "https://cdn.pixabay.com/photo/2016/03/04/19/36/beach-1236581_960_720.jpg",
  "https://cdn.pixabay.com/photo/2017/01/08/19/30/rio-de-janeiro-1963744_960_720.jpg",
  " https://cdn.pixabay.com/photo/2017/06/17/18/35/background-2413081_960_720.jpg",
  "https://cdn.pixabay.com/photo/2018/08/16/08/39/hallstatt-3609863_960_720.jpg",
  "https://cdn.pixabay.com/photo/2015/06/08/15/07/beach-801875_960_720.jpg",
];

next = document
  .querySelector("#arrow-left")
  .addEventListener("click", function () {
    mySlide("next");
  });
prev = document
  .querySelector("#arrow-right")
  .addEventListener("click", function () {
    mySlide("prev");
  });

function mySlide(slide) {
  if (slide === "next") {
    i++;
    if (i > images.length - 1) {
      i = 0;
    }
  } else {
    i--;
    if (i < 0) {
      i = images.length - 1;
    }
  }
  function startTimer() {
    setInterval(mySlide(), 4000);
  }

  document.querySelector(".hero").style.backgroundImage = `url("${images[i]}")`;
  console.log(images[i]);
}

////// end ////
