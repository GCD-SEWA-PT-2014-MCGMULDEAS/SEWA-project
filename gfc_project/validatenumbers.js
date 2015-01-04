function validateNumber(value){
	checkvalue=parseFloat(value);
	if(value!=checkvalue){
		var txt = "Value entered here MUST be an Integer!";
		alert(txt);
		return false;
		} else
		return true;
}