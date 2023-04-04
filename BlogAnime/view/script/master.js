/**
 * @file master.js
 * @brief view/script/master.js
 * @author Created by Léo.JAQUIER
 * @version 24.02.2023
 */


//this function will only appear on mobile version, used to open the navbar
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
addEventListener("resize", (screen) => {fnResize();});

function fnResize() {
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
