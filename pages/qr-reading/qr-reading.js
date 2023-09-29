const scanner = new  Html5QrcodeScanner('qr-reader', {
  qrbox: {
    width: 250,
    height: 250,
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

var qrReaderElement = document.getElementById('qr-reader')
qrReaderElement.removeAttribute("style");