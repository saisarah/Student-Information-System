(function() {
    
    var app = {
        initialize: function () {
            this.login.initialize();
            this.showPass.initialize();
            this.createAcc.initialize();
            this.generatePass.initialize();
        },
         generatePass: {
            initialize: function() {
                this.generatingPass();
            },
            generatingPass: function() {
                var btnGenerate = jQuery('#btnGenerate'),
                    eyeIcon = jQuery('.far');
                    btnEye = jQuery('#btnShowPass');

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
        showPass: {
            initialize: function() {
                this.showingPass();
            },
            showingPass: function() {
                var btnShow = jQuery('#btnShowPass'),
                    eyeIcon = jQuery('.far');
                                       
                btnShow.click(function() {
                    eyeIcon.removeClass('fa-eye fa-eye-slash');
                    var txtShow = document.getElementById("txtGenerated");  
                    if (txtShow.type === "password") {
                        eyeIcon.addClass('fa-eye');
                        txtShow.type = "text";
                    }
                    else{
                        eyeIcon.addClass('fa-eye-slash');
                        txtShow.type = "password";
                    }
                    
                });
            }
        },
        createAcc: {
            initialize: function() {
                this.registerNewUser();
            },
            registerNewUser: function() {
                var btnCreateAcc = jQuery('#btnCreateAcc');

                btnCreateAcc.click(function() {
                    var username = jQuery('#username').val(),
                        password = jQuery('#txtGenerated').val(),
                        userType = jQuery('#userType').val(),
                        FNProf = jQuery('#FNProf').val(),
                        validation_message = jQuery('.alert');

                        var firstName = FNProf.split(' ').slice(0, -1).join(' ').toUpperCase();
                        var lastName = FNProf.split(' ').slice(-1).join(' ').toUpperCase();

                        // Send details to DB
                        jQuery.ajax({
                            url: "modules/register-acc.php",
                            type: "post",
                            data: {
                                username : username,
                                password : password,
                                userType : userType,
                                firstName : firstName,
                                lastName : lastName
                            },
                            success: function(data) {
                                if (data) {
                                    validation_message.hide();
                                    alert(data);
                                    window.location.href = 'manageAcc.php?registration=' + data;
                                }
                            }
                        });
                    
                });
            }
        },
        login: {
            initialize: function() {
                this.checkToShow();
            },
            checkToShow: function() {
                checkShow = jQuery('#checkShow');

                checkShow.click(function(){
                    var password = document.getElementById("password");  
                    if (password.type === "password") {
                        password.type = "text";
                    }
                    else{
                        password.type = "password";
                    }
                });
            }
        }
       
    }

    jQuery(document).ready( function() {
        app.initialize();
    });

})();