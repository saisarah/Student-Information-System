(function() {

    var app = {
        initialize: function () {
            this.login.initialize();
        },
        
        login: {
            initialize: function() {
                this.checkUserLogin();
            },
            checkUserLogin: function() {
                var btnlogin = jQuery('#btnlogin');

                btnlogin.click(function() {
                    var username = jQuery('#username').val(),
                        password = jQuery('#password').val(),
                        validation_message = jQuery('.alert');

                    // Refresh warning message appearance
                    validation_message.removeClass('warning success');

                    // Check fields
                    if (username == "" || password == "") {
                        
                        validation_message.addClass('alert-danger');
                        validation_message.html('Username or password cannot be blank');
                            
                    } else {
                        // Send details to DB
                        jQuery.ajax({
                            url: "modules/admin-login.php",
                            type: "post",
                            data: {
                                username : username,
                                password : password
                            },
                            success: function(data) {
                                if (data) {
                                    validation_message.hide();
                                    window.location.href = 'admin.php?login=' + data;
                                } else {
                                    alidation_message.addClass('alert-danger');
                                    validation_message.html('The username and password you entered isn’t connected to an account. Please try again.');
                                }
                            }
                        });
                    }
                });
            }
        }
    }

    jQuery(document).ready( function() {
        app.initialize();
    });

})();