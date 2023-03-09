function displayNavbar(btnIcon) {
    btnIcon.classList.toggle("change");

    let links = document.getElementById("ulNavbar");


    if (links.style.display === "flex") {
        links.style.display = "none";
    } else {
        links.style.display = "flex";
    }
}