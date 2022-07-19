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
let item = document.querySelectorAll('#menu');
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
    var subMenuUl1 = even.path[1].nextElementSibling
    // console.log('list1', even.path[1].nextElementSibling);
    subMenuUl1.classList.toggle('absolute')
    subMenuUl1.classList.toggle('-top-15')
    subMenuUl1.classList.toggle('-top-44')
    subMenuUl1.classList.toggle('-z-10')
  } else if (even.path[2].nextElementSibling.id == "list-subMenu") {
    var subMenuUl2 = even.path[2].nextElementSibling
    // console.log('list2', subMenuUl2.classList);
    subMenuUl2.classList.toggle('absolute')
    subMenuUl2.classList.toggle('-top-15')
    subMenuUl2.classList.toggle('-top-44')
    subMenuUl2.classList.toggle('-z-10')
  } else if (even.path[1].nextElementSibling.id == "list-subMenu") {
    var subMenuUl1 = even.path[1].nextElementSibling
    // console.log('list1', even.path[1].nextElementSibling);
    subMenuUl1.classList.toggle('absolute')
    subMenuUl1.classList.toggle('-top-15')
    subMenuUl1.classList.toggle('-top-44')
    subMenuUl1.classList.toggle('-z-10')
  } else {
    console.log('else');
  }
  // let subMenuS = document.querySelectorAll('#sub-menu');
  // subMenuS.forEach(subMenu => {
  //   // console.log(subMenu.nextElementSibling);
  //   let subMenuUl = subMenu.nextElementSibling;
  //   let icon = subMenuUl.parentElement.querySelector('#sub-menu-icon')
  //   // if (icon.innerHTML === '+') {
  //   //   icon.innerHTML = '-'
  //   // } else {
  //   //   icon.innerHTML = '+'
  //   // }
  //   subMenuUl.classList.toggle('absolute')
  //   subMenuUl.classList.toggle('-top-15')
  //   subMenuUl.classList.toggle('-top-44')
  //   subMenuUl.classList.toggle('-z-10')
  // });
}

function subMenuClose() {
  // let subMenuS = document.querySelectorAll('#sub-menu');
  subMenuS.forEach(subMenu => {
    // console.log(subMenu.nextElementSibling);
    let subMenuUl = subMenu.nextElementSibling;
    let icon = subMenuUl.parentElement.querySelector('#sub-menu-icon')
    // if (icon.innerHTML === '+') {
    //   icon.innerHTML = '-'
    // } else {
    //   icon.innerHTML = '+'
    // }
    subMenuUl.classList.add('absolute')
    subMenuUl.classList.remove('-top-15')
    subMenuUl.classList.add('-top-44')
    subMenuUl.classList.add('-z-10')
  });
}

let kliks = document.querySelectorAll('#klik');
window.addEventListener("click", function(event) {
  if (event.target.id == "klik") {
    // console.log('open1', event.target);
    subMenuOpen(event)
  } else if (event.target.innerHTML == '-' || event.target.innerHTML == '+'){
    // console.log('open2', event.target);
    subMenuOpen(event)
  } else {
    // console.log('close');
    subMenuClose()
  }
  // kliks.forEach(klik => {
  //   if (event.target == klik) {
  //     console.log('open1', event.target);
  //   } 
  //   // else if (event.target.innerHTML == '-' || event.target.innerHTML == '+'){
      
  //   //   console.log('open2', event.target);
  //   // }
      
  //   // else {
  //   //   console.log('else',kliks);
  //   // }
  // });
});

// <<======= Link Active ==========>>
item.forEach(link => {
  // console.log(link.querySelector('span').innerHTML.toUpperCase());
  if (link.querySelector('span').innerHTML.toUpperCase() === link.getAttribute('data-menu')) {
    
    let subMenuList = subMenu.nextElementSibling.querySelectorAll('li');
    subMenuList.forEach(sub => {
      if (sub.querySelector('a').innerHTML.toUpperCase() === sub.getAttribute('menu-sub')) {
        sub.querySelector('a').classList.remove('text-white');
      }
    });
    // if (subMenu) {
    // }
    link.classList.toggle('menu-active');
    link.classList.toggle('md:border-y-0');
  }
});
// <<======= Link Active Akhir ==========>>
