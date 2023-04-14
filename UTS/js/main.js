const tombol = document.getElementById("menu-label");
const sidebar = document.getElementsByClassName("sidebar")[0];

tombol.addEventListener('click', function(){
    sidebar.classList.toggle('hide');
    
})