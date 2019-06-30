<?php
  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', '');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'site_cv');
  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  if (isset($_POST["ajouter"])) {
  	if ($name = $_POST["name"]) {
  		if ($date = $_POST["date"]) {
  			$sql = "INSERT INTO experience (name, date) VALUES('".$name."', '".$date."')";
  			mysqli_query($mysqli, $sql);
  		}
  	}  
  }
  else if (isset($_POST["supprimer"])) {
  	if ($id = $_POST["id"]) {
  		$sql = "DELETE FROM experience WHERE id = '".$id."'";
  		mysqli_query($mysqli, $sql);
  		
  	}
  } 
?>

<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
<body>
  <h2 class="display-3">Expériences</h2>  </tbody>
  
<form action="index.php" method="post">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">numéro</th>
      <th scope="col">name</th>
      <th scope="col">date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  
  <?php
$sql = "SELECT * FROM experience";
if($result = mysqli_query($mysqli, $sql)){
$num = 1;
while($row = mysqli_fetch_array($result)){
    echo '<tr>';
      echo '<th scope="row">'.$num.'</th>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td>'.$row['date'].'</td>';
      echo '<td>';
      echo '<input name="id" type="hidden" value="'.$row['id'].'">';
    echo '<button type="submit" name="supprimer" class="btn btn-primary">Supprimer</button>';
      echo '</td>';
    echo '</tr>';
$num +=1;      
      
}
}
?>
</tbody>
</table>
</form>
<form action="index.php" method="post">
<h3 class="display-5">Ajouter une expérience:</h3>  

  <div class="form-group">
    <label>Nom expérience:</label>
    <input type="text" class="form-control" name="name" placeholder="Nom expériences">
  </div>
  <div class="form-group">
    <label>Date:</label>
    <input type="text" class="form-control" name="date" placeholder="Année">
  </div>
  <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
</form>
</body>
</html>

<?php
  $mysqli->close();
?>