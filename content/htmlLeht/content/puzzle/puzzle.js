var choiced="tuhi.jpg";
var lopp = false;

function failname(nub){
    var imgname=document.getElementById("osa" + nub).src;
    imgname=imgname.split("/").pop();
    return imgname;
}
function victoryconditions(){
    if (failname(1)=="amog1.jpg" &&
        failname(2)=="amog2.jpg" &&
        failname(3)=="amog3.jpg" &&
        failname(4)=="amog4.jpg" &&
        failname(5)=="amog5.jpg" &&
        failname(6)=="amog6.jpg" &&
        failname(7)=="amog7.jpg" &&
        failname(8)=="amog8.jpg" &&
        failname(9)=="amog9.jpg")
    {return true;}
}

//установка  на поле и отображение на поле части пазла
function mouseclicked(image){
    image.src=choiced;
    if (victoryconditions()){
        alert("suurepärane");
        lopp=true;
    }
}
//выбор  и отображение пазла
function imagechoice(image){
    if(lopp){
        images=document.images;
        for(var i=0; i<images.length; i++){
            images[i].src="tuhi.jpg";
        }
        lopp=false;
    }
    choiced=image.src;
    document.getElementById("valitudpilt").src=choiced;
}

