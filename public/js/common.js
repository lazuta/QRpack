$(document).ready(function() {

    // QR код начало
        if(localStorage.getItem('code')) {
            let text = localStorage.getItem('code'); //Сюда должна передаваться инфа с сервера
            let typeNumber = 3;
            let errorLevel = 'L';
            let qrDiv = document.getElementById('qr');
    
            let qr1 = qrcode(typeNumber, errorLevel);
    
            qr1.addData(text);
            qr1.make();
            qrDiv.innerHTML += qr1.createSvgTag(8,10);
            // QR код конец
    
    
    
            //Цели для Яндекс.Метрики и Google Analytics
            $(".count_element").on("click", (function() {
                ga("send", "event", "goal", "goal");
                yaCounterXXXXXXXX.reachGoal("goal");
                return true;
            }));
        }
    
        localStorage.clear();
    });