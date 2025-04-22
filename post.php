<?php
$posts = json_decode(file_get_contents("data.json"), true) ?? [];
$id = $_GET['id'] ?? 0;
$post = null;
foreach ($posts as $p) {
  if ($p['id'] == $id) {
    $post = $p;
    break;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $post ? $post['title'] : 'Post Not Found' ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Learn With Me .</h1>
    <nav>
      <a href="index.php">Home</a>
    </nav>
  </header>

  <div class="container">
    <?php if ($post): ?>
      <div class="card">
        <h2><?= htmlspecialchars($post['title']) ?></h2>
        <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
      </div>
    <?php else: ?>
      <div class="card">
        <h2>Post Not Found</h2>
        <p>The post you are looking for doesn't exist.</p>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
