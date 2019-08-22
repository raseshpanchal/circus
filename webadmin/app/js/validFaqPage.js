function validFaqPage()
{
	var myform = document.getElementById("myForm");

	if(myform.txt_faqTitle.value == "" || myform.txt_faqTitle.value == "0")
	{
		alert("Please Enter Faq Title");
		myform.txt_faqTitle.focus();
		return;
	}
	
	if(myform.txt_faqDesc.value == "" || myform.txt_faqDesc.value == "0")
	{
		alert("Please Enter Faq Information");
		myform.txt_faqDesc.focus();
		return;
	}
}