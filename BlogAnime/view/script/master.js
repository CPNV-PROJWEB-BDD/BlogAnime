

function btndisplayNavbar(btnIcon) {
    console.log(btnIcon);
    btnIcon.classList.toggle("change");
    let links = document.getElementById("ulNavbar");
    if (links.style.display === 'block') {
        links.style.display = 'none';
        console.log('changer en none');
    } else {
        links.style.display = 'block';
        console.log('changer en relative');
    }

}
addEventListener("resize", (screen) => {resize();});

function resize() {
    let navbar=document.getElementById('navbarbtn')

    let links = document.getElementById("ulNavbar");
    if (window.innerWidth > 800 && links.style.display !== 'flex'){
        links.style.display = 'flex';
        console.log('je flex');
        if ( navbar.classList.contains("change")){
            navbar.classList.toggle("change");
        }



    }
    if (window.innerWidth  < 800 && links.style.display !== 'none'){
        links.style.display = 'none';
        console.log('je none');
    }


}
