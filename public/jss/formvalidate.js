(function ($, W, D)
{
     
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function ()
        {
           // $("#loader").fadeIn(500);
			//form validation rules
            $("#get_in_touch").validate({
                rules: {
                    username: "required",
                    email: "required"
                },
                messages: {
                    username: {
                        required: "Please enter username."
                    },
                    email: {
                        required: "Please enter your email address."
                    }
                    
                },
                submitHandler: function (form) {
                   $("#contact_loader").fadeIn(500);
                    $.ajax({
                                type: $(form).attr("method"),
                                url: $(form).attr("action"),
                                data: $(form).serialize(),
                                success: function(result){
                              
                                
                                 if(result == 'done'){ 


                                    window.location.replace("http://www.travelomatix.com/thank.html");

                                    // $("#get_in_touch").trigger("reset");
                                    // $("#contact_loader").fadeOut(500);
                                    // $("#get_in_touch").find("#success_msg").fadeIn(1000);
                                    // $("#get_in_touch").find("#success_msg").fadeOut(3000);
                                }else{
                                   // alert("asdgsaugduygsa");
                                }
                                }
                     });
                }
            });
        }
    },
        //when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

})(jQuery, window, document);
(function ($, W, D)
{
    
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function ()
        {
            //$("#loader").fadeIn(500);
			//form validation rules
            $("#basic_plan").validate({
                rules: {
                    username: "required",
                    email: "required"
                },
                messages: {
                    username: {
                        required: "Please enter username."
                    },
                    email: {
                        required: "Please enter your email address."
                    }
                    
                },
                submitHandler: function (form) {
                    $("#basic_plan_loader").fadeIn(500);
                    $.ajax({
                                type: $(form).attr("method"),
                                url: $(form).attr("action"),
                                data: $(form).serialize(),
                                success: function(result){
                                 if(result == 'done'){ 
                                    window.location.replace("http://www.travelomatix.com/thank.html");
                                    // $("#basic_plan").trigger("reset");
                                    // $("#basic_plan_loader").fadeOut(500);
                                    // $("#basic_plan").find("#basic_success_msg").fadeIn(1000);
                                    // $("#basic_plan").find("#basic_success_msg").fadeOut(3000);


                                    }else{
                                        //alert(" ");
                                    }
                                }
                     });
                }
            });
        }
    },
        //when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

})(jQuery, window, document);
(function ($, W, D)
{
    
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function ()
        {
            //
			//form validation rules
            $("#pro_plan").validate({
                rules: {
                    username: "required",
                    email: "required"
                },
                messages: {
                    username: {
                        required: "Please enter username."
                    },
                    email: {
                        required: "Please enter your email address."
                    }
                    
                },
                submitHandler: function (form) {
                    $("#pro_plan_loader").fadeIn(500);
                    $.ajax({
                                type: $(form).attr("method"),
                                url: $(form).attr("action"),
                                data: $(form).serialize(),
                                success: function(result){
                                 if(result == 'done'){

                                 window.location.replace("http://www.travelomatix.com/thank.html"); 
                                    // $("#pro_plan").trigger("reset");
                                    // $("#pro_plan_loader").fadeOut(500);
                                    // $("#pro_plan").find("#pro_success_msg").fadeIn(1000);
                                    // $("#pro_plan").find("#pro_success_msg").fadeOut(3000);


                                    }else{
                                        $("#pro_plan").trigger("reset");
                                    $("#pro_plan_loader").fadeOut(500);
                                    $("#pro_plan").find("#pro_success_msg").fadeIn(1000);
                                    $("#pro_plan").find("#pro_success_msg").fadeOut(3000);

                                    }
                                }
                     });
                }
            });
        }
    },
        //when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

})(jQuery, window, document);
(function ($, W, D)
{
    
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function ()
        {
          //  
			//form validation rules
            $("#premium_plan").validate({
                rules: {
                    username: "required",
                    email: "required"
                },
                messages: {
                    username: {
                        required: "Please enter username."
                    },
                    email: {
                        required: "Please enter your email address."
                    }
                    
                },
                submitHandler: function (form) {
                    $("#premium_plan_loader").fadeIn(500);
                    $.ajax({
                                type: $(form).attr("method"),
                                url: $(form).attr("action"),
                                data: $(form).serialize(),
                                success: function(result){

                                 if(result == 'done'){ 

                                    window.location.replace("http://www.travelomatix.com/thank.html");
                                    // $("#premium_plan").trigger("reset");
                                    // $("#premium_plan_loader").fadeOut(500);
                                    // $("#premium_plan").find("#premium_success_msg").fadeIn(1000);
                                    // $("#premium_plan").find("#premium_success_msg").fadeOut(3000);


                                    }else{
                                       
                                    }
                                }
                     });
                }
            });
        }
    },
        //when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

})(jQuery, window, document);
(function ($, W, D)
{
    
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function ()
        {
            
			//form validation rules
            $("#platinum_plan").validate({
                rules: {
                    username: "required",
                    email: "required"
                },
                messages: {
                    username: {
                        required: "Please enter username."
                    },
                    email: {
                        required: "Please enter your email address."
                    }
                    
                },
                submitHandler: function (form) {
                    $("#platinum_plan_loader").fadeIn(500);
					$.ajax({
                                type: $(form).attr("method"),
                                url: $(form).attr("action"),
                                data: $(form).serialize(),
                                success: function(result){
                                 if(result == 'done'){ 
                                    window.location.replace("http://www.travelomatix.com/thank.html");
                                    // $("#platinum_plan").trigger("reset");
                                    // $("#platinum_plan_loader").fadeOut(500);
                                    // $("#platinum_plan").find("#platinum_success_msg").fadeIn(1000);
                                    // $("#platinum_plan").find("#platinum_success_msg").fadeOut(3000);


                                    }else{
                                        $("#reqst_demo").trigger("reset");
                                    $("#demo_loader").fadeOut(500);
                                    $("#reqst_demo").find("#request_success_msg").fadeIn(1000);
                                    $("#reqst_demo").find("#request_success_msg").fadeOut(3000);
                                    }
                                }
                     });
                }
            });
        }
    },
        //when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

})(jQuery, window, document);
(function ($, W, D)
{
    
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function ()
        {
            
			//form validation rules
            $("#reqst_demo").validate({
                rules: {
                    username: "required",
                    email: "required"
                },
                messages: {
                    username: {
                        required: "Please enter username."
                    },
                    email: {
                        required: "Please enter your email address."
                    }
                    
                },
                submitHandler: function (form) {
					$("#demo_loader").fadeIn(500);
                    $.ajax({
                                
								type: $(form).attr("method"),
                                url: $(form).attr("action"),
                                data: $(form).serialize(),
                                success: function(result){
                                 if(result == 'done'){ 
                                    window.location.replace("http://www.travelomatix.com/thank.html");
                                    // $("#reqst_demo").trigger("reset");
                                    // $("#demo_loader").fadeOut(500);
                                    // $("#reqst_demo").find("#request_success_msg").fadeIn(1000);
                                    // $("#reqst_demo").find("#request_success_msg").fadeOut(3000);


                                    }else{
                                        $("#reqst_demo").trigger("reset");
                                    $("#demo_loader").fadeOut(500);
                                    $("#reqst_demo").find("#request_success_msg").fadeIn(1000);
                                    $("#reqst_demo").find("#request_success_msg").fadeOut(3000);
                                    }
                                }
                     });
                }
            });
        }
    },
        //when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

})(jQuery, window, document);