// ----- scroll top button ----
const btnScrollTop = document.getElementById("btnScrollTop");
// ----- Obtener la URL actual ----
const url = window.location.href;
// ----- Crear un objeto URLSearchParams ----
const params = new URLSearchParams(new URL(url).search);
// ------ Obtener el valor del parámetro 'id' ------
let id = params.get('id');

// Obtiene la imagen y el modal por sus IDs
// carreras.html
const imgCurricular = document.getElementById('img-curricular');
// index.html
const imgsIndex = document.querySelectorAll(".img-index-modal");
// ambas paginas
const modal = document.getElementById('imageModal');
const modalImg = document.getElementById('modalImage');

// Verifica si estamos en index.html
if(imgsIndex!=null){
    // Maneja el clic en la imagen para abrir el modal
    imgsIndex.forEach(img =>{
        img.addEventListener('click', ()=> {
                modal.style.display = 'flex';
                modal.style.flexDirection = 'column';
                modal.style.alignItems = 'center';
                modal.style.gap = '20px';
                modalImg.src = img.src;
        });
    });
}
// Verifica si estamos en carreras.html
if(imgCurricular!=null){

    // Maneja el clic en la imagen para abrir el modal
    imgCurricular.addEventListener('click', ()=> {
        modal.style.display = 'flex';
        modal.style.flexDirection = 'column';
        modal.style.alignItems = 'center';
        modal.style.gap = '20px';
        modalImg.src = imgCurricular.src;
    });
}
// Maneja el clic en el botón de cierre para cerrar el modal
const closeBtn = document.getElementsByClassName('close')[0];
closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Cierra el modal haciendo clic en cualquier parte fuera de la imagen
window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});

addEventListener("scroll",()=>{
    //scroll para que el menu se fije en el top de la pantalla
        
    let pixel = window.scrollY;
    if(pixel>400){
        btnScrollTop.classList.add("up");
    }else{
        btnScrollTop.classList.remove("up");
    }
});







