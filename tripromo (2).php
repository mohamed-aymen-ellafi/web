<?php 
include "../../core/promotionP.php";

$promotionP1 = new promotionP(); 
$listepromotion=$promotionP1->tripromotion();
?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Admin alibaba page</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Alibaba Music</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <form action="rechercher.php" method="post">

                                <input class="form-control" name="adress" type="text" placeholder="Search..">
                                <input type="submit" hidden name="submit">
                                </form>

                            </div>
                        </li>
                         <li>
                                    <div id="google_translate_element"></div>

                                </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                    
                                    </div>
                                </li>
                                <li>
                                    
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                               
                            </ul>
                            
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="..\..\entities\chat\Logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>

                </div>
            
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="commande.php" ><i class="fa fa-fw fa-user-circle"></i>Order and delivery<span class="badge badge-success">6</span></a>
                            
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../chat/index.php"   ><i class="fa fa-fw fa-rocket"></i>Chat between admin</a>
                         </li>       
                          <li class="nav-item">
                                <a class="nav-link" href="livrasion.php"   ><i class="fa fa-fw fa-user-circle"></i>Delivrer</a>
                         </li>       
                              
                 
                  
                
                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Stock<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                           
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="listeP.php">Afficher la liste des Produits</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ajout.php">Ajouter Produit</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="modifierP.php">Modifier Produit</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="supprimerP.php">Supprimer Produit</a>
                                                    </li>
                                                  
                                                </ul>
                                            
                                        </li>

                        
                                        
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                          
                                               <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>promotion</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="promotion.php">promotions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="fidelite.php">fidelite</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            
                            
                               <li class="nav-item">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa fa-fw fa-user-circle"></i>Catégorie<span class="badge badge-success">6</span></a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                         <li class="nav-item">
                                            <a class="nav-link" href="afficherPr.php">Afficher la liste des catégories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ajoutC.php">Ajouter Catégorie</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modifierC.php">Modifier Catégorie</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="afficherC.php">Supprimer Catégorie</a>
                                        </li>
                                        
                                       
                                        
                                    </ul>
                                </div>
                            </li>
                         
                           
                           
                        </ul>
                    </div>
                
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Promotions</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Reclamations</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Promotions</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <form  method="POST" action="ajouterpromotion.php">
                                     
<tr>
<th>reference</th>
    <th>reference_produit</th>
    <th>dateDebut</th>
    <th>dateFin</th>
    <th>pourcentage</th>
    <th>ajouter</th>

</tr>
<td> <input type="number" name="reference" required="" id="reference"> </td> 

<td> <select name="id_produit">
 <option> <?php
$host='localhost';
$user2='root';
$pass='';
$db='alibaba';

$co = new PDO("mysql:host=$host;dbname=$db", $user2, $pass);
 $sql = "SELECT * FROM produit";
$query=$co->prepare($sql);
$query->execute();
while($data=$query->fetch())
{
    echo "<option>";
echo $data['refproduit'];
echo "</option>";
}

  ?>  

</select> </td> 
<td> <input type="date" name="dateDebut" required="" min="1998-12-12" id="datefield"></td> 
<td><input type="date" name="dateFin" required="" min="1998-12-12" id="datefield2"></td> 
<td><input type="number" name="pourcentage" required="" id="pourcentage" max="80">
 
<td> <input type="submit" name="submit" value="submit"> </td>  




</tr>



</form>
                
                     </table>
                     </div>
                     </div>
                     </div> 
                     </div>

                               </div>         <br>


                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">affichage promotion</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                     
<tr>
    <th> reference</th>
    <th>id_produit</th>
    <th>date debut</th>
    <th>date fin</th>
    <th>pourcentage</th>


    <th>supprimer</th>
    <th>modifier</th>
   <th><button><a href="tripromo.php">tri par date</a></button></th>

</tr>

<?php foreach($listepromotion as $row){
    
?>
    <tr>
    <td><?PHP echo $row['reference']; ?> </td>
    <td><?PHP echo $row['id_produit']; ?> </td>
    <td><?PHP echo $row['dateDebut']; ?> </td>
    <td><?PHP echo $row['dateFin']; ?> </td>
    <td><?PHP echo $row['pourcentage']; ?> </td>

    <td>
        <form method="POST" action="supprimerpromotion.php">
    <input type="submit" name="supprimer" value="supprimer">
        <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference" >


        </form>
    </td>
    <td>
              <button>
                  <a href="modifierpromotion.php?reference=<?php echo $row['reference'];?>" target="_blank">modiffier</a>
              </button>

    </tr>

    <?PHP }
?>
                
                     </table>
                     </div>
                     </div>
                     </div>
                     </div>

                               </div>         




                       
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
              
                  
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>

    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
/<script type="text/javascript"> 
    var today=new Date();
    var dd=today.getDate()+1;
        var dd2=today.getDate()+2;

    var mm=today.getMonth ()+1; 
    var yyyy=today.getFullYear () ;
    if ( dd<10) { dd='0'+dd
    } 
if (mm<10){ mm='0'+mm 
} 
today =yyyy+'-'+mm+'-'+dd ; 
if (mm<10){ mm='0'+mm 
} 

 if ( dd2<10) { dd2='0'+dd2
    }
today2 =yyyy+'-'+mm+'-'+dd2 ; 

document.getElementById("datefield").setAttribute("min",today);
    document.getElementById("datefield2").setAttribute("min",today2);

</script>
</body>
</html>