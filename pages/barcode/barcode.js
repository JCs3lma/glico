const scanner = new  Html5QrcodeScanner('barcode-reader', {
  qrbox: {
    width: 310,
    height: 400,
  },
  fps: 20,
});

scanner.render(success, error);

function success(result) {
  console.log(result)
}

function error(result) {
  console.log(result)
}

var qrReaderElement = document.getElementById('barcode-reader__dashboard')
navigator.mediaDevices.getUserMedia({ video: true })
.then(function(stream) {
  qrReaderElement.style="display: none;";
})
.catch(function(error) {
  // You may add your own functionality here
  console.warn("Camera permission denied or error:", error);
});

var barcodeReaderElement2 = document.getElementById('barcode-reader')
barcodeReaderElement2.removeAttribute("style");


$(document).ready(function() {
  var selectedPrice = '';
  var countItem = 0;

  $('.price-list button').on('click', function() {
    var value = $(this).data('value');
    selectedPrice = value;
    priceUpdate();
  })

  $('#addToCart').on('click', function() {
    var item = $('#number_of_pieces').val();
    countItem = item;
    cartCount();
  })

  function priceUpdate() {
    $('#price').html(selectedPrice);
  }

  function cartCount() {
    $('.item-count span').html(countItem);
  }

  function init() {
    priceUpdate();
    cartCount();
  }

  init();
})