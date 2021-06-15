<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceG2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Formulaire</h1>
    <form method="post" action="index2.php">
        <label for="civilite">Civilité</label>
             <input type="text" id="civilite" name="civilite" placeholder="civilité" required></br>
        <label for="name">Nom</label>
             <input type="text" id="name" name="nom" placeholder="votre nom" required></br>
        <label for="surname">Prénom</label>
            <input type="text" id="surname" name="prenom"placeholder="votre prénom" required></br>
      <button type="submit" onclick=sendInfos()>envoyer</button>
<script>     
function sendInfos(){
  const civilite = document.getElementbyId('civilite').value;  
  const name = document.getElementById('name').value;
  var surname = document.getElementById('surname').value;
  confirm('informations remplies: prénom: ' + surname + '\n' + 'nom: ' + name + '\n' + 'civilité' + civilite);
};
</script>


    </form>
</body>
</html>