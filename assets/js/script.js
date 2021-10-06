(function() {

    var app = {
        initialize: function () {
            this.login.initialize();
            this.generatePass.initialize();
        },
         generatePass: {
            initialize: function() {
                this.generatingPass();
            },
            generatingPass: function() {
                var btnGenerate = jQuery('#btnGenerate');

                btnGenerate.click(function() {
                    
                       

                    var length = 8,
                        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
                        retVal = "";
                        for (var i = 0, n = charset.length; i < length; ++i) {
                        retVal += charset.charAt(Math.floor(Math.random() * n));
                    }
                    jQuery('#txtGenerated').val(retVal);
                });
            }
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
                        validation_message.html('Incorrect username or password');
                            
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