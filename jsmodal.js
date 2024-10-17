function openModal(element) {
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImage");
    
    modal.style.display = "flex";
    modalImg.src = element.src;
}

function closeModal() {
    var modal = document.getElementById("imageModal");
    modal.style.display = "none";
}