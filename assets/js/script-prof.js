      $.ajax({    
        type: "GET",
        url: "modules/prof-list.php",
        dataType: "html",                  
        success: function(data){                    
            $("#table-container").html(data); 
           
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
                var btnAddStud = jQuery('#btnAddProf');

                btnAddStud.click(function() {
                    var firstName = jQuery('#inputfName').val().toUpperCase(),
                        lastName = jQuery('#inputlName').val().toUpperCase(),
                        dept = jQuery('#inputDept').val().toUpperCase(),
                        validation_message = jQuery('.alert');

                          $("#modal").validate({
                            rules: {
                              inputfName: {
                                required: true,
                              },
                              inputlName: {
                                required: true,
                              },
                              inputDept: {
                                required: true,
                              },
                              action: "required"
                            },
                            submitHandler: function (form) {
                              // Send details to DB
                        jQuery.ajax({
                            url: "modules/add-prof.php",
                            type: "post",
                            data: {
                                firstName : firstName,
                                lastName : lastName,
                                dept : dept
                            },
                            success: function(data) {
                                if (data) {
                                    validation_message.hide();
                                    alert(data);
                                    window.location.href = 'department.php?registration=' + data;
                                }
                            }
                        }); // END jQuery

                            },
                            messages: {
                              inputfName: {
                                required: "Please enter some data",
                              },
                              inputlName: {
                                required: "Please enter some data",
                              },
                              inputDept: {
                                required: "Please enter some data",
                              },
                              action: "Please provide some data"
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