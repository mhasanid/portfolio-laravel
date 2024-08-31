// JavaScript Document

function checkValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    
    return pattern.test(emailAddress);
};

var mailsendstatus;
function userSendMailStatus(uname, uemail, umsg, ucaptcha) {
	// checking for some valid user name
	if(!uname) {
		$("#namelabel").children(".err").fadeIn('slow');
	}
	else if(uname.length > 3) {
		$("#namelabel").children(".err").fadeOut('slow');		
	}
	
	// checking for valid email
	if(!checkValidEmailAddress(uemail)) {
		$("#emailabel").children(".err").fadeIn('slow');
	}
	else if(checkValidEmailAddress(uemail)) {
		$("#emailabel").children(".err").fadeOut('slow');	
	}
	
	// checking for valid message
	if(!umsg) {
		$("#msglabel").children(".err").fadeIn('slow');
	}
	else if(umsg.length > 5) {
		$("#msglabel").children(".err").fadeOut('slow');
	}
	
	// ajax check for captcha code
	$.ajax(
		{
			type: 'POST',
			url: 'captcha/captcha_check.php',
			data: $("#contact").serialize(),
			success: function(data) {
				if(data == "false") {
					mailsendstatus = false;
					$("#captchalabel").children(".err").fadeIn('slow');
				}
				else if(data == "true"){
					$("#captchalabel").children(".err").fadeOut('slow');
					
					if(uname.length > 3 && umsg.length > 5 && checkValidEmailAddress(uemail)) {
						// in this case all of our inputs look good
						// so we say true and send the mail
						mailsendstatus = true;
						
						$("#subber").html('<img src="captcha/load.gif" alt="loading...">');

						$.ajax(
							{
								type: 'POST',
								url: 'sendmail.php',
								data: $("#contact").serialize(),
								success: function(data) {
									if(data == "yes") {
									$(".contact-form").slideUp(650, function(){
										$(this).before("<div class='successmsg'><span class='fa fa-check'></span> Yep your mail has been sent!</div>");
									});
									}
								}
							}
						); // close sending email ajax call	
					} // close if logic for mailsendstatus true
				} // close check CAPTCHA return true
			} // close ajax success callback function
		} // close ajax bracket open
	);
	
	return mailsendstatus;
}

$(document).ready(function(){
	$("#contact").submit(function() { return false; });
	
	$("#submitlink").bind("click", function(e){
		var usercaptvalue = $("#captchavalue").val();
		var subnamevalue  = $("#name").val();
		var emailvalue    = $("#email").val();
		var msgvalue      = $("#message").val();
		
		
		var postchecks = userSendMailStatus(subnamevalue, emailvalue, msgvalue, usercaptvalue);
	});
	$("#name").on('keyup',function(){
		  $("#namelabel").children(".err").fadeOut("slow");
		});
	$("#email").on('keyup',function(){
		  $("#emailabel").children(".err").fadeOut("slow");
		});
	$("#message").on('keyup',function(){
		  $("#msglabel").children(".err").fadeOut("slow");
		});	
	$("#captchavalue").on('keyup',function(){
		  $("#captchalabel").children(".err").fadeOut("slow");
		});	
	
	//setTimeout('changeCap()',3000);
});

function changeCap(){ 
	$("#captchaimg").attr("src","captcha/captcha.php?sid=" + Math.random());	
	}