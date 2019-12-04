function test()
{
	var refp=form.refproduit.value;
	var prix=form.prixproduit.value;
	var quantite=form.quantite.value;
	var refC=form.refcategorie.value;
	var nom=form.nomproduit.value;
	var description=form.description.value;
	var marque=form.marque.value;
	var url=form.urlimage.value;
	var x=true;
	if(refp.length=='')
	{
		alert("le champ refproduit est obligatoire");
		x=false;
		
	}
	 if(((refp.length>4)||(refp.length<4))&&(refp.length!=''))
	{
        alert(" la référence du produit doit contenir 4 caractère");
        x=false;
	}
	   if((refp[0]!='#')&&(refp.length!=''))
	{
		alert("la référence du produit doit commencer par #");
		x=false;
	}
	
	  if((refp.charAt(1)<'A'||refp.charAt(1)>'Z')&&(refp.length!='')&&(refp[0]=='#'))
	{  
        alert("le deuxième caractère de la référence du produit doit etre une lettre majuscule");
         x=false;
	}
    
	  if(nom.length=='')
	{
		alert("veuillez donner un nom à votre produit");
		x=false;
	}
	   if((nom.charAt(0)<'A'||nom.charAt(0)>'Z')&&(nom.length!=''))
	{
		alert("le nom du produit doit commencer par une lettre majuscule");
		x=false;
	}
	  if(marque.length=='')
	{
          alert("le champ marque est obligatoire");
          x=false;
	}
	 if(description.length=='')
	{
		alert("champ description obligatoire");
		x=false;
	}
	 if(url.length=='')
	{
		alert("donnez l'url de l'image");
		x=false;
	}
	 if(quantite.length=='')
	{
		alert("le champ quantite  est obligatoire");
		x=false;
	}
	 if((quantite<1)&&(quantite.length!=''))
	{
		alert("la quantite du produit doit etre supérieure à 1");
		x=false;
	}
	if(prix.length=='')
	{
		alert("le champ prix produit est obligatoire");
		x=false;
	}
if(refC.length=='')
	{
		alert("le champ refcategorie est obligatoire");
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
	return x;
	
	
}


