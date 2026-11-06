<?php
session_start();
include 'db.php';

if (!isset($_GET['id'])) {
    die("No post selected.");
}

$id = $_GET['id'];

if(isset($_POST['update'])) {

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id);
    $stmt->execute();

    header("Location: dashboard.php");
}

$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$post = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Post</h2>

<form method="POST">

Title:<br>
<input type="text"
       name="title"
       value="<?php echo $post['title']; ?>"
       required>

<br><br>

Content:<br>

<textarea name="content"
          rows="5"
          cols="40"
          required><?php echo $post['content']; ?></textarea>

<br><br>

<button type="submit" name="update">
    Update Post
</button>

</form>

</body>
</html>