 <?php
    // on se connecte à notre base
    $base = mysqli_connect("localhost", "root", "", "alphatech");
    ?>
 <html>

 <head>
     <title>Insertion de tibo et d'un nouveau disque dans la base</title>
 </head>

 <body>
     <?php
        // on prépare la requête
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $nm = $_POST['numero'];
        $cpt  = 0;
        $cpt++;
        $sql = 'INSERT INTO com VALUES(' . $cpt . ',' . $nom . ',' . $prenom . ',' . $nm . ')';
        // on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
        mysqli_query($base, $sql);
        // on récupère le dernier numéro inséré, soit le numéro de tibo
        $email = mysqli_insert_id($base);

        // on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
        //  $sql = 'INSERT INTO com VALUES ("' . $email . '","The player")';
        // on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
        //mysqli_query($base,$sql);
        // on ferme la connexion à la base
        mysqli_close($base);
        ?>
     Tibo vient d'être inseré dans la base, ainsi que son nouveau disque : The player des Supermen lovers.
 </body>

 </html>
