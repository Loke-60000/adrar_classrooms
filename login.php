<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <link rel="stylesheet" href="style/login.css">
    <title>Document</title>
</head>
<body>
    <section>
        <article id="first_section">
            <h1>ADRAR Classrooms</h1>
            <h2>Bienvenue</h2>
            <form method="POST" action="">
                <label for="mail">E-mail</label>
                <input name='mail' type="text">
                <br>
                <label for="pass">Password</label>
                <input name='pass' type="password">
                <br>
                <button id='loginbutton' type='submit' value='Submit'>Login</button>
                <br>
                <div id='connectvia'>
                    <hr>
                    <p>ou continuer avec</p>
                    <hr>
                </div>
                <div id="my-signin2"></div>
            </form> 
        </article>
        <article id="second_section">
            <div>
              <p id="comment">
                « J'étais musicien indépendant, mais <br>
                la COVID a tout stoppé. On m'a parlé <br>
                d'ADRAR Classrooms, ça m'a ouvert <br>
                des opportunités professionnelles <br>
                insoupçonnées. » <br>
              </p>
              <p id="name">Alexandre - Développeur Full-Stack Junior</p>
            </div>
            <img id="justahead" src="assets/adrar_into_the_web-verse.png" alt="" srcset="">
        </article>
    </section>


    <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 50,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>

<?php

$DB_NAME = "adrar_classrooms";
$DB_USER = "root";
$DB_PASS = "";

// Create connection
$bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>