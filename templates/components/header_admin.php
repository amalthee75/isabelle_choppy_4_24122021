 <header>
     <!-- <h1>Jean Forcheroche Blog</h1>
     <div class="onglets">
         <a href="http://localhost/isabelle_choppy_4_24122021/index.php">HOME</a>
         <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=logout">DECONNECTION</a>
         <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard">TABLEAU DE BORD</a>

         <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=showFormPost">AJOUTER UN POST</a>
         <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=show_Comments">COMMENTAIRES</a>

     </div>
     <i class="fa-solid fa-bars fa-2x"></i> -->
     <nav class="navbar">
         <h1>Blog - Jean Forcheroche</h1>
         <ul class="nav-menu">
             <li class="nav-item">
                 <a href="index.php" class="nav-link">Accueil</a>
             </li>
             <li class="nav-item">
                 <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=logout" class="nav-link">Déconnexion</a>
             </li>
             <li class="nav-item">
                 <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=dashboard" class="nav-link">Tableau de bord</a>
             </li>
             <li class="nav-item">
                 <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=showFormPost" class="nav-link">Ajouter un post</a>
             </li>
             <li class="nav-item">
                 <a href="http://localhost/isabelle_choppy_4_24122021/index.php?action=show_Comments" class="nav-link">Commentaires</a>
             </li>


         </ul>
         <div class="hamburger active">
             <span class="bar"></span>
             <span class="bar"></span>
             <span class="bar"></span>

         </div>
     </nav>
 </header>

 <div id="message">
     <?php include('./templates/components/message.php');
        ?>
 </div>