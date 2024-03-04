function payvalidate(){
	var val_1 = document.getElementById("Name").value;
	var val_2 = document.getElementById("Pay").value;
	var val_3 = document.getElementById("Month").value;
	var val_4 = document.getElementById("Year").value;
	var val_5 = document.getElementById("Code").value;

	if(val_1.length == 0 || val_2.length == 0 || val_3.length == 0 || val_4.length == 0 || val_5.length == 0 ){
		alert("PLEASE FILL THE FORM");

    }else if(val_2.length < 16){
        alert("INCOMPLETE CARD NUMBER");
        event.preventDefault()

    }else if(val_3 > 12){
        alert("INVALID EXPIRE MOUNTH");
        event.preventDefault()

    }else if(val_4 < 2021){
        alert("INVALID EXPIRE YEAR");
        event.preventDefault()

    }else if(val_5.length != 3){
        alert("INCOMPLETE CVV NUMBER");
        event.preventDefault()

    }else{
		alert("PAYMENT SUCCESSFUL");
        
	}
}

function openNav() {
    document.getElementById("mySidenav").style.width = "225px";
}
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}