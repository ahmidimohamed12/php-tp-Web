<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>Form De project xml</h1>
<?php


	require("vers.php");
	
	hello();
	echo "Summe : ".summe(2,3);
	echo "<br/>";
	echo "<br/>";
	//db project 
	$db = mysqli_connect("localhost","root","","tp");
	
	//mysql_select_db($db,"personne");
	$qu = "select * from personne";
	$result  = mysqli_query($db,$qu);
	echo "<br/>";
	echo "<h3>Afficher data en BD</h3>";
	echo "<br/>";
	if ($result)
	{
		echo "<table border='2' >";
		echo "<th>ID</th>";
		echo "<th>nom</th>";
		echo "<th>prenom</th>";
		echo "<th>Telephone</th>";
		while($row =  mysqli_fetch_array($result,MYSQLI_NUM))
		{
			echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "</tr>";
		}
		echo "</table>";
	}else{
		print "Not Create";
	}

	//if ($resul = mysqli_query($qu))
	//{
	//	echo "Create  Db";
	//	}else{
		//echo "Not Create";
	//}		
   	echo "<h3>Afficher d une fichier xml</h3>";
	//simplexml_load_file pour Lire le fichier xml
    	$xml =  simplexml_load_file("personnes.xml");
    	//pour afficher les Node de fichier personne.xml

    	/*  echo $xml->personne[0]->nom;
    	echo $xml->personne[0]->prenom;
    	echo $xml->personne[0]->age;
    	echo "<br/>";
    	echo "<br/>";

    	echo $xml->personne[1]->nom;
    	echo $xml->personne[1]->prenom;
   	echo $xml->personne[1]->age;
	*/

    	//boucle foreach pour afficher tous les nom des personne.
    	echo "<table border='1' >";
    	echo "<th>First Name</th>";
    	echo "<th>Last Name</th>";
    	echo "<th>Age</th>";
    	echo "<th>Telphone</th>";
    	foreach ($xml->children()  as $b) {
        	echo "<tr>";
        	echo "<td style='color:Red' >  $b->nom </td>";
        	echo "<td style='color:Red' >$b->prenom</td>";
        	echo "<td style='color:Red' > $b->age </td>";
		echo "<td style='color:#00FF2Ai'>$b->telephone</td>";
		echo "</tr>";
    	}


    	echo "</table>";
    ?>
</body>

</html>
