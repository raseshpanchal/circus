function validVendor()
{
	var myform = document.getElementById("myForm");

	if(myform.txt_name.value == "" || myform.txt_name.value == " ")
	{
		alert("Please Enter Your FullName");
		myform.txt_name.focus();
		return;
	}
	
	if(myform.txt_email.value == "" || myform.txt_email.value == " ")
	{
		alert("Please Enter Email ID");
		myform.txt_email.focus();
		return;
	}
	
	if(myform.txt_mobile.value == "" || myform.txt_mobile.value == " ")
	{
		alert("Please Enter Mobile Number");
		myform.txt_mobile.focus();
		return;
	}
	
	if(myform.txt_dob.value == "" || myform.txt_dob.value == " ")
	{
		alert("Please Enter Your Date of Birth");
		myform.txt_dob.focus();
		return;
	}
    
    if(myform.txt_dec.value == "" || myform.txt_dec.value == " ")
	{
		alert("Please Enter Description");
		myform.txt_dec.focus();
		return;
	}
}