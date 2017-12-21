
function validatesignup()
{
var letters = /^[A-Za-z]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 


if(document.signup.email.value == "")
	{
		alert("please enter email");
		document.signup.email.focus();
		return false;
	}
	 if(!(document.signup.email.value.match(mailformat)))  
	{  
		alert("You have entered an invalid email address!");  
		document.signup.email.focus();  
		return false; 
	}  
else 
 if(!(document.signup.gender[0].checked) && !(document.signup.gender[1].checked) && !(document.signup.gender[2].checked))
	{
		alert("Please select gender");
		return false;
	}
else if(document.signup.pswd.value == "")
	{
		alert("please enter password");
		document.signup.pswd.focus();
		return false;
	}

else if(document.signup.mob.value == "")
	{
		alert("please enter mobile no");
		document.signup.mob.focus();
		return false;
	}
else if(isNaN(document.signup.mob.value)||document.signup.mob.value.indexOf(" ")!=-1)

/*The isNaN() function determines whether a value is an illegal number (Not-a-Number).
The indexOf() method returns the position of the first occurrence of a specified value in a string.It is case sensitive.
This method returns -1 if the value to search for never occurs.*/

			{
              alert("mobile number must be numeric")
              return false; 
			}
else if ((document.signup.mob.value.length < 10) || (document.signup.mob.value.length > 10))
			{
                alert("mobile number must be of 10 digits");
                return false;
			}
else if ((document.signup.mob.value.charAt(0)!="9") && (document.signup.mob.value.charAt(0)!="8") && (document.signup.mob.value.charAt(0)!="7"))
           
/*The charAt() method returns the character at the specified index in a string.
The index of the first character is 0, the second character is 1, and so on.*/
		   
		   {
                alert("mobile number must start with 9 or 8 or 7");
                return false;
           } 

	return true;

}




function validatelogin()
{
var letters = /^[A-Za-z]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 


if(document.login.email.value == "")
	{
		alert("please enter email");
		document.login.email.focus();
		return false;
	}
	else if(!(document.login.email.value.match(mailformat)))  
	{  
		alert("You have entered an invalid email address!");  
		document.login.email.focus();  
		return false; 
	}  

else if(document.login.pswd.value == "")
	{
		alert("please enter password");
		document.login.pswd.focus();
		return false;
	}
	return true;
}