  
$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            pseudo: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Merci d\'indiquer votre pseudo'
                    }
                }
            },
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Merci d\'indiquer votre nom de famille'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Merci d\'indiquer votre prénom'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Merci d\'indiquer votre adresse email'
                    },
                    emailAddress: {
                        message: 'Merci d\'indiquer une adresse email valide'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Merci d\'indiquer votre numéro de téléphone'
                    },
                    phone: {
                        country: 'FR',
                        message: 'Merci d\'indiquer un méro de téléphone valide'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Merci d\'indiquer votre adresse'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Merci d\'indiquer votre ville'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Passworld obligatoire'
                    },
                    identical: {
                        field: 'passverif',
                        message: 'le passworld et la confirmation ne sont pas les mêmes'
                    }
                }
            },
            passverif: {
                validators: {
                    notEmpty: {
                        message: 'Passworld obligatoire'
                    },
                    identical: {
                        field: 'password',
                        message: 'le passworld et la confirmation ne sont pas les mêmes'
                    }
                }
            },
            avatar: {
                validators: {
                    notEmpty: {
                        message: 'Sélectionné un avatar'
                    },
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'Le format n\'est pas bon'
                    }
                }
            },
        }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

