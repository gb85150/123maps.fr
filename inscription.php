<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>123maps</title>
      <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
      <h1>Inscription</h1>
      <form method="post" action="traitement.php" class="form">
        <p><label for="nom">Ton Nom.</label><br/>
          <input type="text" name="nom"><br/>
          <label for="prénom">Ton prénom.</label><br/>
          <input type="text" name="prénom"><br/>
          <label for="pseudo">Ton pseudo.</label><br/>
          <input type="text" name="pseudo"><br/>
          <label for="password">Ton mot de passe.</label><br/>
          <input type="password" name="password"><br/>
          <label for="repassword">répète ton mot de passe.</label><br/>
          <input type="password" name="repassword"><br/>
          <input type="hidden" name="connexion_ou_inscription" value="connexion">
