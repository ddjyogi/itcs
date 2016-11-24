// JavaScript Document
function validate()
{
    var fname = document.getElementById("first_name").value;	
    var lname = document.getElementById("last_name").value;
    //var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var company = document.getElementById("company").value;
    var message = document.getElementById("message").value;
	//var spans = document.getElementsByTagName("span");
	var errfn = document.getElementById("errfn");
	var errln = document.getElementById("errln");
	var errcmp = document.getElementById("errcmp");
	//var erremail = document.getElementById("erremail");
	var errph = document.getElementById("errph");
    
    //var emailreg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/;///^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$/ 
    
    if(fname==="")
    {	        
		errfn.style.visibility = 'visible';
		alert(fname);
		return false;
	}
	else if(lname===""){
			errln.style.visibility = 'visible';		
			return false;		
	}	
	else if(company===""){
			errcmp.style.visibility = 'visible';
			return false;
	}
	//else if(email==="" || email.match!= emailreg){
//			erremail.style.visibility = 'visible';
//			return false;
//	}
	else if(phone==="" || phone.length!=10){
			errph.style.visibility = 'visible';
			return false;
	}    
    else
    {
        return true;
    }
		
}