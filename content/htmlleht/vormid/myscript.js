function kusimustik(){
	// koik muutajad
	var name = document.getElementById("nimi").value;
	var komentaar = document.getElementById("essee").value;
	var grupp = null;
	var tundid=document.getElementById("mittu").value;
	var vast=true;
	var mail=document.getElementById("email").value
	
	//nimi kontroll
	if (name==""){
		alert("Palun Sisestage oma nimi!")
		vast =false;
	}


	// grupp kontroll
	if (tar.checked){
	var grupp = document.getElementById("tar").value;
	}
	else if(logit.checked){
		var grupp = document.getElementById("logit").value;
	}
	else{
		var grupp = document.getElementById("tit").value;
	}
	//tundid kontroll
	if (tundid == "")
	{
		alert("valige mittu tundid teil on nadalas");
		vast = false;
	}
	// e-post kontroll
	if(mail==""){
		alert("palun sisestage oma e-post");
		vast = false;
	}
		if (vast==true){
		vastus.innerHTML="Tere"+ " " + name + " " + grupp + " teie ankeet on saadetud! aitah teile!";
		}
		else {
		vastus.innerHTML= "midagi läks valesti,palun kontrolige oma vastused";
		}
}