let isLoggedIn = false;

function updateLoginStatus() {
    const signupLink = $('#signupLink');
    const loginLink = $('#loginLink');
    const profileIcon = $('#profileIcon');

    if (isLoggedIn) {
        signupLink.hide();
        loginLink.hide();
        profileIcon.show();
    } else {
        signupLink.show();
        loginLink.show();
        profileIcon.hide();
    }
}

// Panggil fungsi untuk mengupdate tampilan saat halaman dimuat
$(document).ready(function() {
    updateLoginStatus();

    fetch('http://localhost/TUBES/php/fetch_articles.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(articles => {
        console.log(articles);

        // Memastikan mengambil hanya 4 artikel terbaru
        articles.slice(0, 4).forEach(article => {
            const articleHtml = `
                <div class="col">
                    <div class="card h-100">
                        <img src="${article.thumbnail}" class="card-img-top img-fluid" alt="${article.judul}">
                        <div class="card-body">
                            <h5 class="card-title">${article.judul}</h5>
                            <div class="kategori_list">
                                <ul class="kategori_items">

                                </ul>
                            </div>
                            <p class="card-text text-justify">${article.deskripsi}</p>
                            <a href="Artikel_konten_page.html?id=${article.artikel_id}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            `;
            $('.artikel').append(articleHtml);

            // Menampilkan kategori untuk setiap artikel
            if (articles.kategori_nama) {
                const categories = articles.kategori_nama.split(', ');
                categories.forEach(category => {
                    const kategoriHtml = `<li class="kategori_item">${category.toUpperCase()}</li>`;
                    $('.kategori_items:last').append(kategoriHtml); // Menggunakan .last() untuk menambahkan kategori pada artikel yang benar
                });
            }
        });
    })
    .catch(error => console.error('Error fetching articles:', error));
});
