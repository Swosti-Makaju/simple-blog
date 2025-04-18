<?php
$posts = json_decode(file_get_contents("data.json"), true) ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn With Me .</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Learn With Me .</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="add.php">Add New Post</a>
    </nav>
  </header>

  <div class="container">
    <?php foreach ($posts as $post): ?>
      <div class="card">
        <h2><a href="post.php?id=<?= $post['id'] ?>" style="text-decoration: none; color: #0077ff;"> <?= htmlspecialchars($post['title']) ?> </a></h2>
        <p><?= substr(htmlspecialchars($post['content']), 0, 80) ?>...
  <a href="delete.php?id=<?= $post['id'] ?>" onclick="return confirm('Are you sure you want to delete this post?')" style="color: red; margin-left: 50px;">Delete</a>
</p>
       
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
