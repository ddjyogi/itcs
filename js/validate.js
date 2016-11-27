// JavaScript Document
function validate()
{
	//Fetching values of all the fields
    var fname = document.getElementById("first_name").value;	
    var lname = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var company = document.getElementById("company").value;
    var message = document.getElementById("message").value;
	var rpo = document.getElementById("rpo").value;
	var bis = document.getElementById("bis").value;
	var techs = document.getElementById("techs").value;
	var fis = document.getElementById("fis").value;	
	
	//Error variable declared based on ID of span
	var errfn = document.getElementById("errfn");
	var errln = document.getElementById("errln");
	var errcmp = document.getElementById("errcmp");
	var erremail = document.getElementById("erremail");
	var errph = document.getElementById("errph");
	var errchbx = document.getElementById("errchbx");
	var errmsg = document.getElementById("errmsg");
	
    
    var emailreg = /^[a-zA-Z0-9._-]+\@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$/; ///^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/;
    
    if(fname==="")
    {	        
		errfn.style.visibility = 'visible';
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
	//else if(email==="" || email.match(emailreg)){
//			erremail.style.visibility = 'visible';
//			return false;
//	}
	else if(phone==="" || phone.length!=10){
			errph.style.visibility = 'visible';
			return false;
	}
	else if(document.getElementById("rpo").checked!=true){
		if(document.getElementById("bis").checked!=true){
			 if(document.getElementById("techs").checked!=true){
				if(document.getElementById("fis").checked!=true){
			errchbx.style.visibility = 'visible';
			return false;
				}
			}
		}	
	}
	else if(message==="" || message.length<2 && message.length>250){
			errmsg.style.visibility = 'visible';
			return false;
	}	
    else
    {
        return true;
    }
		
}