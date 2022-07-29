const navbar = document.querySelector('#navbar');
window.onscroll = function () {
  const fixedNav = navbar.offsetTop;

  if (window.pageYOffset > fixedNav) {
    navbar.classList.add('navbar-fixed');
    navbar.classList.remove('overflow-hidden');
  } else {
    navbar.classList.remove('navbar-fixed');
    navbar.classList.add('overflow-hidden');
  }
}

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const bgMenu = document.querySelector('#bg-menu');

hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('hamburger-active');
  navbar.classList.remove('overflow-hidden');
  navMenu.classList.toggle('menu-open');
  navMenu.classList.toggle('menu-close');
  // navMenu.classList.toggle('menu-bg-opacity');
  // console.log(navMenu.classList);
  navMenu.classList.forEach(menulist => {
    // console.log(menulist);
    if (menulist == 'menu-close') {
      setTimeout(() => {
        navbar.classList.add('overflow-hidden');
      }, 400);
    }
  });
})

let subMenuS = document.querySelectorAll('#sub-menu');
// subMenuS.forEach(subMenu => {
//   subMenu.addEventListener("click", (even) => {
//     let subMenuUl = subMenu.nextElementSibling;
//     let icon = subMenuUl.parentElement.querySelector('#sub-menu-icon')
//     if (icon.innerHTML === '+') {
//       icon.innerHTML = '-'
//     } else {
//       icon.innerHTML = '+'
//     }
//     subMenuUl.classList.toggle('absolute')
//     subMenuUl.classList.toggle('-top-15')
//     subMenuUl.classList.toggle('-top-44')
//     subMenuUl.classList.toggle('-z-10')
//     // subMenuUl.classList.toggle('top-8')
//     // subMenuUl.classList.toggle('-z-0')
//     // subMenuUl.classList.toggle('md:-left-5')
//   });
// });

function subMenuOpen(even) {
  // 1 = untuk tengah, 2 = utuk text / +
  subMenuClose()
  // console.log('list2', even.path[2].nextElementSibling);
  if (even.path[2].nextElementSibling === null) {
    var subMenuUl1 = even.path[1].nextElementSibling;
    if (even.target.querySelector('#sub-menu-icon').innerHTML === '+') {
      even.target.querySelector('#sub-menu-icon').innerHTML = '-'
    }
    subMenuToggle(subMenuUl1);
  } else if (even.path[2].nextElementSibling.id == "list-subMenu") {
    var subMenuUl2 = even.path[2].nextElementSibling;
    if (even.target.nextElementSibling == null) {
      if (even.target.innerHTML === '+') {
        even.target.innerHTML = '-'
      }
    } else {
      if (even.target.nextElementSibling.innerHTML === '+') {
        even.target.nextElementSibling.innerHTML = '-'
      }
    }
    subMenuToggle(subMenuUl2);
  } else if (even.path[1].nextElementSibling.id == "list-subMenu") {
    var subMenuUl1 = even.path[1].nextElementSibling;
    if (even.target.querySelector('#sub-menu-icon').innerHTML === '+') {
      even.target.querySelector('#sub-menu-icon').innerHTML = '-'
    }
    subMenuToggle(subMenuUl1);
  } else {
    console.log('else');
  }
}

function subMenuClose() {
  subMenuS.forEach(subMenu => {
    let subMenuUl = subMenu.nextElementSibling;
    let icon = subMenuUl.parentElement.querySelector('#sub-menu-icon')
    if (icon.innerHTML === '-') {
      icon.innerHTML = '+'
    }
    subMenuUl.classList.add('absolute')
    subMenuUl.classList.remove('-top-15')
    subMenuUl.classList.add('-top-44')
    subMenuUl.classList.add('-z-10')
  });
}

function subMenuToggle(sub) {
  sub.classList.toggle('absolute')
  sub.classList.toggle('-top-15')
  sub.classList.toggle('-top-44')
  sub.classList.toggle('-z-10')
}

let kliks = document.querySelectorAll('#klik');
window.addEventListener("click", function(event) {
  if (event.target.id == "klik") {
    subMenuOpen(event)
  } else if (event.target.innerHTML == '-' || event.target.innerHTML == '+'){
    subMenuOpen(event)
  } else {
    subMenuClose()
  }
});

// <<======= Link Active ==========>>
let item = document.querySelectorAll('#menu');
item.forEach(link => {
  // console.log(link.querySelector('span').innerHTML.toUpperCase());
  if (link.querySelector('span').innerHTML.toUpperCase() === link.getAttribute('data-menu')) {
    subMenuS.forEach(subMenu => {
      let subMenuList = subMenu.nextElementSibling.querySelectorAll('li');
      subMenuList.forEach(sub => {
        // console.log(sub.querySelector('a').firstElementChild);
        // console.log(sub.getAttribute('menu-sub'));
        if (sub.querySelector('a').innerText.toUpperCase() === sub.getAttribute('menu-sub')) {
          sub.classList.remove('text-white');
          sub.classList.remove('lg:text-black');
          sub.classList.add('bg-black');
          if (sub.querySelector('a').firstElementChild) {
            sub.querySelector('a').firstElementChild.classList.add('menu-warna-img');
          }
        }
      });
    });
    link.classList.toggle('menu-active-web');
    link.classList.toggle('lg:border-y-0');
  }
});
// <<======= Link Active Akhir ==========>>
