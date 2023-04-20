<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
    <!-- lien pour formulaire ammélioré-->

    <script src="https://cdn.tiny.cloud/1/cwvud3do0c7l5n1njgwuuo3lg7whx3vho453aetiad5pwz6w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    <script>
        tinymce.init({
            selector: 'textarea#content',


        });
    </script>
    <!-- <script type="text/javascript">
        tinyMCE.init({
            // type de mode
            mode: "exact",
            // id ou class, des textareas appelés
            elements: "content",
            // en mode avancé, cela permet de choisir les plugins
            theme: "advanced",
            // langue
            language: "fr",
            // liste des plugins
            theme_advanced_toolbar_location: "top",
            theme_advanced_buttons1: "bold,italic,underline,strikethrough,sup,forecolor,separator," +
                "justifyleft,justifycenter,justifyright,justifyfull,formatselect," +
                "bullist,numlist,outdent,indent,separator,cleanup,|,undo,redo,|,",
            theme_advanced_buttons2: "",
            theme_advanced_buttons3: "",
            height: "250px",
            width: "600px"
        });
    </script> -->

    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <?php include('./templates/components/header_admin.php');

    ?>
    <div class="main_container">
        <form class="form" action="http://localhost/mvc-site/index.php?action=add_post" method="POST">
            <input type="text" id="title" name="title" placeholder="titre" />
            <input type="submit" id="envoyer">

            <textarea name="content" id="content" cols="30" rows="10">Hello</textarea>

            <!-- <tinymce-editor api-key="cwvud3do0c7l5n1njgwuuo3lg7whx3vho453aetiad5pwz6w" name="Subject" id="Subject">
        </tinymce-editor> -->

            <input type="submit" value="OK">

        </form>
        <!-- 
    <tinymce-editor api-key="cwvud3do0c7l5n1njgwuuo3lg7whx3vho453aetiad5pwz6w" name="Subject" id="Subject">
    </tinymce-editor> -->

        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
            if ($POST["content"]) :
        ?>
            <?= var_dump($_POST['content']);
            ?>


        <?php endif; ?>
        <?php if (isset($message)) {
            echo $message;
        } ?>
        </p>

        <script>
            // tinymce.init({
            //     selector: '#content',

            // });
        </script>
    </div>
    <?php include('./templates/components/footer.php');

    ?>
</body>

</html>