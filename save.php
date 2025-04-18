<?php
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';

if ($title && $content) {
  $posts = json_decode(file_get_contents("data.json"), true) ?? [];
  $new_id = count($posts) ? max(array_column($posts, 'id')) + 1 : 1;
  $posts[] = ["id" => $new_id, "title" => $title, "content" => $content];
  file_put_contents("data.json", json_encode($posts, JSON_PRETTY_PRINT));
}
header("Location: index.php");
exit;
?>
