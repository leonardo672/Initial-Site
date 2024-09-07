document.addEventListener('DOMContentLoaded', () => {
    const articleLinks = document.querySelectorAll('#article-list a');
    
    articleLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const articlePath = link.getAttribute('href');
            fetch(articlePath)
                .then(response => response.text())
                .then(data => {
                    document.querySelector('.main-article .article-content').innerHTML = data;
                })
                .catch(error => console.error('Error loading article:', error));
        });
    });
});
