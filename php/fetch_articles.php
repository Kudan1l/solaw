<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connection.php';

$articleId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($articleId > 0) {
    $sql = "SELECT artikel.*, GROUP_CONCAT(kategori.nama_kategori SEPARATOR ', ') AS kategori_nama
            FROM artikel
            LEFT JOIN artikel_kategori ON artikel.artikel_id = artikel_kategori.artikel_id
            LEFT JOIN kategori ON artikel_kategori.kategori_id = kategori.kategori_id
            WHERE artikel.artikel_id = $articleId
            GROUP BY artikel.artikel_id";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $article = $result->fetch_assoc();
            $timestamp = strtotime($article['terbit']);
            $article['terbit'] = date('d F Y', $timestamp);
            echo json_encode($article);
        } else {
            echo json_encode(['error' => 'Article not found']);
        }
    } else {
        echo json_encode(['error' => 'Query failed: ' . $conn->error]);
    }
} else {
    $sql = "SELECT artikel.*, GROUP_CONCAT(kategori.nama_kategori SEPARATOR ' ') AS kategori_nama
            FROM artikel
            LEFT JOIN artikel_kategori ON artikel.artikel_id = artikel_kategori.artikel_id
            LEFT JOIN kategori ON artikel_kategori.kategori_id = kategori.kategori_id
            GROUP BY artikel.artikel_id
            ORDER BY artikel.terbit DESC LIMIT 4";
    $result = $conn->query($sql);

    $articles = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $timestamp = strtotime($row['terbit']);
            $row['terbit'] = date('d F Y', $timestamp);
            $articles[] = $row;
        }
    }
    echo json_encode($articles);
}

$conn->close();
?>
