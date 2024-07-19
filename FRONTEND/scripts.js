window.onload = () => {
const form  = document.getElementById("bookForm");
form.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    fetch('../BACKEND/CONTROLADOR/controladorLibros.php?funcion=agregar', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
      
        console.log(data);
    });
});
}