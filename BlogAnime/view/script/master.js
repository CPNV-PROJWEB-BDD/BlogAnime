function btndisplayNavbar(btnIcon) {
    btnIcon.classList.toggle("change");
    let links = document.getElementById("ulNavbar");




    if (links.style.display === 'block') {
        links.style.display = 'none';
        console.log('changer en non');
    } else {
        links.style.display = 'block';
        console.log('changer en relative');
    }

}
