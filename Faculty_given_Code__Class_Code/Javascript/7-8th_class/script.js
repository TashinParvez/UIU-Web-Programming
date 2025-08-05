function calculateBill(){
    let quantity = Number(document.getElementById('quantity').value);
    let hd = document.getElementById('karim').checked;
    let loc = document.getElementById('loc').value;
    let tip = Number(document.getElementById('tip').value);
    let bill = quantity * 12.5;
    if(quantity>=1 && quantity <=9){
        bill = bill*0.95;
    }
    else if(quantity>=10 && quantity <=19){
        bill = bill*0.90;
    }
    else if(quantity>=20){
        bill = bill*0.85;
    }
    if(hd){
        bill = bill + 40.0;
    }
    if(loc == "dhaka"){
        bill = bill * 1.20;
    }
    else{
        bill = bill * 1.15;
    }
    bill = bill + tip;

    document.getElementById('lbl1').innerText = bill;
    
}