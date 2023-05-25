 <header>
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