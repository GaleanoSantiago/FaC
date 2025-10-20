

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('imageModal') || null;
    const img = document.getElementById('img-curricular') || null;
    const modalImg = document.getElementById('modalImage') || null;
    const closeBtn = document.querySelector('.close') || null;

    if(img){

        img.addEventListener('click', () => {
            modal.style.display = 'flex';
            modal.style.flexDirection= 'column';
            modal.style.alignItems= 'center';
            modal.style.gap= '10px';
            modal.style.padding= '30px';
            
            modalImg.src = img.src;
        });
        
        closeBtn.addEventListener('click', () => modal.style.display = 'none');
        modal.addEventListener('click', e => { if (e.target === modal) modal.style.display = 'none'; });
    }
});

// window.addEventListener('load', modalCarreras);