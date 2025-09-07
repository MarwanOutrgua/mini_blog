document.addEventListener('DOMContentLoaded', () => {
    // Confirmation avant suppression
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', e => {
            if(!confirm('Voulez-vous vraiment supprimer cet article ?')) {
                e.preventDefault();
            }
        });
    });

    // Ajouter effet hover sur liste (animation légère)
    document.querySelectorAll('li').forEach(li => {
        li.addEventListener('mouseenter', () => {
            li.style.transform = 'scale(1.02)';
        });
        li.addEventListener('mouseleave', () => {
            li.style.transform = 'scale(1)';
        });
    });
});
