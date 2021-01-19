function pay_validate1(){
    if(document.getElementById('cardNumber').value.length!=16)
        alert('Invalid Card Number');
    if(document.getElementById('expityMonth').value>12 || document.getElementById('expityMonth').value<0)
        alert('Invalid Month');
}

function validate_card(){
    if(document.getElementById('cardNumber').value.length>16){
        alert('Invalid Card Number');
        document.getElementById('cardNumber').value="";
    }
}

function validate_month(){
    if(document.getElementById('expityMonth').value>12 || document.getElementById('expityMonth').value<0)
        alert('Invalid Month');
}

function validate_cvv(){
    if(document.getElementById('cvCode').value.length==3){
        pay_validate1();
    }
}