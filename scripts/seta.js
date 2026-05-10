document.querySelector('.seta-pula').addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector('#sobre-mim-section');
    
    window.scrollTo({
        top: target.offsetTop - 80, // O -80 é para compensar a altura do Navbar fixo
        behavior: 'smooth'
    });
});