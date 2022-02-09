<!-- Fichier permettant d'afficher les données présentes dans la base de données -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>base</title>
</head>
<body>
	<div>

		<!-- Création du tableau -->
		<table style="border-collapse: collapse;">
			<caption>Noms de villes contenues dans la base de données</caption>
			<tr style="border: 2px solid black; background-color: gray;">
			<th>Nom de villes</th>
			</tr>
			<!-- Création de la boucle pour afficher l'ensemble des départements -->
			@foreach ($n as $dep) 
			<tr style="border: 2px solid black; text-align: center;">
				<td>{{$dep}}</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>