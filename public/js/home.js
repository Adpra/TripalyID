// Toogle Mobile Hmaburger 
let mobileMenu = document.getElementsByClassName('black-hamburger')[0]
                    .addEventListener('click' , ()=> {
                        let navbar = document.getElementsByClassName('main-nav')[0].style;
                        return navbar.display == "block" ? navbar.display = "none" : navbar.display = "block";
                    });