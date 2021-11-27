let autoPayment = document.getElementsByClassName('triplay-auto-payment')[0].style;
let paymentWrapper = document.getElementsByClassName('triplay-manual-payment')[0].style;

const bca = document.getElementsByClassName('bca-payment')[0]
            .addEventListener('click' , ()=> {
                autoPayment.display = "none";
                 if(autoPayment.display === "block") {
                     autoPayment.display = "none";
                 } else {
                     autoPayment.display = "block";
                 }
                 paymentWrapper.display = "none";
                 window.location.href = "#triplay-auto-payment";
            }); 
const gopay = document.getElementsByClassName('gopay-payment')[0]
            .addEventListener('click' , ()=> {
                autoPayment.display = "none";
                 if(autoPayment.display === "block") {
                     autoPayment.display = "none";
                 } else {
                     autoPayment.display = "block";
                 }
                 paymentWrapper.display = "none";
                 window.location.href = "#triplay-auto-payment";
            }); 
const manualPayment = document.getElementsByClassName('manual-direct')[0]
                        .addEventListener('click' , ()=> {
                            if(paymentWrapper.display == "block") {
                                paymentWrapper.display = "none";
                            } else {
                                paymentWrapper.display = "block";
                            }
                            autoPayment.display = "none";
                        });

// Toogle For Mobile Checkout
let mobileMenu = document.getElementsByClassName('black-hamburger')[0]
                    .addEventListener('click' , ()=> {
                        let navbar = document.getElementsByClassName('second-nav')[0].style;
                        return navbar.display == "block" ? navbar.display = "none" : navbar.display = "block";
                    });
