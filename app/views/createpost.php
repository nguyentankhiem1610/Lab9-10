<!DOCTYPE html>
<html>

<head>
    <title>Tạo bài viết</title>
    <link rel="stylesheet" href="../app/views/style.css">
</head>

<body>

    <h1>Tạo bài viết</h1>

    <form method="POST" action="index.php?action=store">

        <label>Tiêu đề</label>
        <input type="text" name="title" required>

        <label>Nội dung</label>
        <textarea name="content" required></textarea>

        <label>Tác giả</label>
        <input type="text" name="author" required>

        <br><br>

        <button type="submit">Lưu bài viết</button>

    </form>

</body>

</html>