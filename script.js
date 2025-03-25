
function ajustaImagens(){
    document.querySelector('#carousel .carousel-container li').style.width = window.innerWidth + "px"
}

function anterior(){
    document.querySelector('#carousel div').scrollLeft -= window.innerWidth
}

function proximo(){
    document.querySelector('#carousel div').scrollLeft += window.innerWidth
}

ajustaImagens()