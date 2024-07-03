<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CNKRY HOME CONNECT</title>
    <link rel="stylesheet" href="styles/budgetpage.css">
</head>
<body>
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($loyer) && isset($chambre) && isset($zone) && isset($quartier) && isset($batiment) && isset($numero) && isset($image)){
                //connexion à la base de donnée
                include_once "connexion.php";
                //requête d'ajout
                $req = mysqli_query($con , "INSERT INTO seting VALUES(NULL, '$loyer', '$chambre','$zone','$quartier','$batiment','$numero','$image')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: homepage.html");
                }else {//si non
                    $message = "";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
  <header>
      <div class="logo">
          <img src="images/lelephant.png" alt="Conakry Home Connect Logo" onclick="location.href = 'homepage.html'">
          <span class="logo-text">Conakry Home Connect</span>
      </div>
      <div class="menu-icon">
          <img src="images/menu.png" alt="Menu Icon">
      </div>
  </header>
    <div class="section">
      <h2>Etablir un plan financier</h2>
    </div>
    <main>
     <form action="" method="POST">

        <div class="budget-form">
        <section>
                <fieldset>
                    <legend>Fixez votre loyer !</legend></legend>
                    <p>Nous utiliserons vos sélections pour categoriser votre annonce sur le site</p>
                    <div class="inputerr">
                    <input type="text" id="loyer" name="loyer" placeholder="Rentrez le montant du loyer en franc guinnéen">
                   </div>
                </fieldset>
        </section>

        <section>
              <fieldset>
                  <legend>Combien de chambre avez vous ?</legend>
                  <p>Nous utiliserons vos sélections pour categoriser votre annonce sur le site.</p>
                  <div class="inputerr">
                    <input type="text" id="chambre" name="chambre" placeholder="Rentrez le nombre de chambre dont vous avez besoins">
                </div>
              </fieldset>
        </section>

        <section>
            <fieldset>
                <legend>Dans quels zones ce trouve votre bien ?</legend>
                <p>Nous utiliserons vos sélections pour categoriser votre annonce sur le site.</p>
                <div class="inputerr">
                    <input type="text" id="zone" name="zone" placeholder="Rentrez le nom de votre zone">
                   </div>
            </fieldset>
    </section>
    <section>
          <fieldset>
              <legend>Dans quels quartier ce trouve votre bien ?</legend>
              <p>Nous utiliserons vos sélections pour categoriser votre annonce sur le site.</p>
                <div class="inputerr">
                <input type="text" id="quartier" name="quartier" placeholder="Rentrez le nom du quartier oû se trove votre bien">
                </div>
          </fieldset>
  </section>

  <section>
      <fieldset>
          <legend>Nommer votre batiment !</legend>
          <p>Nous utiliserons vos sélections pour categoriser votre annonce sur le site.</p>
          <div class="inputerr">
            <input type="text" id="batiment" name="batiment" placeholder="Rentrez le nom du batiment">
            </div>
      </fieldset>
</section>

<section>
      <fieldset>
          <legend>Laissez votre numero de télephone !</legend>
          <p>Nous utiliserons vos sélections pour categoriser votre annonce sur le site.</p>
          <div class="inputerr">
            <input type="text" id="numero" name="numero" placeholder="Rentrez votre numero de télephone">
            </div>
      </fieldset>
</section>

<section>
      <fieldset>
          <legend>Ajoutez une image sur votre annonce !</legend>
          <p>Nous utiliserons vos sélections pour categoriser votre annonce sur le site.</p>
          <div class="inputs"> 
                <input type="file" name="image" id="image">

          </div>
      </fieldset>
</section>
<input type="submit" value="Ajouter" name="button" id="button">
</div>
    </form>
 </main>
    <footer>
        <p>SVIKOU © 2024 • All Rights Reserved</p>
        <a href="#">Terms and conditions</a>
    </footer>
    <script>
        
    </script>
</body>
</html>
