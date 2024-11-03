function addPost() {
    var postAuthor = $("#postAuthor").val();
    var postTitle = $("#postTitle").val();
    var postContent = $("#postContent").val();
    var postBox = $("#postBox");

    if (postAuthor && postTitle && postContent) {
        var post = $(`
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="post-title">${postTitle}</h5>
                    <small class="text-muted">Dibuat oleh: ${postAuthor} - ${new Date().toLocaleString()}</small>
                </div>
                <div class="card-body">
                    <p>${postContent}</p>
                    <button class="btn btn-outline-primary mt-2 toggle-comments">Tampilkan Komentar</button>
                    <div class="comment-box mt-3" style="display: none;">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control comment-author" placeholder="Nama Anda">
                            <textarea class="form-control comment-content" placeholder="Tulis komentar Anda di sini..."></textarea>
                            <button class="btn btn-primary add-comment">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        `);
        postBox.append(post);

        $(".toggle-comments", post).click(function() {
            var commentBox = $(this).next(".comment-box");
            commentBox.toggle();
            $(this).text(commentBox.is(":visible") ? "Sembunyikan Komentar" : "Tampilkan Komentar");
        });

        $(".add-comment", post).click(function() {
            var commentAuthor = $(this).siblings(".comment-author").val();
            var commentContent = $(this).siblings(".comment-content").val();
            if (commentAuthor && commentContent) {
                var comment = $(`
                    <div class="card mt-3">
                        <div class="card-body">
                            <h6 class="card-title">${commentAuthor} <small class="text-muted">${new Date().toLocaleString()}</small></h6>
                            <p class="card-text">${commentContent}</p>
                        </div>
                    </div>
                `);
                $(this).closest(".comment-box").append(comment);
                $(this).siblings(".comment-author, .comment-content").val('');
            } else {
                alert("Harap isi nama dan komentar Anda.");
            }
        });

        $("#postAuthor, #postTitle, #postContent").val('');
    } else {
        alert("Harap isi semua kolom untuk membuat postingan.");
    }
}

function searchPost() {
    var searchQuery = $("#searchBox").val().toLowerCase();
    $(".post-title").each(function() {
        var post = $(this).closest(".card");
        if ($(this).text().toLowerCase().includes(searchQuery)) {
            post.show();
        } else {
            post.hide();
        }
    });
}
