// ----- scroll top button ----
const btnScrollTop = document.getElementById("btnScrollTop");
// ----- Obtener la URL actual ----
const url = window.location.href;
// ----- Crear un objeto URLSearchParams ----
const params = new URLSearchParams(new URL(url).search);
// ------ Obtener el valor del parámetro 'id' ------
let id = params.get('id');


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

// Maneja clic en el botón calendario para abrir el mismo modal con la imagen del calendario
const calendarBtn = document.querySelector('.btn-calendar');
if(calendarBtn){
    calendarBtn.addEventListener('click', (e)=>{
        e.preventDefault();
        // intentamos localizar la imagen del calendario en la sección de información
        const calImg = document.querySelector('.cont-foto-calendario img') || document.querySelector(".img-index-modal[src*='calendario']");
        if(calImg){
            modal.style.display = 'flex';
            modal.style.flexDirection = 'column';
            modal.style.alignItems = 'center';
            modal.style.gap = '20px';
            modalImg.src = calImg.src;
        } else {
            // fallback: si no encuentra la imagen, abrir href del botón como última opción
            const href = calendarBtn.getAttribute('href');
            if(href){ window.open(href, '_blank'); }
        }
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

// obteniendo el boton del dropdown
const btnDropdown = document.querySelector(".develop");
const ulSecond = document.querySelector(".ul-second");

btnDropdown.addEventListener("click",()=>{
    // console.log(ulSecond.style.display);
    if(ulSecond.style.display === ""){
        ulSecond.style.display="block";
    }else{
        ulSecond.style.display="";
    }
})
// Event listener para clics en cualquier lugar de la página
document.addEventListener("click", (event) => {
    // Verifica si el clic no fue dentro del botón
    if (!btnDropdown.contains(event.target)) {
        // Oculta el menú
        ulSecond.style.display = "";
    }
});





