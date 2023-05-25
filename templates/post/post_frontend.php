<!DOCTYPE html>
<html>

<head>
    <title>Post à modifier</title>
    <link href="style/style.css" rel="stylesheet" />
    <!-- lien pour formulaire ammélioré-->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <?php include('./templates/components/header.php');
    ?>
    <div id="general">

        <section id=" contenu2">
            <h1><?= htmlspecialchars($item['title']) ?></h1>
            <span><?= htmlspecialchars($item['date_creation']) ?></span>
            <p class="article"><?= htmlspecialchars($item['content']) ?></p>
    </div>
    </section>
    </div>
</body>

</html>