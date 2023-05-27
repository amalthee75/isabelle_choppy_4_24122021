<!DOCTYPE html>
<html>

<head>
    <title>Post à modifier</title>
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
    <div id="general">

        <form class="form" action="http://localhost/isabelle_choppy_4_24122021/index.php?action=modify_Post&id=<?= $item['id'] ?>" method="POST">
            <input type="text" id="title" name="title" value="<?= $item['title'] ?>" />
            <br>
            <textarea name="content" id="content" cols="30" rows="10"><?= $item['content'] ?></textarea>
            <br>
            <input type="submit" value="OK">

        </form>

        <section id=" contenu2">
            <h1><?= htmlspecialchars($item['title']) ?></h1>
            <span><?= htmlspecialchars($item['date_creation']) ?></span>
            <p class="article"><?= htmlspecialchars($item['content']) ?></p>
    </div>
    </section>
    </div>
</body>

</html>