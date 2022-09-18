/------------------JS------------------/
 
var currency=document.getElementById("currency");
var input=document.getElementById("inputnumber");
var answer=document.getElementById("answer");

 
const DOLLAR=1.22;
const RUB=84.56;
const SEK=10.16;
const POUND=0.86;
 
 
function changeEvent(){
    var inputValue=input.value;
    if(dollar.checked){
        answer.innerHTML=calculate(inputValue, DOLLAR)+ " $";
        
    }else if(krona.checked){
        answer.innerHTML=calculate(inputValue, SEK)+ " SEK";
        
    }else if(rouble.checked){
        answer.innerHTML=calculate(inputValue, RUB)+ " rub";
    }else if(pound.checked){
        answer.innerHTML=calculate(inputValue, POUND)+ " £";
    }
}
 
function calculate(val, currency){
    
    return (val*currency).toFixed(4);
}