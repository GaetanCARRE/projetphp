<!--  -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="header.css" />
    <title>Test</title>
  </head>

  <body>
    <?php
      require_once 'compteur.php';
      compteur();
    ?>
    <header>
      <h1>Connexion</h1>
    </header>
    <div class="formulaire">
    <?php
        if (isset($_GET['login_err']))
        {
            $err = htmlspecialchars($_GET['login_err']);
            switch($err)
            {
                case 'password':
                ?>
                  <div>
                      <strong>Erreur</strong> mot de passe incorrect
                  </div>
                <?php
                break;

                case 'email':
                ?>
                    <div>
                        <strong>Erreur</strong> email incorrect
                    </div>
                <?php
                break;

                case 'already':
                ?>
                  <div>
                      <strong>Erreur</strong> compte non existant
                  </div>
                <?php
                break;
            }
            
        }
        ?>
      <form action="connexion.php" method="post">
        
          <!-- <input type="text" name="pseudo" placeholder="Username" required /> -->
          <input type="email" name="email" placeholder="Email" required />
          <input type="password" name="password" placeholder="Password" required />
          <!-- <input id="passwd" name="user_passconf" placeholder="Confirm Password" required /> -->
          <button type="submit" className="button">Connexion</button>

          <a href=inscription.php>S'inscrire</a> 
       
      </form>
    </div>
  </body>
</html>