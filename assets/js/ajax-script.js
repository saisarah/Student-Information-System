      $.ajax({    
        type: "GET",
        url: "modules/stud-list.php",
        dataType: "html",                  
        success: function(data){                    
            $("#table-container").html(data); 
           
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
(function() {

    var app = {
        initialize: function () {
            this.createAcc.initialize();
        },
         
        createAcc: {
            initialize: function() {
                this.registerNewUser();
            },
            registerNewUser: function() {
                var btnAddStud = jQuery('#btnAddStud');

                btnAddStud.click(function() {
                    var firstName = jQuery('#inputfName').val().toUpperCase(),
                        lastName = jQuery('#inputlName').val().toUpperCase(),
                        midName = jQuery('#inputmName').val().toUpperCase(),
                        course = jQuery('#inputCourse').val().toUpperCase(),
                        year = jQuery('#inputYear').val().toUpperCase(),
                        section = jQuery('#inputSection').val().toUpperCase(),
                        studNo = jQuery('#inputStudno').val(),
                        validation_message = jQuery('.alert');

                        

                        // Send details to DB
                        jQuery.ajax({
                            url: "modules/add-stud.php",
                            type: "post",
                            data: {
                                firstName : firstName,
                                lastName : lastName,
                                midName : midName,
                                course : course,
                                year : year,
                                section : section,
                                studNo : studNo
                            },
                            success: function(data) {
                                if (data) {
                                    validation_message.hide();
                                    alert(data);
                                    window.location.href = 'student.php?registration=' + data;
                                }
                            }
                        });
                    
                });
            }
        },
        
       
    }

    jQuery(document).ready( function() {
        app.initialize();
    });

})();
