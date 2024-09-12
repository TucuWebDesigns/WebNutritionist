function validar(){
    var valoremail = document.getElementById("email1");
    var validaremail= /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
	if(!(validaremail.test(valoremail.value))){
                valoremail.focus();
                alert('Email no es valido');
                return false;
            }
  return true;    
}