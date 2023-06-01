<!DOCTYPE html>
<html>

<head>
    <title>Post à modifier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
    <link href="style/style.css" rel="stylesheet" />
    <!-- lien pour formulaire ammélioré-->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',

        });
    </script>
</head>

<body>
    <?php include('./templates/components/header_admin.php');
    ?>
    <div class="main_container">

        <form class="form" action="http://localhost/isabelle_choppy_4_24122021/index.php?action=modify_Post&id=<?= $item['id'] ?>" method="POST">
            <input type="text" id="title" name="title" value="<?= $item['title'] ?>" />
            <br>
            <textarea name="content" id="content" cols="30" rows="10"><?= $item['content'] ?></textarea>
            <br>
            <input type="submit" id="submit" value="OK">

        </form>

        <div class=" contenu2">
            <h1><?= htmlspecialchars($item['title']) ?></h1>
            <span><?= htmlspecialchars($item['date_creation']) ?></span>
            <p class="article"><?= htmlspecialchars($item['content']) ?></p>
        </div>
    </div>
    <?php include('./templates/components/footer.php');
    ?>
</body>

</html>