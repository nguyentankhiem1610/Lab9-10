<!DOCTYPE html>
<html>

<head>
    <title>Danh sách bài viết</title>
    <link rel="stylesheet" href="../app/views/style.css">
</head>

<body>

    <h1>Danh sách bài viết</h1>

    <div class="container">

        <a href="index.php?action=create">Tạo bài viết</a>

        <?php foreach ($posts as $post) { ?>

            <div class="post">

                <h2><?php echo $post['title']; ?></h2>

                <p><?php echo $post['content']; ?></p>

                <p><b>Tác giả:</b> <?php echo $post['author']; ?></p>

                <p><b>Ngày đăng:</b> <?php echo $post['created_at']; ?></p>

            </div>

        <?php } ?>

    </div>

</body>

</html>