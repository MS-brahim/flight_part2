$(document).ready(function() {
    $("#submit").click(function() {
        var fly = $("#fly").val();
        var dep = $("#depart").val();
        var arv = $("#arrival").val();
        var t_dep = $("#d_depart").val();
        var t_arv = $("#d_arrival").val();
        var pr = $("#prix").val();
        var plc = $("#place").val();
        
        if(fly.length == "")
            {
            $("#helpFly").text("Airplane name");
            $("#fly").focus();
            return false;
            }
            else if(dep.length == "")
            {
            $("#helpD").text("Departure from");
            $("#depart").focus();
            return false;
            }
            else if(arv.length == "")
            {
            $("#helpA").text("Arrival from ");
            $("#arrival").focus();
            return false;
            }
            else if(t_dep.length == "")
            {
            $("#helpTD").text("Date departure ");
            $("#d_depart").focus();
            return false;
            }
            else if(t_arv.length == "")
            {
            $("#helpTA").text("Date arrival ");
            $("#d_arrival").focus();
            return false;
            }
            else if(pr.length == "")
            {
            $("#helpPR").text("Price ");
            $("#prix").focus();
            return false;
            }
            else if(plc.length == "")
            {
            $("#helpPC").text("Number Place ");
            $("#place").focus();
            return false;
            }
        // else
        //     {
        //         // $("#ok").text("successfully completed");
        //         // $("#ok").css("color ", "green");
            
        //     alert("Successfully Completed");

        // }
    });
    
});