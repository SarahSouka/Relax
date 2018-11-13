document.addEventListener("DOMContentLoaded", function(event) {
//Only load the script once the page is loaded 

    function toggleMenu(event) {
//        if (!window.matchMedia('(max-width: 641px)').matches) {
            // If the nav doesn't have the class="visible", add it (and vice-versa)
            nav.classList.toggle('visible');

            //Change the class of the children of navbutton (AKA the FontAwesome spans) to bars bzw. times(aka cross)
            menuButton.children[0].classList.toggle('fa-bars');
            menuButton.children[0].classList.toggle('fa-times');
//        }
    }

    var menuButton = document.querySelector('header button');
    var nav = document.querySelector('nav');
    var navLinks = document.querySelectorAll ('nav li a');

    menuButton.addEventListener('click', toggleMenu); 
    
    //Each click on a navigation link triggers the function
    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener('click', toggleMenu);
    }

});