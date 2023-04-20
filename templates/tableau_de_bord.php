<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tableau de bord</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <?php include('components/header_admin.php'); ?>
  <?php include('components/message.php'); ?>


  <section id="contenu2">
    <div class="main_container">

      <h3>LISTE DES ARTICLES</h3>



      <?php foreach ($posts as $post) { ?>

        <!-- Mettre le html + les variables -->
        <div class="cadre">
          <h4 class="title_dashboard"><?= htmlspecialchars($post['title']); ?> <br> <?= htmlspecialchars($post['date_creation']); ?></h4>

          <article class=" list-dashboard">
            <p class="article"><?= htmlspecialchars($post['content']); ?></p>
          </article>
          <a class="link_dashboard" href="http://localhost/mvc-site/index.php?action=cancel_post&id=<?= $post['id'] ?>" onclick="return confirm('Confirmer la suppression');">Supprimer</a>
          <a class="link_dashboard" href="http://localhost/mvc-site/index.php?action=form_modify_Post&id=<?= $post['id'] ?>">modifier</a>

        </div>


        <!-- <a class="link_dashboard" href="http://localhost/mvc-site/index.php?action=add_Comments=<?= $post['id'] ?>">Signaler</a>

      <a class="link_dashboard" href="http://localhost/mvc-site/index.php?action=add_Comments" onclick="return confirm('commentaire signalé');"> Signaler</a> -->

      <?php
      }
      ?>


  </section>
  </div>

  <?php include('components/footer.php'); ?>

</body>

</html>