document.addEventListener('DOMContentLoaded', () => {
    const shapes = document.querySelectorAll('.shape');
    shapes.forEach(shape => {
        shape.style.transform = `translate(${Math.random() * 100}vw, ${Math.random() * 100}vh)`;
        shape.style.animationDuration = `${Math.random() * 5 + 5}s`;
    });
});