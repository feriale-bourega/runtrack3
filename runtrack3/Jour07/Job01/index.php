<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</li>
                <li><a href="index.php">Inscription</li>
                <li><a href="index.php">Connexion</li>
                <li><a href="index.php">Rechercher</li>
            </ul>
        </nav>
    </header>

    <section>
        <form action="">
    <fieldset>
    <legend>Civilité:</legend>
    <div>
      <input type="radio" id="Monsieur" name="drone" value="Monsieur"
             checked>
      <label for="Monsieur">Monsieur</label>
    </div>
    <div>
      <input type="radio" id="Madame" name="drone" value="Madame">
      <label for="Madame">Madame</label>
    </div>
</fieldset>
<label for="firstname">Prénom:</label>
<input type="text" id="firstname" name="firstnamename" required
       minlength="4" maxlength="8" size="10">
<label for="name">Nom:</label>
<input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10"> 
<label for="address">Adresse:</label>
<input type="text" id="address" name="address">    
 <label for="mail">Email:</label>
<input type="text" id="mail" name="mail" >      
<label for="mdp">Mot de passe:</label>
<input type="text" id="mdp" name="mdp" required
       minlength="4" maxlength="8" size="10">       
<label for="cmdp">Confirmation de mot de passe:</label>
<input type="text" id="cmdp" name="cmdp" required
       minlength="4" maxlength="8" size="10">  
        
        <fieldset>
    <legend>Passions:</legend>

    <div>
      <input type="checkbox" id="informatique" name="informatique" checked>
      <label for="informatique">Informatique</label>
    </div>

    <div>
      <input type="checkbox" id="voyages" name="voyages">
      <label for="voyages">Voyages</label>
    </div>

    <div>
      <input type="checkbox" id="sport" name="sport">
      <label for="sport">Sport</label>
    </div>

    <div>
      <input type="checkbox" id="lecture" name="lecture">
      <label for="lecture">Lecture</label>
    </div>
    <button>Valider</button>
</fieldset>
</form>
    </section>

    <footer>
        <ul>
            <li><a href="index.php">Accueil</li>
            <li><a href="index.php">Inscription</li>
            <li><a href="index.php">Connexion</li>
            <li><a href="index.php">Rechercher</li>
        </ul>

    </footer>
</body>

</html>