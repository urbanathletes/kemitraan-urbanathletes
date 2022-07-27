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
subMenuS.forEach(subMenu => {
  subMenu.addEventListener("click", (even) => {
    let subMenuUl = subMenu.nextElementSibling;
    let icon = subMenuUl.parentElement.querySelector('#sub-menu-icon')
    if (icon.innerHTML === '+') {
      icon.innerHTML = '-'
    } else {
      icon.innerHTML = '+'
    }
    subMenuUl.classList.toggle('absolute')
    subMenuUl.classList.toggle('-top-15')
    subMenuUl.classList.toggle('-top-44')
    subMenuUl.classList.toggle('-z-10')
    // subMenuUl.classList.toggle('top-8')
    // subMenuUl.classList.toggle('-z-0')
    // subMenuUl.classList.toggle('md:-left-5')
  });
});
// window.addEventListener("click", function(event) {
//   console.log(event.target);
// });

// <<======= Link Active ==========>>
item.forEach(link => {
  // console.log(link.querySelector('span').innerHTML.toUpperCase());
  if (link.querySelector('span').innerHTML.toUpperCase() === link.getAttribute('data-menu')) {
    subMenuS.forEach(subMenu => {
      let subMenuList = subMenu.nextElementSibling.querySelectorAll('li');
      subMenuList.forEach(sub => {
        if (sub.querySelector('a').innerHTML.toUpperCase() === sub.getAttribute('menu-sub')) {
          sub.querySelector('a').classList.remove('text-white');
        }
      });
    });
    // if (subMenu) {
    // }
    link.classList.toggle('menu-active');
    link.classList.toggle('md:border-y-0');
  }
});
// <<======= Link Active Akhir ==========>>
