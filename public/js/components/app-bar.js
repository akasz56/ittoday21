let hamburger = document.getElementById('hamburger-btn');
hamburger.onclick = () => {
    (hamburger.classList.contains('is-active')) ? hamburger.classList.remove('is-active'): hamburger.classList.add('is-active');
}

// hide navbar when scroll
// let prevScrollPos = window.pageYOffset;
// window.onscroll = () => {
//     let appBar = document.getElementById('collNavbar'),
//         currentScrollPos = window.pageYOffset,
//         mobileAppBarVer = document.getElementById('hamburger-btn').getAttribute('aria-expanded');

//     (prevScrollPos > currentScrollPos || mobileAppBarVer == 'true') ? appBar.style.top = "0": appBar.style.top = '-65px';
//     prevScrollPos = currentScrollPos;
// }