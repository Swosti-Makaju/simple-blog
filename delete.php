<?php
$id = $_GET['id'] ?? 0;
$posts = json_decode(file_get_contents("data.json"), true) ?? [];

$filtered = array_filter($posts, fn($p) => $p['id'] != $id);
file_put_contents("data.json", json_encode(array_values($filtered), JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
?>
