
 <script type="text/javascript">

function checkMail(){
	email = document.getElementById("email").value;
	at_check = email.indexOf('@');
	dot_check = email.indexOf('.');

	if (email.length == 0) {
		alert("Enter your Email / Username");
		return false;
	}else if(at_check < 0){
		alert("Make sure your Email is Valid!");
		return false;
	}else if (dot_check < 0){
		alert("Make sure your Email is Valid!");
		return false;
  }else{
		alert("Good Email!");
    return false;
	}
}

function check_name(){
    var name = document.getElementById("fname").value;
      if(name.length > 4){
      	document.getElementById("err_name").innerHTML = '';
        return true;
      }else{
        document.getElementById("err_name").innerHTML = 'Enter 5-30 char name';
        return false;
    }
}
  function check_lname(){
    var lname = document.getElementById("lname").value;
      if(lname.length > 4){
      	document.getElementById("err_lname").innerHTML = '';
        return true;
      }else{
        document.getElementById("err_lname").innerHTML = 'Enter 5-30 char Surname';
        return false;
    }
}

</script>