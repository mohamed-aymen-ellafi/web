function cat()
{
	var refC=f.ref.value;
	var nom=f.nomcategorie.value;
	var x=true;
if(refC.length=='')
	{
		alert("le champ référence catégorie est obligatoire");
		x=false;
	}
	
	if((refC[0]!='#')&&(refC.length!=''))
	{
		alert("la référence du categorie doit commencer par #");
		x=false;
	}
	
	  if((refC.charAt(1)<'A'||refC.charAt(1)>'Z')&&(refC.length!='')&&refC[0]=='#')
	{  
        alert("le deuxième caractère de la référence du categorie doit etre une lettre majuscule");
         x=false;
	}
    if(nom.length=='')
	{
		alert("veuillez donner un nom à votre catégorie");
		x=false;
	}
	
	return x;
}