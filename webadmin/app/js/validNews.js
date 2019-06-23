function validNews()
{
	var myform = document.getElementById("myForm");

	if(myform.txt_title.value == "" || myform.txt_title.value == " ")
	{
		alert("Please Enter News Title");
		myform.txt_title.focus();
		return;
	}

	if(myform.txt_desc.value == "" || myform.txt_desc.value == " ")
	{
		alert("Please Enter News Details");
		myform.txt_desc.focus();
		return;
	}

}