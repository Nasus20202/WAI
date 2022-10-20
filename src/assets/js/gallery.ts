function showPhoto(url : string) {
    let modal = document.getElementById('modal');
    let modalImg = document.getElementById("modal-img") as HTMLImageElement;
    if(modal == null || modalImg == null) {
        return;
    }
    modalImg.src = url;
    modal.style.display = "block";
}

function closeModal() {
    let modal = document.getElementById('modal');
    if(modal == null) {
        return;
    }
    modal.style.display = "none";
}