// Variable DOM in Checkout Page
let autoPayment = document.getElementsByClassName('triplay-auto-payment')[0].style;
let paymentWrapper = document.getElementsByClassName('triplay-manual-payment')[0].style;
let tokenForm = document.getElementById('form-token') || null; // id form
let valPrice = document.getElementById('price');
let valPriceMan = document.getElementById('priceMan');
let priceGopay = document.getElementById('price-gopay');
let priceBCA = document.getElementById('price-bca');
let manualPrice = document.getElementsByClassName('price-field-manual');

// Event payment BCA Form
const bca = document.getElementsByClassName('bca-payment')[0]
            .addEventListener('click' , ()=> {
                // autoPayment.display = "none";
                //  if(autoPayment.display === "block") {
                //      autoPayment.display = "none";
                //  } else {
                //      autoPayment.display = "block";
                //  }
                //  paymentWrapper.display = "none";
                //  tokenForm.action = "/payment/bca"; // Change form action
                //  valPrice.value = priceBCA.innerHTML; // Send Price to form
                //  window.location.href = "#triplay-auto-payment";
                alert("Maaf, Masih belum tersedia untuk saat ini. Kembali lagi nanti :) ");
            }); 
            
// Event Payment Gopay Form
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

// Event Payment Manual Form
const manualPayment = document.getElementsByClassName('manual-direct')[0]
                .addEventListener('click' , ()=> {
                    if(paymentWrapper.display == "block") {
                        paymentWrapper.display = "none";
                    } else {
                        paymentWrapper.display = "block";
                    }
                    valPriceMan.value = manualPrice.innerHTML; // Send Price to form
                    autoPayment.display = "none";
            });

// Toogle For Mobile Checkout with ternary conditions
let mobileMenu = document.getElementsByClassName('black-hamburger')[0]
                    .addEventListener('click' , ()=> {
                        let navbar = document.getElementsByClassName('second-nav')[0].style;
                        return navbar.display == "block" ? navbar.display = "none" : navbar.display = "block";
                    });

// Send Value Price from item to payment div
function getValueItemButton(val) {
    let totalItem = document.getElementById('itemMan');
    let totalItemAuto = document.getElementById('itemAuto');
    let changeValPrice = document.querySelectorAll('.price-field');
    let changeValPriceManual = document.getElementsByClassName('price-field-manual')[0].innerHTML = val.value;
    for( let i = 0; i < changeValPrice.length; i++){
        let price = val.value;
        let ppn = ( 5 / 100 ) * price;
        let total = parseInt(price) + parseInt(ppn);
        changeValPrice[i].innerHTML = total;
    }
    totalItem.value = val.innerHTML;
    totalItemAuto.value = val.innerHTML;
}

// Payment manual handle
function payManual() {
    let game = document.getElementById('gameNameMan');
    let item = document.getElementById('itemMan');
    let wallet = document.getElementById('paymentMan');
    let playerID = document.getElementById('game_idMan');
    let server = document.getElementById('serverMan');
    let nickname = document.getElementById('nicknameMan');
    let waLINK;
        if( server == null ) {
            waLINK = `https://api.whatsapp.com/send?phone=6289513779293&text=Halo%20admin%20TRIPLAY%20ID%2C%20Saya%20mau%20order%20%3A%0D%0A%0D%0AGames%20%3A%20${game.value}
            %0D%0AJumlah%20Item%20%3A%20${item.value}
            %0D%0ATransfer%20%3A%20${wallet.value}
            %0D%0APlayer%20ID%20%3A%20${playerID.value}%20
            %0D%0ANickname%20%3A%20${nickname.value}%0D%0A%0D%0ATerimakasih`;
            window.location.href = waLINK;
        }
        if( server.value == "" ) {
            waLINK = `https://api.whatsapp.com/send?phone=6289513779293&text=Halo%20admin%20TRIPLAY%20ID%2C%20Saya%20mau%20order%20%3A%0D%0A%0D%0AGames%20%3A%20${game.value}
            %0D%0AJumlah%20Item%20%3A%20${item.value}
            %0D%0ATransfer%20%3A%20${wallet.value}
            %0D%0APlayer%20ID%20%3A%20${playerID.value}%20
            %0D%0ANickname%20%3A%20${nickname.value}%0D%0A%0D%0ATerimakasih`;
            window.location.href = waLINK;
    } else {
            waLINK = `https://api.whatsapp.com/send?phone=6289513779293&text=Halo%20admin%20TRIPLAY%20ID%2C%20Saya%20mau%20order%20%3A%0D%0A%0D%0AGames%20%3A%20${game.value}
            %0D%0AJumlah%20Item%20%3A%20${item.value}
            %0D%0ATransfer%20%3A%20${wallet.value}
            %0D%0APlayer%20ID%20%3A%20${playerID.value}%20%28${server.value}%29%0D%0ANickname%20%3A%20${nickname.value}%0D%0A%0D%0ATerimakasih`;
            window.location.href = waLINK;
    }
}