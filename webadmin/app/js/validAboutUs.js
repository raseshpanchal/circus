function validAboutUs()
{
	var myform = document.getElementById("myForm");

	if(myform.txt_aboutTitle.value == "" || myform.txt_aboutTitle.value == "0")
	{
		alert("Please Enter About Us Title");
		myform.txt_aboutTitle.focus();
		return;
	}
	
	if(myform.txt_aboutDesc.value == "" || myform.txt_aboutDesc.value == "0")
	{
		alert("Please Enter About Us Information");
		myform.txt_aboutDesc.focus();
		return;
	}
}