// scripts.js

document.addEventListener('mousemove', function(e) {
    const x = e.clientX / window.innerWidth - 0.5;
    const y = e.clientY / window.innerHeight - 0.5;
    document.querySelector('.background').style.backgroundPosition = `${x * 100}px ${y * 100}px`;
});
