    


    var myIndex = 0;
	show();

	function show() {
    var i;
    var x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(show, 3000);
	}

    function signup() {
        alert("you have regitered");
    }

    function login() {
        alert("login successfull!");
    }

    function valdate() {
       var usertext = document.getElementById("username");
       var passtext = document.getElementById("password");
       var confirmtext = document.getElementById("confirm");
       if (usertext.value == "" || passtext.value == "" || confirmtext.value == "") {
        alert("please fill up.");
        usertext.focus();
        return false;
       }

        if (passtext.value.length < 8 ) {
        alert("please enter a password max. of 8 characters!");
        passtext.focus();
        passtext.style.border = "solid 3px red";
        return false;
    }
       
       if (passtext.value != confirmtext.value) {
            alert("password do not match!");
            passtext.focus();
            passtext.style.border = "solid 3px red";
            confirmtext.style.border = "solid 3px red";
            return false;
       }
    }

    function lgvaldate() {
        var lGusertext = document.getElementById("usernameLG");
       var lGpasstext = document.getElementById("passwordLG");
       if (lGusertext.value == "" || lGpasstext.value == "") {
        alert("please fill up");
        lGusertext.focus();
        return false;
       }
    }

   





