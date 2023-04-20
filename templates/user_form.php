<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <?php include('components/header.php');
    ?>

    <div class="main_container">
        <?php include('components/message.php') ?>
        <!-- Afficher la variable $title dans un h1  -->
        <h1><?php echo $title; ?></h1>

        <!-- Ajouter la valeur de la variable $formAction à l'attribue action de la balise form  -->
        <form id="form_connexion" action="<?php echo $formAction; ?>" method="POST">
            <div id="div_form">
                <div>
                    <input name="email" type="email" id="email" placeholder="email">
                    <input name="password" type="password" id="password" placeholder="password">
                </div>
                <input type="submit" id="connect" value="OK">
            </div>
        </form>
    </div>

    <?php include('components/footer.php') ?>
</body>

</html>