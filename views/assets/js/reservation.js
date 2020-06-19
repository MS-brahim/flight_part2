$(document).ready(function() {
    $("#submit").click(function() {
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var numPassport = $("#numPassport").val();
        
        
        if(fname.length == "")
            {
            $("#helpfname").text("Please enter your first name !");
            $("#fname").focus();
            return false;
            }
            else if(lname.length == "")
            {
            $("#helplname").text("Please enter your last name !");
            $("#lname").focus();
            return false;
            }
            else if(email.length == "")
            {
            $("#helpemail").text("Please enter your adress email !");
            $("#email").focus();
            return false;
            }
            else if(phone.length == "")
            {
            $("#helpTel").text("Please enter your number phone !");
            $("#phone").focus();
            return false;
            }
            else if(numPassport.length == "")
            {
            $("#helpPassport").text("Please enter your passport number !");
            $("#numPassport").focus();
            return false;
            }
            
        
    });
    
});