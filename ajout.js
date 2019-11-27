function test()
{
	var refp=form.refproduit.value;
	var prix=form.prixproduit.value;
	var quantite=form.quantite.value;
	var refC=form.refcategorie.value;
	var nom=form.nomproduit.value;
	var error=0;
	if(refp.length=='')
	{
		alert("le champ refproduit est obligatoire");
		error=1;
	}
	
	else if(refp[0]!='#')
	{
		alert("la référence du produit doit commencer par #");
		error=1;
	}
	
	else if(refp.charAt(1)<'A'||refp.charAt(1)>'Z')
	{  
        alert("le deuxième caractère de la référence du produit doit etre une lettre majuscule");
         error=1;
	}
		if(refC.length=='')
	{
		alert("le champ refcategorie est obligatoire");
		error=1;
	}
	
	else if(refC[0]!='#')
	{
		alert("la référence du categorie doit commencer par #");
		error=1;
	}
	
	else if(refC.charAt(1)<'A'||refC.charAt(1)>'Z')
	{  
        alert("le deuxième caractère de la référence du categorie doit etre une lettre majuscule");
         error=1;
	}
		if(nom.length=='')
	{
		alert("veuillez donner un nom à votre produit");
		error=1;
	}
	else if(nom.charAt(0)<'A'||nom.charAt(0)>'Z')
	{
		alert("le nom du produit doit commencer par une lettre majuscule");
		error=1;
	}
	 if(error!=1)
	
	{
		alert("*****");
	}
	
}