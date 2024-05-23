document.querySelector('.download-button').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('.receipt').style.display = 'none';
});
document.querySelector('.hello').addEventListener('submit', function(event) {
    event.preventDefault();
    document.querySelector('.receipt').style.display = 'block';
});


