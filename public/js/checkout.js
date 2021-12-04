let autoPayment = document.getElementsByClassName('triplay-auto-payment')[0].style;
let paymentWrapper = document.getElementsByClassName('triplay-manual-payment')[0].style;
let tokenForm = document.getElementById('form-token') || null; // id form
let valPrice = document.getElementById('price');
let priceGopay = document.getElementById('price-gopay');
let priceBCA = document.getElementById('price-bca');

const bca = document.getElementsByClassName('bca-payment')[0]
            .addEventListener('click' , ()=> {
                autoPayment.display = "none";
                 if(autoPayment.display === "block") {
                     autoPayment.display = "none";
                 } else {
                     autoPayment.display = "block";
                 }
                 paymentWrapper.display = "none";
                 tokenForm.action = "/payment/bca"; // Change form action
                 valPrice.value = priceBCA.innerHTML; // Send Price to form
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
                 tokenForm.action = "/payment/gopay"; // Change form action
                 valPrice.value = priceGopay.innerHTML; // Send Price to form
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

// Send Value Price from item to payment div
function getValueItemButton(val) {
    let changeValPrice = document.querySelectorAll('.price-field');
    let changeValPriceManual = document.getElementsByClassName('price-field-manual')[0].innerHTML = val.value;
    for( let i = 0; i < changeValPrice.length; i++){
        let price = val.value;
        let ppn = ( 5 / 100 ) * price;
        let total = parseInt(price) + parseInt(ppn);
        changeValPrice[i].innerHTML = total;
    }
}
