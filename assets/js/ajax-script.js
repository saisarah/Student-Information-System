
      $.ajax({    
        type: "GET",
        url: "modules/dashboard.php",
        dataType: "html",                  
        success: function(data){                    
            $("#table-stud").html(data); 
           
        }
    });
      $.ajax({    
        type: "GET",
        url: "modules/dashboard1.php",
        dataType: "html",                  
        success: function(data){                    
            $("#table-prof").html(data); 
           
        }
    });
      $.ajax({    
        type: "GET",
        url: "modules/acc-Created.php",
        dataType: "html",                  
        success: function(data){                    
            $("#myTable").html(data); 
           
        }
    });
