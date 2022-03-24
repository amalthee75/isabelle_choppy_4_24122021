<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-ecrivain</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
</head>
<body>
    <div id="general">

     </header>
     <div id="entete">
            <div class="titre">
                <h2>Jean Forteroche - Acteur, écrivain</h2>
            </div>
    <nav class="onglets">
        <ul>
            <li><a href="#">Inscription</a></li>
            <li><a href="#">Connection</a></li>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">contact</a></li>
            </ul>
        </nav>
    </div>

</header>

<section>
    <div id="ecrits">
        <article>
            <h3>27/12/2021 - Mon dernier voyage</h3>
               <figure>
            <img  class="portfolio1" src="images/milandes.JPG" alt="milandes">
        </figure>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </article>
        <br>
        <!-- Biographie -->
        <aside>
            <figure>
                <img src="images/banniere.jpg" alt="banniere">
            </figure>
            <h3 class="titre-biographie">Biographie</h3>
       
            <p class="biography">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </aside>
    </div>
        <!-- Mettre un commentaire avec formulaires -->
          <form method="post" action="traitement.php">

          <fieldset>
              <legend>Ecrivez un commentaire</legend>
                <textarea name="" id="" cols="30" rows="5"></textarea><br>
                <label for="pseudo">Identifiant</label>
                <input type="text" name="pseudo" id="pseudo" placeholder="identifiant"><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email"><br>
                <input type="submit" id="envoyer" value="Envoyer">
          </fieldset>
      </form>
</section>
  <!-- transition tiret -->
<div id="tiret"></div>
  <!-- Les photos -->
<section>
        <!-- <h4 class ="titre2">26/12/2021</h4> <h4 class ="titre2">25/12/2021</h4>  <h4 class ="titre2">24/12/2021</h4>   -->
         <ul id= "titre2">
             <li>26/12/2021
                <figure>
                <img  class="portfolio" src="images/milandes.JPG" alt="milandes">
                </figure>
             </li>
             <li>25/12/2021
                <figure>
                <img class ="portfolio" src="images/paysage-perigord1.JPG" alt="perigord">
            </figure>

             </li>
             <li>24/12/2021
            <figure>
            <img  class="portfolio" src="images/pissenlits.JPG" alt="pissenlits">
        </figure>
             </li>
        </ul>  
        
 
    

    <div id="photos">


    <p class="articlesAnciens">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
    </p>

       <p class="articlesAnciens">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
    </p>

       <p class="articlesAnciens">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
    </p>


        <!-- <figure>
            <img  class="portfolio" src="images/milandes.JPG" alt="milandes">
        </figure>
        <figure>
            <img class ="portfolio" src="images/paysage-perigord1.JPG" alt="perigord">
        </figure>
        <figure>
            <img  class="portfolio" src="images/pissenlits.JPG" alt="pissenlits">
        </figure> -->
    </div>
</section>
    
    <!-- Footer -->
<footer>
    <div id="basdepage">
    <ul>
        <li> <a href="jean.forteroche@gmail.com"><i class="fas fa-envelope-square  fa_custom fa-2x"></i></a></li>
        <li><a href="https://facebook.com"><i class="fab fa-facebook-f fa_custom fa-2x"></i></a></li>
        <li><a href="https://twitter.com"><i class="fab fa-twitter fa_custom fa-2x"></i></a></li>
        <li><a href="https://instagram.com"><i class="fab fa-instagram fa_custom fa-2x"></i></a></li>
        <li><a href="https://telegram.com"><i class="fab fa-telegram fa_custom fa-2x"></i></a></li>
    </ul>
    </div>



</footer>

</div>
</body>
</html>