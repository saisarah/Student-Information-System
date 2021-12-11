$.ajax({ 
  type: "GET",
  url: "modules/sched-list.php",
  dataType: "html",
  success: function(data){
    $("#table-container").html(data);
  }
});
(function() {
  var app = {
    initialize: function () {
      this.addSchedule.initialize();
     // this.searchCode.initialize();
    },
    searchCode: {
            initialize: function() {
                this.searchForCode();
            },
            searchForCode: function() {
                var btnSearch = jQuery('#btnSearch');

                btnSearch.click(function() {
                   inputCode = jQuery('#inputCode').val().toUpperCase();
                   inputDesc = jQuery('#inputCode').val().toUpperCase();

                        jQuery.ajax({
                          url: "modules/add-sched.php",
                          type: "post",
                          data: {
                            inputCode : inputCode
                          },
                          success: function(data){
                            if (data) {
                              alert(data);
                              window.location.href = 'schedule.php?added=successfully';
                            }
                          }
                        });
                      });
              }
            },
    addSchedule: {
      initialize: function() {
        this.addNewSchedule();
      },
      addNewSchedule: function() {
      
        var btnAddSched = jQuery('#btnAddSched');
        $("#modal").validate({
          rules: {
          inputCode: {
            required: true,
          },
          inputInstructor: {
            required: true,
          },
          inputDay: {
            required: true,
          },
          inputStart: {
            required: true,
          },
          inputEnd: {
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
          action: "required"
        },
        messages: {
          inputCode: {
            required: "Enter code",
          },
          inputInstructor: {
            required: "Please enter some data",
          },
          nputDay: {
            required: "Please enter some data",
          },
          inputStart: {
            required: "Please enter some data",
          },
          inputEnd: {
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
          action: "Please provide some data"
        },
        submitHandler: function (form) {
          var code = jQuery('#inputCode').val().toUpperCase(),
          instructor = jQuery('#inputInstructor').val().toUpperCase(),
          day = jQuery('#inputDay').val().toUpperCase(),
          start = jQuery('#inputStart').val().toUpperCase(),
          end = jQuery('#inputEnd').val().toUpperCase(),
          course = jQuery('#inputCourse').val(),
          year = jQuery('#inputYear').val(),
          section = jQuery('#inputSection').val().toUpperCase();
          var firstName = instructor.split(' ').slice(0, -1).join(' ').toUpperCase();
          var lastName = instructor.split(' ').slice(-1).join(' ').toUpperCase();
          // Send details to DB
          jQuery.ajax({
          url: "modules/add-sched.php",
          type: "post",
          data: {
            code : code,
            firstName : firstName,
            lastName : lastName,
            instructor : instructor,
            day : day,
            start : start,
            end : end,
            course : course,
            year : year,
            section : section
          },
          success: function(data){
            if (data) {
              alert(data);
              window.location.href = 'schedule.php?added=successfully';
            }
            }
          });
        }
      });
      }
    },
  }
  jQuery(document).ready( function() {
    app.initialize();
  });
})();