 // validate js
 $("#myForm").validate({
     rules: {
         username: {
             required: true,

             // normalizer: function(value) {
             //     return $.trim(value);
             // }
         }
     },
     messages: {
         username: "Please Enter username",
         email: "Please Enter valid Email"
     },
     //  errorElement: '.form-error',
     errorLabelContainer: '.errorTxt'

 });