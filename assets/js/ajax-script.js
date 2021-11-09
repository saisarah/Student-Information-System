
      $.ajax({    
        type: "GET",
        url: "modules/stud-list.php",
        dataType: "html",                  
        success: function(data){                    
            $("#table-container").html(data); 
           
        }
    });
