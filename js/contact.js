$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                   
                },
                subject: {
                    required: true,
                    
                },
                number: {
                    required: true,
                    
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    
                }
            },
            messages: {
                name: {
                    required: "Vous n'avez pas inséré votre prénom",
                
                },
                subject: {
                    required: "Vous n'avez pas inséré de sujet",
                   
                },
                number: {
                    required: "Numéro ?",
                    
                },
                email: {
                    required: "Vous n'avez pas inséré votre email",
                },
                message: {
                    required: "Vous n'avez pas rempli la case ci-dessus",
                   
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})