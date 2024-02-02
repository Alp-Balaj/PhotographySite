document.getElementById('toggleForm1').addEventListener('click', function() {
    var form = document.getElementById('imageForm1');
    form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
});

document.getElementById('toggleForm2').addEventListener('click', function() {
    var form = document.getElementById('imageForm2');
    form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
});

document.getElementById('toggleForm3').addEventListener('click', function() {
    var form = document.getElementById('imageForm3');
    form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
});