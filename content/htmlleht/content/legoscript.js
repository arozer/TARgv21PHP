function noddle() {
 var b=document.getElementById("background").getContext("2d");
 b.fillStyle="#f2bc00";
 b.beginPath();
 b.arc(278, 100, 81, 0, 2*Math.PI, true);
 b.fill();
 b.fillStyle="#186931";
 b.beginPath();
b.arc(278, 122, 77, 0, 1*Math.PI);
b.fill()
b.fillStyle="#186931"

 b.beginPath();
 b.lineWidth=5;
 b.strokeStyle="#1c7d3b";
 b.moveTo(199, 125);
 b.lineTo(275, 110);
 b.lineTo(357, 125);
 b.fill()
 b.stroke();
 }
 
 function eyes() {
	 var b=document.getElementById("background").getContext("2d");
	 b.beginPath();
	 b.arc(254, 77, 17, 0, 2*Math.PI, true);
	 b.strokeStyle="black";
	 b.lineWidth=3;
	 b.stroke();
	 
	 b.beginPath();
	 b.arc(310, 77, 17, 0, 2*Math.PI, true);
	 b.strokeStyle="black";
	 b.lineWidth=3;
	 b.stroke();
	 
	 b.beginPath();
	 b.arc(254, 77, 14, 0, 2*Math.PI, true);
	 b.strokeStyle="#1f1e1c";
	 b.lineWidth=2;
	 b.stroke();
	 
	 b.beginPath();
	 b.arc(310, 77, 14, 0, 2*Math.PI, true);
	 b.strokeStyle="#1f1e1c";
	 b.lineWidth=2;
	 b.stroke();
	 
	 b.fillStyle="#1f1e1c";
	 b.beginPath();
	 b.arc(254, 77, 15, 0, 2*Math.PI, true);
	 b.fill();
 
	b.fillStyle="#1f1e1c";
	 b.beginPath();
	 b.arc(310, 77, 15, 0, 2*Math.PI, true);
	 b.fill();
	 
	 b.fillStyle="white";
	 b.beginPath();
	 b.arc(255, 75, 3, 0, 2*Math.PI, true);
	 b.fill();
	 b.fillStyle="white";
	 b.beginPath();
	 b.arc(257, 77, 3, 0, 2*Math.PI, true);
	 b.fill();
	 
	 b.fillStyle="white";
	 b.beginPath();
	 b.arc(303, 75, 3, 0, 2*Math.PI, true);
	 b.fill();
	 b.fillStyle="white";
	 b.beginPath();
	 b.arc(305, 77, 3, 0, 2*Math.PI, true);
	 b.fill();
	 
 }
 
 function brows() { 
	 var b=document.getElementById("background").getContext("2d");
	 b.beginPath();
	 b.strokeStyle="black";
	 b.moveTo(235,52);
	 b.lineTo(240, 50);
	 b.lineTo(270, 58);
	 b.lineWidth=6; 
	 b.stroke(); 
	 b.beginPath();
	 b.strokeStyle="black";
	 b.moveTo(325,52)
	 b.lineTo(320, 50);
	 b.lineTo(290, 58); 
	 b.lineWidth=6; 
	 b.stroke();
	 
}


function corps() {
	var b=document.getElementById("background").getContext("2d");
	b.beginPath();
	b.strokeStyle="black";
	b.moveTo(220, 205);
	b.lineTo(230, 180);
	b.lineTo(325,180);
	b.lineTo(335,205);
	b.lineTo(345,320);
	b.lineTo(340,330);
	b.lineTo(340,345);
	b.lineTo(225,345);
	b.lineTo(225,330);
	b.lineTo(215,320);
	b.lineWidth=3;
	b.closePath();
	b.fillStyle = 'black'; 
	b.fill();
	b.stroke();
	
	b.beginPath();
	b.moveTo(214,320)
	b.lineTo(346,320)
	
	b.strokeStyle="#186931";
	b.lineWidth=5;
	b.stroke();
	
	b.beginPath();
	b.moveTo(212,305)
	b.lineTo(338,220)
		b.strokeStyle="#186931";
	b.lineWidth=15;
	b.stroke()
}



function leftleg() {
	var b=document.getElementById("background").getContext("2d");
	b.beginPath();
	b.strokeStyle="black";
	b.moveTo(225, 345);
	b.lineTo(225, 420);
	b.lineTo(220, 420);
	b.lineTo(220, 430);
	b.lineTo(270, 430);
	b.lineTo(270, 420);
	b.lineTo(265, 420);
	b.lineTo(265, 345);
	b.lineWidth=3;
	b.closePath();
	b.fillStyle = 'black'; 
	b.fill();
	b.stroke();
}

function rightleg() {
	var b=document.getElementById("background").getContext("2d");
	b.beginPath();
	b.strokeStyle="black";
	b.moveTo(340, 345);
	b.lineTo(340, 420);
	b.lineTo(345, 420);
	b.lineTo(345, 430);
	b.lineTo(295, 430);
	b.lineTo(295, 420);
	b.lineTo(300, 420);
	b.lineTo(300, 345);
	b.lineWidth=3;
	b.closePath();
	b.fillStyle = 'black'; 
	b.fill();
	b.stroke();
}


function lefthand() {
	var b=document.getElementById("background").getContext("2d");
	b.beginPath();
	b.moveTo(220, 195);
	b.lineTo(190,195);
	b.lineTo(180, 215);
	b.lineTo(170, 295);
	b.lineTo(195, 295);
	b.lineTo(205, 235);
	b.lineTo(220,235);
	b.fillStyle = '#186931';
	b.fill();
	b.strokeStyle="black";
	b.closePath();
	b.lineWidth=3;
	b.stroke();


	b.beginPath();
	b.moveTo(183, 295);
	b.lineTo(183, 305);
	b.lineTo(170, 310);
	b.lineTo(170, 320);
	
	
	b.lineWidth=10;
	b.strokeStyle = 'black';
	b.stroke();
	
	b.beginPath();
	b.moveTo(183, 305);
	b.lineTo(196, 310);
	b.lineTo(192, 320);
	
	
	b.lineWidth=10;
	b.strokeStyle = 'black';
	b.stroke();
}

function righthand() {
	var b=document.getElementById("background").getContext("2d");
	
	b.beginPath();
	
	b.moveTo(335, 195);
	b.lineTo(365,195);
	b.lineTo(375,215);
	b.lineTo(385,295);
	b.lineTo(360,295);
	b.lineTo(350,235);
	b.lineTo(335,235);
	b.fillStyle = '#186931';
	b.fill();
	b.strokeStyle="black";
	b.closePath();
	b.lineWidth=3;
	b.stroke();

	b.beginPath();
	b.moveTo(373, 295);
	b.lineTo(375, 305);
	b.lineTo(388, 310);
	b.lineTo(388, 320);
	
	
	b.lineWidth=10;
	b.strokeStyle = 'black';
	b.stroke();
	
	b.beginPath();
	b.moveTo(375, 305);
	b.lineTo(360, 310);
	b.lineTo(365, 320);
	
	
	b.lineWidth=10;
	b.strokeStyle = 'black';
	b.stroke();
}

function koik() { 
var b=document.getElementById("background").getContext("2d");
noddle();
eyes();
brows();
corps();
lefthand();
righthand();
leftleg();
rightleg();
 
}
function kustuta() {
	var b=document.getElementById("background").getContext("2d");

	b.clearRect(0, 0, 1000, 1000);
}