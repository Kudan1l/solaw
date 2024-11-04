$(document).ready(function() {
    const params = new URLSearchParams(window.location.search);
    const articleId = params.get('id');

    if (articleId) {
        const url = `http://localhost/TUBES/php/fetch_articles.php?id=${articleId}`;

        fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(article => {
            console.log(article);
            const artikel_konten = `
                <p id="created_at">${article.terbit}</p>
                <h1 id="articleTitle" class="artikel_title">${article.judul}</h1>
                <div class="kategori_list">
                    <ul class="kategori_items">

                    </ul>
                </div>
                <p id="articleContent" class="artikel_content">
                    ${article.konten}
                </p>
            `;
            $('.artikel_page').append(artikel_konten);
            $('.breadcrumb-item.active a').text(article.judul);

            // Menampilkan kategori untuk setiap artikel
            if (article.kategori_nama) {
                const categories = article.kategori_nama.split(', ');
                categories.forEach(category => {
                    const kategoriHtml = `<li class="kategori_item">${category.toUpperCase()}</li>`;
                    $('.kategori_items').append(kategoriHtml);
                });
            }
        })
        .catch(error => console.error('Error fetching article:', error));
    } else {
        console.error('Artikel tidak ditemukan.');
    }
});
