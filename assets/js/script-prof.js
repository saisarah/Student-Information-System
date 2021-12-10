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
                var btnAddProf = jQuery('#btnAddProf');

               // btnAddProf.click(function() {
                    

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
                            },
                            submitHandler: function (form) {
                                var firstName = jQuery('#inputfName').val().toUpperCase(),
                                lastName = jQuery('#inputlName').val().toUpperCase(),
                                dept = jQuery('#inputDept').val().toUpperCase(),
                                validation_message = jQuery('.alert');
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
                                            window.location.href = 'department.php?added=successfully';
                                            }
                                        }
                                        }); // END jQuery
                            }
                        });
                        // });
                    }
                },
            }

    jQuery(document).ready( function() {
        app.initialize();
    });

})();