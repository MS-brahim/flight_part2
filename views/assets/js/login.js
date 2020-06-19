$(document).ready(function() {
    $("#login").click(function() {
        var email = $("#emailLogin").val();
        var pass = $("#passLogin").val();

        if(email.length == ""){
            $("#emailLogin").focus();
            return false;
        }
        else if(pass.length == ""){
            $("#passLogin").focus();
            return false;
        }
    });
});
        