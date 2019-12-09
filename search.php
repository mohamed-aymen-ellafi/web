<?php
include "config.php";
include "stock.php";

try
{
 $bdd = new PDO("mysql:host=localhost;dbname=alibaba", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET['s']) AND $_GET["s"] == "Rechercher")
{
  
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET['terme'];
 

 if (isset($terme))
 {

  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT nomproduit,quantite,prixproduit,urlimage FROM produit WHERE nomproduit LIKE ? OR prixproduit LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%"));

 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
else
{
  $select_terme = $bdd->prepare("SELECT * FROM produit ");
  $select_terme->execute(array("%","%","%","%"));
 
}
?>


   <div class="search-content">
       <form action = "verifform.php" method = "GET">
          <input type = "search" name = "terme">
          <input  type = "submit" name = "s" value="Rechercher">
                                           
        </form>
  <?php
  
  while($terme_trouve = $select_terme->fetch())
  {
      ?>  
      <div class="element" id="columns" >
         <figure>
                 <h4><?php echo $terme_trouve['quantite']; ?></h4>
                <p><?php echo $terme_trouve ['prixproduit']; ?></p>
                <div  ><?php echo $terme_trouve['description']; ?></div>
                <p><?php echo $terme_trouve ['nomproduit']; ?></p>
                                </figure>     
                                        
       </div>
                        
                                
                             
                             
                           
                    


                  <?php
  
  }
  $select_terme->closeCursor();
   ?>