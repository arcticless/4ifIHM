
	var valeur_origine =0;

	var valeur = valeur_origine
	var x;
	function Init()	
	{
		window.document.getElementById('compteurSec').innerHTML=valeur;
		window.document.getElementById('compteurMin').innerHTML=valeur;
		x = window.setInterval('Decompte()', 1000);//300
	}
	
	function Decompte()	
	{
		++valeur ;
		window.document.getElementById('compteurSec').innerHTML = valeur%60;
		window.document.getElementById('compteurMin').innerHTML = Math.floor(valeur/60);
		
	}
	
	window.onload = Init;