<!DOCTYPE html>
<html>

<head>
    <title>Voici un post X</title>
    <!-- lien pour formulaire ammélioré-->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: 'textarea',

        });
    </script>
    <!-- link -->
    <link href="style/style.css" rel="stylesheet" />
</head>

<body>
    <?php include('./templates/components/header.php'); ?>

    <div id="general">

        <section id=" contenu2">
            <div class="post_contenu">
                <h1><?= htmlspecialchars($item['title']) ?></h1>
                <span><?= htmlspecialchars($item['date_creation']) ?></span>
                <p class="article"><?= htmlspecialchars($item['content']) ?></p>
            </div>

            <div class="coms_contenu">
                <h5>Commentaires</h5>
                <?php foreach ($comments as $comment) { ?>
                    <h5 class="pseudo"><?= htmlspecialchars($comment["pseudo"]) ?></h5><br>
                    <p class="comment"><?= htmlspecialchars($comment["commentaire"]) ?></p>
                    <?php if ($comment["signaler"] == 1) { ?>
                        <span>Déjà signalé</span>
                    <?php } else { ?>
                        <a class="link_dashboard" href="http://localhost/mvc-site/index.php?action=signal_Comments&comment_id=<?= $comment['id'] ?>&post_id=<?= $comment['items_id'] ?>" onclick="return confirm('Etes vous sur de vouloir signaler le commentaire');">Signaler</a>
                    <?php } ?>

                <?php } ?>
            </div>

            <h2>Ajouter un commentaire</h2>
            <form method="POST" action="http://localhost/mvc-site/index?action=add_Comments">
                <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                <input type="text" name="pseudo" placeholder="votre pseudo" value="" class="form form-control">
                <br>
                <textarea name="commentaire" placeholder="Votre commentaire" value="" class="form form-control"></textarea><br>
                <input type="submit" name="submit_commentaire" value="poster mon commentaire" class="btn btn-primary">
            </form>
    </div>
    </section>
    </div>
</body>

</html>