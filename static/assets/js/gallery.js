function showPhoto(url) {
    var modal = document.getElementById('modal');
    var modalImg = document.getElementById("modal-img");
    if (modal == null || modalImg == null) {
        return;
    }
    modalImg.src = url;
    modal.style.display = "block";
}
function closeModal() {
    var modal = document.getElementById('modal');
    if (modal == null) {
        return;
    }
    modal.style.display = "none";
}
