<?php	
$file = $_FILES['urlimage'];
	print_r($file);
	
	$fileName = $_FILES['urlimage']['name'];
	$fileTmpName = $_FILES['urlimage']['tmp_name'];
	$fileSize = $_FILES['urlimage']['size'];
	$fileError = $_FILES['urlimage']['error'];
	$fileType = $_FILES['urlimage']['type'];



	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png');

	if(in_array($fileActualExt, $allowed))
	{
		if($fileError === 0)
		{
			if($fileSize < 500000)
			{
				$fileNameNew = "produit".$idP.".".$fileActualExt;

				$fileDestination = '../views/back/images/Produits/'.$fileNameNew;

				print_r($fileDestination);

				move_uploaded_file($fileTmpName , $fileDestination);



			}else{
				echo "Your file is too big!";
			}


		}else{
			echo "There was an error uploading your file!";
		}

	}
	else
	{
		echo "You cannot upload files of this type!";
	}
	?>