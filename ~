<!doctype html>

<html>
	<head>
		<script src="jav.js" type="text/javascript" >

</script>
		<link href="style.css"  rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="h
ttps://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" type="text/javascript" >
	function clo()
	{
		alert("<?php cnx(); ?>");
	}
	</script>
	</head>
	<body>
		<form method="POST"  action="<?php echo $_POST['email']; ?>"  >
		<br/>
		Email:<input type="text"  name="email" id="txtem" />
		<br/>
		Password :<input type="text" name="pas" id="txtpas" />
		<br/>
		<input onclick="hel()" type="submit"  name="btnadd" value="Connect" />
		<?php
			function hel()
			{
				echo "Hello world";
			}

		function fichier()	
		{			
			$re = opendir("C:\Users\ahmidi\Desktop\appscre");
				while($file = readdir($re))
				{
					echo "<br/>";
					echo $file;
					echo "<br/>";				
				}
	
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";

			if(is_file("ad.txt"))
			{
				echo "this is file";
			}else{
				echo "this is not fille";
			}
			
	//			 $db = mysqli_connect("localhost","root","","tp");
	//			$quer = "select * from personne";
		}	
			function cnx()
			{

				$dbb = mysqli_connect("localhost","root","","con");
				$qr = "select * from  con";
				$ress = mysqli_query($dbb,$qr);

				while($roww = mysqli_fetch_array($ress,MYSQLI_NUM))
				{
					echo "Versal";
					if($_POST['email'] == $roww[0] && $_POST['pas']== $roww[1])
					{
						//echo "Yes Ahmidi";
						//header("");
					}
				}
			}
//			$res = mysqli_query($db,$quer);	
	
//			$count = mysqli_num_rows($res);
//			echo "<br/>";
			//
			//echo $count;
			/*
			echo "<br/>";
			echo "<br/>";
			echo "<table border='2' class='table table-dark' >";
			echo "<th class='cc' > Numero</th>";
			echo "<th class='cc'>Nom</th>";
			echo "<th class='cc' >Prenom</th>";
			echo "<th class='cc' >Telephone</th>";
			if ($row = mysqli_fetch_array($res,MYSQLI_NUM))
			{
				echo "<tr>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "</tr>";


			} 
			echo "</table>";


		?>
			<br/>
			<br/>
			<h1>Form d Ajouter de Personne:</h1>
			<br/>
		<form method="POST"  >
			<label>id</label><input type="text" name="id"  id="txtid" />
			<br/>
			<label>nom</label><input type="text" name="nom" id="txtnom" />
			<br/>
			<label>Prenom:</label><input id="txtpr" name="pr" type="text" />
			<br/>
			<label>Telephone</label><input type="text" id="txttele" name="tele" />
			<br/>
			<?php


			 */
		?>
			<button name="add" onclick="<?php echo cl(); ?>" type="submit" id="btnadd" >Add</button>
			<?php
				function cl(){
					if(!isset($_POST['submit']))
					{

						$id = $_POST['id'];
						$nom = $_POST['nom'];
						$prenom = $_POST['pr'];
						$tele = $_POST['tele'];
						$query = "INSERT INTO personne values ($id,$nom,$prenom,$tele)";
						if($res = mysqli_query($db,$query))
						{
							print "Ajouter";
						}
						else
						{
							print "Null Ajoute";
						}
					}
				}
			
			?>
		</form>
	</body>
</html>
