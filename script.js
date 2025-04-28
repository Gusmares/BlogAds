const toggleNightMode = () => {
    document.body.classList.toggle('night-mode');
    const icon = document.querySelector('#dark-mode-toggle i');
    
    if (document.body.classList.contains('night-mode')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    }
};

// Adiciona evento ao botão
document.getElementById('dark-mode-toggle').addEventListener('click', toggleNightMode);

