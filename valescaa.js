$('.carousel').carousel({
    interval: 3000,
    wrap: true,
    cycle: true
})
window.addEventListener('scroll', function() {
    var sections = document.querySelectorAll('.section');

    sections.forEach(function(section) {
        section.classList.add('not-show');
        var sectionTop = section.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;
        
        
        if (sectionTop < windowHeight - 200) {
            section.classList.add('show');
            section.classList.remove('not-show');
        } else {
            section.classList.remove('show');
            section.classList.add('not-show');
        }
    });
});