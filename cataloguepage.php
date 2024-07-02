<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/catalogue.css">
</head>
<body>
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
      <h2>Catalogue des logements</h2>
    </div>
    <div class="container">
      <div class="image">
          <img src="images/MLK_on_2nd_Rendering_pfnfwo.jpg" alt="Immeuble 7 Dalle">
      </div>
      <div class="details">
          <h2>Immeuble 7 Dalle</h2>
          <p>Koloma Soloprimo Nord</p>
          <table>
              <thead>
                  <tr>
                      <th>Type</th>
                      <th>Loyer</th>
                      <th>Zone</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>studio</td>
                      <td>800.000GNF/Mois</td>
                      <td>Route les princes</td>
                  </tr>
                  <tr>
                      <td>2 chambre</td>
                      <td>1.200.000GNF/Mois</td>
                  </tr>
              </tbody>
          </table>
          <div class="contact">
              Contact : 620 38 86 55
          </div>
      </div>
      </div>
          <div class="container">
            <div class="image">
                <img src="images/AFG_Finishes_-_Exteriors_1_-_Nikkitta_McCoy_wwf2sr.jpg" alt="Immeuble 5 Dalle">
            </div>
            <div class="details">
                <h2>Immeuble 4 Dalle</h2>
                <p>Koloma Marché Sud</p>
                <table>
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Loyer</th>
                            <th>Zone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>studio</td>
                            <td>800.000GNF/Mois</td>
                            <td>Corniche sudord</td>
                        </tr>
                        <tr>
                            <td>2 chambre</td>
                            <td>1.200.000GNF/Mois</td>
                        </tr>
                    </tbody>
                </table>
                <div class="contact">
                    contact : 620 38 86 55
                </div>
            </div>
        </div>
        <div class="container">
        <h2></h2>
        <p></p>
        
        <table>
            <tr id="items">
                <th>Type</th>
                <th>Loyer</th>
                <th>Zone</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM seting");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore d'employé ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <div><?=$row['batiment']?></div>
                        <div><?=$row['quartier']?></div>
                        <tr>
                            <td><?=$row['chambre']?></td>
                            <td><?=$row['loyer']?></td>
                            <td><?=$row['zone']?></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
        </div>
  <footer>
        <p>SVIKOU © 2024 • All Rights Reserved</p>
        <a href="#">Terms and conditions</a>
    </footer>
    <script>
    </script>
</body>
</html>