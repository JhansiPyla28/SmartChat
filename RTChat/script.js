var pswd=document.querySelector("input[type='password']"),
toggleButton=document.querySelector(".form .field i");
toggleButton.onclick=()=>{
	if (pswd.type=="password") {
		pswd.type="text";
		toggleButton.classList.add("active");
	}
	else{
		pswd.type="password";
		toggleButton.classList.remove("active");
	}
}

