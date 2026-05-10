const elementos = document.querySelectorAll('.revelar');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('ativo');
        }
    });
}, {
    threshold: 0.05
});

elementos.forEach(el => observer.observe(el));