const dropZone = document.querySelector('.drop-zone');
const fileInput = document.querySelector('#fileInput');
const previewImagen = document.createElement('img');
const eliminarImagen = document.createElement('span');

eliminarImagen.innerHTML = '×';
eliminarImagen.className = 'eliminar-imagen';

dropZone.addEventListener('click', () => {
    fileInput.click();
});

dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropZone.classList.add('dragover');
});

dropZone.addEventListener('dragleave', () => {
    dropZone.classList.remove('dragover');
});

dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    dropZone.classList.remove('dragover');
    const file = e.dataTransfer.files[0];
    const reader = new FileReader();
    
    reader.onload = () => {
        const imageDataUrl = reader.result;
        previewImagen.src = imageDataUrl;
        previewImagen.className = 'preview-imagen';
        dropZone.style.display = 'none';
        dropZone.after(previewImagen);
        dropZone.after(eliminarImagen);
    };
    
    reader.readAsDataURL(file);
});

fileInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    const reader = new FileReader();
    
    reader.onload = () => {
        const imageDataUrl = reader.result;
        previewImagen.src = imageDataUrl;
        previewImagen.className = 'preview-imagen';
        dropZone.style.display = 'none';
        dropZone.after(previewImagen);
        dropZone.after(eliminarImagen);
    };
    
    reader.readAsDataURL(file);
});

eliminarImagen.addEventListener('click', () => {
    dropZone.style.display = 'block';
    previewImagen.remove();
    eliminarImagen.remove();
});
