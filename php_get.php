<?php
    include_once "./src/head.inc.php";
?>
 
<body>
    <header>
        <h1>
            <span class="material-icons" aria-hidden="true">
                insights
            </span>
            <?= title ?> 
            <!-- print, echo  -->
            
        </h1>
    </header>
   
    <main>  
        <section>
            <p>
              
                <a href="php_get.php?civilite=homme">Vous êtes un homme?</a>
                <a href="php_get.php?civilite=femme">Vous êtes un femme?</a>
            </p>
            <p>
                <?php
                    if(isset($_GET["civilite"])){
                       $_genre = $_GET["civilite"];

                    //print $_genre;
                    echo $_genre === "femme" ?
                        '<figure>
                            <img src="./asset/femme.png" alt="femme">
                            <figcaption>
                                <h2>'.$_genre.'</h2>
                            </figcaption>
                        </figure>'
                        :
                        '<figure>
                            <img src="./asset/homme.png" alt="homme">
                            <figcaption>
                                <h2>'.$_genre.'</h2>
                            </figcaption>
                        </figure>';

                    }
                    else{
                        return false;
                    }
                    
                ?>
            </p>
        </section>
    </main>
    <?php
        include_once "./src/footer.inc.php";
    ?>
</body>
</html>