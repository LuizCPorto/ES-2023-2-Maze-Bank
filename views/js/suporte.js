function toggleText(id) {
    var clickedText = document.getElementById(id);

    // Esconde todos os textos, exceto o texto clicado
    var allTexts = document.querySelectorAll('.opc-text');
    allTexts.forEach(function(text) {
        if (text.id !== id) {
            text.classList.remove('show-text');
        }
    });

    // Mostra ou esconde o texto clicado e ajusta a margem
    clickedText.classList.toggle('show-text');
    if (clickedText.classList.contains('show-text')) {
        var nextDiv = clickedText.parentElement.nextElementSibling;
        if (nextDiv) {
            nextDiv.style.marginTop = clickedText.offsetHeight + 10 + 'px';
        }
    } else {
        var nextDiv = clickedText.parentElement.nextElementSibling;
        if (nextDiv) {
            nextDiv.style.marginTop = '0';
        }
    }
}
