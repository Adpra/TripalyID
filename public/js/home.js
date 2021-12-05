// Toogle Mobile Hmaburger 
let mobileMenu = document.getElementsByClassName('black-hamburger')[0]
                    .addEventListener('click' , ()=> {
                        let navbar = document.getElementsByClassName('main-nav')[0].style;
                        return navbar.display == "block" ? navbar.display = "none" : navbar.display = "block";
                    });

// Scroll to game id
function slidetogame() {
    window.location.href = "#game-point";
}

// Button Promo
function promoDiamond() {
    alert("Ups, Saat ini belum tersedia promo diamond, Check lagi nanti yaa :))");
}