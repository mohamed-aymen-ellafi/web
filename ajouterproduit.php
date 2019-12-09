<?PHP 
include "../../entities/produit.php";
include "../../core/produitC.php";

if (isset($_POST['refproduit']) and isset($_POST['nomproduit']) and isset($_POST['marque']) and isset($_POST['description']) and isset($_POST['quantite']) and isset($_POST['prixproduit'])  and isset($_POST['dateajout']) and isset($_POST['refcategorie']))
    

{   
	$produit1C=new produitC();
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["urlimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["urlimage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["urlimage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["urlimage"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["urlimage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	$produit1=new produit($_POST['refproduit'],$_POST['nomproduit'],$_POST['marque'],$_POST['description'],$target_file,$_POST['quantite'],$_POST['prixproduit'],$_POST['dateajout'],$_POST['refcategorie']);
	
	$produit1C->ajouterproduit($produit1);
	header('Location: listeP.php');
}

else
{
	echo "vérifier les champs";
}
?>