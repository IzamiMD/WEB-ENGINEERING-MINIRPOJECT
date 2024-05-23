function showPage(pageId) {
    var pages = document.querySelectorAll('.page');
    pages.forEach(function(page) {
        page.style.display = 'none';
    });
    document.getElementById(pageId).style.display = 'block';
}

function generateQRCode() {
    const username = document.getElementById('username').value;
    const matricId = document.getElementById('matric-id').value;
    const startTime = document.getElementById('start-time').value;
    const endTime = document.getElementById('end-time').value;
    const qrContent = `Username: ${username}\nMatric ID: ${matricId}\nStart Time: ${startTime}\nEnd Time: ${endTime}`;

    QRCode.toCanvas(document.getElementById('qrcode'), qrContent, function (error) {
        if (error) console.error(error);
        document.getElementById('download-btn').style.display = 'block';
    });
}

function downloadQRCode() {
    const canvas = document.querySelector('#qrcode canvas');
    const img = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
    const a = document.createElement('a');
    a.href = img;
    a.download = 'qrcode.png';
    a.click();
}

function showImagePopup(img) {
    const popup = document.getElementById('image-popup');
    const popupImg = document.getElementById('image-popup-content');
    const caption = document.getElementById('caption');

    popup.style.display = 'block';
    popupImg.src = img.src;
    caption.innerText = img.alt;
}

function closeImagePopup() {
    const popup = document.getElementById('image-popup');
    popup.style.display = 'none';
}
