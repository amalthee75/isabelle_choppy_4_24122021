<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog_ecrivain</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include("components/header.php"); ?>
    <div class="main_container">
        <section id="bio_author">
            <div class="biographie">
                <div class="left">
                    <img src="images/pigeon.jpg" alt="pigeon">
                </div>
                <div class="right">

                    <h6>BIOGRAPHIE</h6>
                    <p class="description">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                </div>
            </div>
        </section>

        <section class="articles">
            <?php foreach ($posts as $post) { ?>
                <article class="article">
                    <p class="date"><?= $post["date_creation"] ?></p>
                    <h5><a href="http://localhost/mvc-site/index.php?action=form_modify_Post&id=19"><?= $post["title"] ?></a></h5>
                    <p class="description"><?= $post["content"] ?></p>
                    <p class="auteur">Jean Forteroche</p>
                </article>
            <?php } ?>
        </section>
    </div>

    <?php include("components/footer.php"); ?>

</body>

</html>