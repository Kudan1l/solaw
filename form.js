function addPost() {
    var postAuthor = document.getElementById("postAuthor").value;
    var postTitle = document.getElementById("postTitle").value;
    var postContent = document.getElementById("postContent").value;
    var postBox = document.getElementById("postBox");

    if (postAuthor && postTitle && postContent) {
        // Membuat elemen postingan baru
        var post = document.createElement("div");
        post.classList.add("card", "mb-4");

        var cardHeader = document.createElement("div");
        cardHeader.classList.add("card-header");
        cardHeader.innerHTML = `<h5 class="post-title">${postTitle}</h5><small class="text-muted">Dibuat oleh: ${postAuthor} - ${new Date().toLocaleString()}</small>`;

        var cardBody = document.createElement("div");
        cardBody.classList.add("card-body");
        cardBody.innerHTML = `<p>${postContent}</p>`;

        // Tombol untuk menampilkan atau menyembunyikan komentar
        var toggleCommentsButton = document.createElement("button");
        toggleCommentsButton.classList.add("btn", "btn-outline-primary", "mt-2");
        toggleCommentsButton.textContent = "Tampilkan Komentar";
        toggleCommentsButton.onclick = function() {
            var commentBox = this.nextElementSibling;
            if (commentBox.style.display === "none") {
                commentBox.style.display = "block";
                this.textContent = "Sembunyikan Komentar";
            } else {
                commentBox.style.display = "none";
                this.textContent = "Tampilkan Komentar";
            }
        };
        cardBody.appendChild(toggleCommentsButton);

        // Wadah untuk komentar-komentar
        var commentBox = document.createElement("div");
        commentBox.classList.add("comment-box", "mt-3");

        // Formulir untuk menambahkan komentar
        var commentForm = document.createElement("div");
        commentForm.classList.add("input-group", "mb-3");
        commentForm.innerHTML = `
            <input type="text" class="form-control" placeholder="Nama Anda" class="comment-author">
            <textarea class="form-control" placeholder="Tulis komentar Anda di sini..." class="comment-content"></textarea>
            <button class="btn btn-primary" onclick="addComment(this)">Kirim</button>
        `;
        commentBox.appendChild(commentForm);
        cardBody.appendChild(commentBox);

        post.appendChild(cardHeader);
        post.appendChild(cardBody);
        postBox.appendChild(post);

        // Mengosongkan input
        document.getElementById("postAuthor").value = '';
        document.getElementById("postTitle").value = '';
        document.getElementById("postContent").value = '';
    } else {
        alert("Harap isi semua kolom untuk membuat postingan.");
    }
}

function addComment(button) {
    var commentAuthor = button.previousElementSibling.previousElementSibling.value;
    var commentContent = button.previousElementSibling.value;
    var commentBox = button.parentNode.parentNode;

    if (commentAuthor && commentContent) {
        // Membuat elemen komentar baru
        var comment = document.createElement("div");
        comment.classList.add("card", "mt-3");
        comment.innerHTML = `
            <div class="card-body">
                <h6 class="card-title">${commentAuthor} <small class="text-muted">${new Date().toLocaleString()}</small></h6>
                <p class="card-text">${commentContent}</p>
            </div>
        `;

        commentBox.appendChild(comment);

        // Mengosongkan input komentar
        button.previousElementSibling.previousElementSibling.value = '';
        button.previousElementSibling.value = '';
    } else {
        alert("Harap isi nama dan komentar Anda.");
    }
}

function searchPost() {
    var searchQuery = document.getElementById("searchBox").value.toLowerCase();
    var posts = document.querySelectorAll(".post-title");

    posts.forEach(function(title) {
        var post = title.closest(".card");
        if (title.textContent.toLowerCase().includes(searchQuery)) {
            post.style.display = "block";
        } else {
            post.style.display = "none";
        }
    });
}


