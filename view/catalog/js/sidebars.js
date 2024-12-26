
document.querySelectorAll('.listele').forEach(item => {
    item.addEventListener('click', () => {
        console.log(item.id);
    });
});