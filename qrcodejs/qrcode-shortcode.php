<?php
/*
 * Plugin Name:qr-plug
 */?>
<?php
// Функция, которая выводит QR-код
function qrcode_shortcode() {
  // Выводим элемент с ID "qrcode"
  echo '<div id="qrcode"></div>';
}
// Регистрируем шорткод "qrcode"
add_shortcode('qrcode', 'qrcode_shortcode');
?>