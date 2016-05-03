/**
 * 
 */

function addFunctions()
{
	
	var email = document.getElementById("email")
	email.onblur = validEmail
	var password = document.getElementById("pwd")
	password.onblur = validPwd
	var fName = document.getElementById("FN")
	fName.onblur = validfName
	var lName = document.getElementById("LN")
	lName.onblur = validlName
	var phone = document.getElementById("phone")
	phone.onblur = validPhone
	
}
function validEmail()
{
	var isValidEmail = false;
	var name = document.getElementById("email")
	var msg = document.getElementById("errEmail")
	
	if(name.value=="")
		msg.innerText="Email is required"
		else if (/.+\@.+\..+/.test(name.value))
		{
			msg.innerText=""
			isValidEmail = true
			}
			else 
			msg.innerText="Please enter a valid Email"
	return isValidEmail
}
function validPwd()
{
	var isValidPwd = false;
	var pwd = document.getElementById("pwd")
	var msg = document.getElementById("errPass")
	
	if(pwd.value=="")
		msg.innerText="Password is required"
			else
				{
				msg.innerText=""
				isValidPwd = true
				}
	return isValidPwd
}
function validfName()
{
	var isValidName = false;
	var name = document.getElementById("FN")
	var msg = document.getElementById("errFN")
	
	if(name.value=="")
		msg.innerText="First name is required"
		else if (/[^A-Z][^a-zA-Z]+$/.test(name.value))
			msg.innerText="Please enter a valid Name"
			else 
				{
				msg.innerText=""
				isValidName = true
				}
	return isValidName
}
function validlName()
{
	var isValidName = false;
	var name = document.getElementById("LN")
	var msg = document.getElementById("errLN")
	
	if(name.value=="")
		msg.innerText="Last name is required"
		else if (/[^A-Z][^a-zA-Z]+$/.test(name.value))
			msg.innerText="Please enter a valid Name"
			else 
				{
				msg.innerText=""
				isValidName = true
				}
	return isValidName
}
function validPhone()
{
	var isValidPhone = false;
	var name = document.getElementById("phone")
	var msg = document.getElementById("errPhone")
	
	if(name.value=="")
		msg.innerText="Phone Number is required"
		else if (/^[0-9()-]+$/.test(name.value))
			msg.innerText="Please enter a valid Phone Number"
			else 
				{
				msg.innerText=""
				isValidPhone = true
				}
	return isValidPhone
}
function allvalid()
{
	return validEmail() && validPwd() && validfName() && validlName && validPhone
}
function allvalid2()
{
	return validEmail() && validfName() && validlName && validPhone
}