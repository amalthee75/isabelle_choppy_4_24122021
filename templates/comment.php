<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des commentaires</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include('components/header_admin.php');
    ?>
    <section>

        <div id="contenu2">
            <div class="main_container">
                <h5 id="title">COMMENTAIRES</h5>
                <?php

                if ($listComments) {
                    foreach ($listComments as $listComment) {
                ?>
                        <div class="container_comments">
                            <h5 class="pseudo"><?= htmlspecialchars($listComment["id"]) . ' ' . htmlspecialchars($listComment["pseudo"]); ?></h5><br>
                            <p class="comment"><?= htmlspecialchars($listComment["commentaire"]) ?></p>
                            <button type="submit" class=supprimer><a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=cancel_Comments&comment_id=<?= $listComment["id"] ?>" onclick=" return confirm('Confirmer la suppression');">Supprimer</a></button>
                            <!-- bouton signaler -->


                            <?php if ($listComment["signaler"] == 1) { ?>
                                <span>Déjà signalé</span>
                                <button type="submit" class=designaler><a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=cancel_signal_Comments&comment_id=<?= $listComment['id'] ?>&post_id=<?= $listComment['items_id'] ?>" onclick=" return confirm('designaler le commentaire');">Designaler</a></button>
                        </div>

                    <?php } ?>
            <?php

                    }
                }
            ?>
            </div>
    </section>
    </div>

    <?php include('components/footer.php');
    ?>
</body>

</html>