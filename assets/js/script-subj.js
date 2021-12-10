      $.ajax({    
        type: "GET",
        url: "modules/subj-list.php",
        dataType: "html",                  
        success: function(data){                    
            $("#myTable").html(data); 
           
        }
    });
(function() {

    var app = {
        initialize: function () {
            this.addSubject.initialize();
        },
         
        addSubject: {
            initialize: function() {
                this.addSub();
            },
            addSub: function() {
                var btnAddProf = jQuery('#btnAddSubj');

                btnAddProf.click(function() {
                    var code = jQuery('#inputCode').val().toUpperCase(),
                        units = jQuery('#inputUnits').val().toUpperCase(),
                        description = jQuery('#inputDesc').val().toUpperCase(),
                        validation_message = jQuery('.alert');

                          $("#modal").validate({
                            rules: {
                              inputCode: {
                                required: true,
                              },
                              inputUnits: {
                                required: true,
                              },
                              inputDesc: {
                                required: true,
                              },
                              action: "required"
                            },
                            submitHandler: function (form) {
                              // Send details to DB
                        jQuery.ajax({
                            url: "modules/add-subj.php",
                            type: "post",
                            data: {
                                code : code,
                                units : units,
                                description : description
                            },
                            success: function(data) {
                                if (data) {
                                    validation_message.hide();
                                    alert(data);
                                    window.location.href = 'subjects.php?inserting=successfully';
                                }
                            }
                        }); // END jQuery

                            },
                            messages: {
                              inputCode: {
                                required: "Please enter some data",
                              },
                              inputUnits: {
                                required: "Please enter some data",
                              },
                              inputDesc: {
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