<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editeur de texte</title>
    <!-- Script -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'code',
        });
    </script>

    <!-- Link style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Editeur de Texte</h1>

    <form method="POST">
        <div>
            <textarea name="content" cols="40" rows="10"></textarea>
        </div>
        <div>
            <button>Send</button>
        </div>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    ?>
        <div><?= $_POST['content'] ?></div>

    <?php endif;
    ?>
</body>

</html>