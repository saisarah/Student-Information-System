$.ajax({    
        type: "GET",
        url: "modules/acc-Created.php",
        dataType: "html",                  
        success: function(data){    
            $("#table-container").html(data); 

        }
    });