<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Post</title>
  <style>
   
body {
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(to right, #f7cac9, #ffdde1);
  text-align: center;
  color: #333;
}

header {
  background: #ffffffcc;
  padding: 25px 15px;
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
  margin-bottom: 40px;
  backdrop-filter: blur(5px);
}

header h1 {
  margin: 0;
  color: #2b2d42;
  font-size: 2.5rem;
}

nav a {
  margin: 0 20px;
  text-decoration: none;
  color: #5e60ce;
  font-weight: 600;
  font-size: 1.1rem;
}

nav a:hover {
  color: #3a0ca3;
}

form {
  background: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  width: 90%;
  max-width: 600px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
  margin: auto;
}

form textarea,
form input[type="text"] {
  width: 100%;
  padding: 14px;
  border-radius: 10px;
  border: 1px solid #ccc;
  font-size: 1.1rem;
}

form input[type="submit"] {
  padding: 14px 30px;
  background-color: #3a0ca3;
  border: none;
  color: white;
  font-weight: bold;
  font-size: 1.1rem;
  border-radius: 10px;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #7209b7;
}

  </style>
</head>
<body>
  <header>
    <h1>Learn With Me .</h1>
    <nav>
      <a href="index.php">Home</a>
    </nav>
  </header>

  <div class="container">
    <form action="save.php" method="post">
      <input type="text" name="title" placeholder="Post Title" required><br>
      <textarea name="content" placeholder="Post Content" rows="8" required></textarea><br>
      <input type="submit" value="Publish">
    </form>
  </div>
</body>
</html>
