const form=document.querySelector(".login form"),
continueButton=form.querySelector(".button input"),
errorText=form.querySelector(".error-text");
form.onsubmit=(e)=>{
	e.preventDefault();
}
continueButton.onclick=()=>{
	let xhr=new XMLHttpRequest();
	xhr.open("POST","loginn.php",true);
	xhr.onload=()=>{
		if(xhr.readyState===XMLHttpRequest.DONE){
			if(xhr.status===200){
				let data=xhr.response;
				if(data=="success"){
					location.href="users.php";
				}
				else{
					errorText.style.display="block";
					errorText.textContent=data;
				}
			}
		}
	}
	let formData=new FormData(form);
	xhr.send(formData);
}