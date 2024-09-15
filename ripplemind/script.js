document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const cardText = this.previousElementSibling;
        if (cardText.classList.contains('card-content-expanded')) {
            cardText.classList.remove('card-content-expanded');
            this.textContent = 'Read More';
        } else {
            cardText.classList.add('card-content-expanded');
            this.textContent = 'Read Less';
        }
    });
});

