document.querySelectorAll('.favourite-btn').forEach(btn => {
    btn.addEventListener('click', function (event) {
        console.log('Button clicked');
        const bookId = this.dataset.id;
        const icon = this.querySelector('i');

        fetch(`/books/${bookId}/favourite`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
            },
        })
            .then(res => res.json())
            .then(data => {
                if (data.favourited) {
                    icon.className = 'bi bi-star-fill';
                    icon.style.color = '#fbbf24'; // Yellow color for filled star
                } else {
                    icon.className = 'bi bi-star';
                    icon.style.color = '';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
});
