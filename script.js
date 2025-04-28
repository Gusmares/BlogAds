const toggleNightMode = () => {
    document.body.classList.toggle('night-mode');
};


document.addEventListener('keydown', (event) => {
    if (event.key === 'n') {
        toggleNightMode();
    }
});
