document.addEventListener("DOMContentLoaded", function () {

var acc = document.getElementsByClassName("toggle-icon");
var bruger_menu = document.getElementById("burger-menu");
var cross_icon = document.getElementById("cross-icon");
var menu_link = document.getElementsByClassName("menu-link");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdown_content = document.getElementsByClassName("dropdown-content")[0];
    if (dropdown_content.style.display === "block") {
      dropdown_content.style.display = "none";
      bruger_menu.style.display = "block";
      cross_icon.style.display = "none";
    } else {
      dropdown_content.style.display = "block";
      cross_icon.style.display = "block";
      bruger_menu.style.display = "none";
    }
  });
}


var acc_lebensphase = document.getElementsByClassName("toggle-icon-lebensphase");
var bruger_menu_lebensphase = document.getElementById("burger-menu-lebensphase");
var cross_icon_lebensphase = document.getElementById("cross-icon-lebensphase");
for (i = 0; i < acc_lebensphase.length; i++) {
  acc_lebensphase[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdown_content_lebensphase = document.getElementsByClassName("dropdown-content")[1];
    if (dropdown_content_lebensphase.style.display === "block") {
      dropdown_content_lebensphase.style.display = "none";
    } else {
      dropdown_content_lebensphase.style.display = "block";
    }
  });
}
// karriere dropdown
var acc_karriere = document.getElementsByClassName("toggle-icon-karriere");
var bruger_menu_karriere = document.getElementById("burger-menu-karriere");
var cross_icon_karriere = document.getElementById("cross-icon-karriere");
for (i = 0; i < acc_karriere.length; i++) {
  acc_karriere[i].addEventListener("click", function () {
    this.classList.toggle("active");

    var dropdown_content_karriere = document.querySelector(".dropdown-content-karriere");
    console.log(dropdown_content_karriere.style.display)
    if (dropdown_content_karriere.style.display === "block") {
      dropdown_content_karriere.style.display = "none";
    } else {
      dropdown_content_karriere.style.display = "block";
    }
  });
}
// show dropdown


/*get the page information*/
let url = window.location.href;
let pathname = window.location.pathname;
var page_name = url.substr(url.lastIndexOf("/") + 1); //current page 
let main_page = pathname.split("/")[1];                 // main-page if it has sub-pages
let nav_item = document.getElementById(main_page);
/*console.log("main_page_mob:", main_page);*/


if (menu_link[0] !== null && (main_page === "" || main_page === "index.php")) {
  /*console.log("I came here!");*/
  document.getElementById("home_page").style.color = "#dda005";

} else if (nav_item != null) {
  nav_item.style.color = "#dda005";
}

let menu_item = document.getElementById(page_name);
if (menu_item !== null) {
  menu_item.style.color = "#dda005";
}



  // make it as accordion for smaller screens
  if (window.innerWidth > 992) {

    document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

      everyitem.addEventListener('mouseover', function (e) {

        let el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.add('show');
          nextEl.classList.add('show');
        }

      });
      everyitem.addEventListener('mouseleave', function (e) {
        let el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.remove('show');
          nextEl.classList.remove('show');
        }


      })
    });

  }
  // end if innerWidth

// scroll opacity menu bar
document.addEventListener('scroll', (event) => {
  if (window.scrollY > 50) {
    document.getElementById("menu-background").style.opacity = "0.8"
  }
  else {
    document.getElementById("menu-background").style.opacity = "0"

  }
});


document.querySelectorAll(".dropdown-toggle").forEach(ele=>{
  ele.addEventListener("click",function(event){
  location.href=event.target.href
})
})








})