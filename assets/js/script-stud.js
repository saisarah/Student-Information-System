      $.ajax({    
        type: "GET",
        url: "modules/stud-list.php",
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
                var btnAddStud = jQuery('#btnAddStud');

             //   btnAddStud.click(function() {
              //      var firstName = jQuery('#inputfName').val().toUpperCase(),
                  //      lastName = jQuery('#inputlName').val().toUpperCase(),
                    //    midName = jQuery('#inputmName').val().toUpperCase(),
                 //       course = jQuery('#inputCourse').val().toUpperCase(),
                    //    year = jQuery('#inputYear').val().toUpperCase(),
                 //       section = jQuery('#inputSection').val().toUpperCase(),
                    //    studNo = jQuery('#inputStudno').val(),
                    //    validation_message = jQuery('.alert');

                          $("#modal").validate({
                            rules: {
                              inputfName: {
                                required: true,
                              },
                              inputlName: {
                                required: true,
                              },
                              inputCourse: {
                                required: true,
                              },
                              inputYear: {
                                required: true,
                              },
                              inputSection: {
                                required: true,
                              },
                              inputStudno: {
                                required: true,
                                minlength: 8
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
                              inputCourse: {
                                required: "Please enter some data",
                              },
                              inputYear: {
                                required: "Please enter some data",
                              },
                              inputSection: {
                                required: "Please enter some data",
                              },
                              inputStudno: {
                                required: "Please enter some data",
                                minlength: "Student number must be 8 Characters"
                              },
                              action: "Please provide some data"
                            },
                            submitHandler: function (form) {
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
                                    window.location.href = 'student.php?registration=successfully';
                                }
                            }
                        }); //END jQuery
                    } // END SUBMIT HANDLER
                }); // END VALIDATE
                    //  });
            }
        },
        
       
    }

    jQuery(document).ready( function() {
        app.initialize();
    });

})();
