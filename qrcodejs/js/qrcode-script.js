jQuery(document).ready(function(){
    // Создаем QR-код на основе текущей страницы
    var qrcode = new QRCode("qrcode", {
      text: window.location.href,
      width: 200,
      height: 200
    });
  });