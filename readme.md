# Cours sur les super globales en PHP
Exemple :
```html
<p>
    <a href="php_get.php?genre=homme">Vous êtes un homme?</a>
    <a href="php_get.php?genre=femme">Vous êtes un femme?</a>
</p>

```
Récupération des variables : 
```PHP
<?php
    if(isset($_GET["genre"])){
        $_genre = $_GET["genre"];

            //suite du code

    }
?>
```