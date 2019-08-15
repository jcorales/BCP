//Aceptar sólo números Ctrl+A,Ctrl+C,Ctrl+V,Ctrl+X Command+A y otras teclas funcionales
function onlyNumbers(e){
    // Allow: backspace, delete, tab, escape, enter
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
        // Allow: Ctrl+A,Ctrl+C,Ctrl+V,Ctrl+X Command+A
        ((e.keyCode == 65 || e.keyCode == 86 || e.keyCode == 67 || e.keyCode == 88) && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
}

function process(e){
    var num1 = document.getElementById("num1").value;
    var num2 = document.getElementById("num2").value;
    if(num1.length==0 || num2.length==0){
        alert("Completa los campos");
    }
    else{
        var xmlhttp = new XMLHttpRequest();
        var url = "response.php";
        var msg=true;
        xmlhttp.open("POST", url, true);
        xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send('num1='+num1+'&num2='+num2);
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.status == 200) {
                if((xmlhttp.responseText).length>0 && msg){
                    alert(xmlhttp.responseText);
                    msg=false;
                }
            }
            else{
                alert("Error enviando la información");
                return false;
            }
        }
    }
    e.preventDefault;
    return false;
}