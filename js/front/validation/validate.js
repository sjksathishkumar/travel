// When the browser is ready...    
/*$.validator.setDefaults({
    submitHandler: function(form) {
        fireFormEvent(form);
        //form.submit();
    }
});*/

// For Non Ajax Forms
    $.validator.setDefaults({
        submitHandler: function(form) {
            switch($(form).attr('id')){
                case 'member-signin-form':
                    fireMemberLoginEvent(form);
                    break;
                case 'deals-review-form':
                    fireUserReviewEvent(form);
                    break;
                case 'user-login-form':
                    fireUserLoginEvent(form);
                    break;
                default:
                    form.submit();
                    break;
            }
            
        }
    });

$.extend($.validator.messages, {
    equalTo: "Value doesn't match the password field",
});
$.validator.addMethod("zipValidate", function(value, element)
{
    return this.optional(element) || value == value.match(/^\d{5}(?:-\d{4})?$/);
});
$.validator.addMethod("urlValidate", function(value, element)
{
    return this.optional(element) || value == value.match(/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i);
});
$.validator.addMethod("alphabetsOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z]+$/);
});
$.validator.addMethod("alphaNumeric", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z0-9]+$/);
});
$.validator.addMethod("phoneValidate", function(value, element) {
    return this.optional(element) || value == value.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
});
$.validator.addMethod("phoneValidateUS", function(value, element) {
    value = value.replace(/\s+/g, "");
    return this.optional(element) || value.length > 9 &&
            value.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
});
$.validator.addMethod("faxValidate", function(value, element) {
    return this.optional(element) || value == value.match(/^\+?[0-9]{6,}$/);
});
$.validator.addMethod("custAccPhoneNumberValidate", function(value, element) {
    return this.optional(element) || value == value.match(/^[0-9]{10,10}$/) || value == value.match(/^[0-9]{16,16}$/);
});
$.validator.addMethod("merchantID", function(value, element) {
    return this.optional(element) || value == value.match(/^[0-9]{16,16}$/);
});
$.validator.addMethod("alphabetsAndSpaceOnly", function(value, element)
{
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
});
$.validator.addMethod("floatValue", function(value, element)
{
    return this.optional(element) || value == value.match(/^(?=.*[1-9])\d*(?:\.\d*)?$/);
});
$.validator.addMethod("checkKeywords", function(value, element)
{
    return this.optional(element) || value == value.match(/^[a-zA-Z0-9\s,]+$/);
});


$.validator.addMethod("pwcheck", function(value) {
    if (value != "") {
        return /^(?=.*?[a-zA-Z])(?=.*?[0-9])[a-zA-Z0-9]{6,}$/.test(value);
    } else {
        return true;
    }
    //return /^(?=.*?[a-zA-Z])(?=.*?[0-9])[a-zA-Z0-9]{6,}$/.test(value) // consists of only these	    
});
$.validator.addMethod("realNumberOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^0*[1-9]\d*$/);
});
$.validator.addMethod("wholeNumberOnly", function(value, element) {
    return this.optional(element) || value == value.match(/^0*[0-9]\d*$/);
});
$.validator.addMethod("equalsCancelOfferText", function(value, element, param) {
    return this.optional(element) || value === param;
});

$(function() {
    $(".validate-form").each(function(){
        $(this).validate({
        invalidHandler: function(form, validator) {
            if($(".validate-error-msg:first").length > 0)
                $("html, body").animate({scrollTop: $(".validate-error-msg:first").offset().top - 140}, 500);//return false;
            if (typeof locationTypeFlag !== "undefined") {
                if (locationTypeFlag == '') {
                    $('.frontMerchantLocationType').html('');
                    $('.frontMerchantLocationType').html('Please select Location Type');
                }
            }
        },
        errorClass: "validate-error-msg", errorElement: "div",
        ignore: ":hidden(#ytMerchantImages_imageName)"
    });
    });

    $('.requiredField').each(function(i, obj) {
        $(this).rules("add", {
            required: true, messages: {
                required: FORM_REQUIRED_FIELD,
            }
        });
    });
    $('.selectDropDown').each(function(i, obj) {
        $(this).rules("add", {
            required: true, messages: {
                required: FORM_REQUIRED_FIELD,
            }
        });
    });
    $('.alpha').each(function(i, obj) {
        $(this).rules("add", {
            alphabetsOnly: true, messages: {
                alphabetsOnly: FORM_ONLY_ALPHABETS,
            }
        });
    });
    $('.alphaNum').each(function(i, obj) {
        $(this).rules("add", {
            alphaNumeric: true, messages: {
                alphaNumeric: FORM_ONLY_ALPHANUMERIC,
            }
        });
    });
    $('.alphaAndSpace').each(function(i, obj) {
        $(this).rules("add", {
            alphabetsAndSpaceOnly: true, messages: {
                alphabetsAndSpaceOnly: FORM_ONLY_ALPHABETS_AND_SPACE,
            }
        });
    });
    $('.emailField').each(function(i, obj) {
        $(this).rules("add", {
            email: true,
            required: true,
            messages: {
                required: FORM_REQUIRED_FIELD,
                email: FORM_INVALID_EMAIL,
            }
        });
    });
    $('.phoneField').each(function(i, obj) {
        $(this).rules("add", {
            phoneValidateUS: true, messages: {
                phoneValidateUS: FORM_INVALID_PHONE
            }
        });
    });
    $('.faxField').each(function(i, obj) {
        $(this).rules("add", {
            faxValidate: true, messages: {
                faxValidate: FORM_INVALID_FAX
            }
        });
    });
    $('.zipField').each(function(i, obj) {
        $(this).rules("add", {
            zipValidate: true, messages: {
                zipValidate: FORM_INVALID_ZIP
            }
        });
    });
    $('.urlField').each(function(i, obj) {
        $(this).rules("add", {
            urlValidate: true, messages: {
                urlValidate: FORM_INVALID_URL
            }
        });
    });
    $('.realNumber').each(function(i, obj) {
        $(this).rules("add", {
            realNumberOnly: true, messages: {
                realNumberOnly: FORM_NUMBER_GREATER_THAN_ZERO
            }
        });
    });
    $('.passField').each(function(i, obj) {
        $(this).rules("add", {
            //min: 6,
            pwcheck: true,
            messages: {
                //min: "Password must have 6 characters atleast",
                pwcheck: FORM_PASSWORD_REQUIREMENTS,
            }
        });
    });
    $('.rebatePercentField').each(function(i, obj) {
        $(this).rules("add", {
            digits: true,
            min: 5,
            max: 50,
        });
    });    
    $('.keywordsValidate').each(function(i, obj) {
        $(this).rules("add", {
            //min: 6,
            checkKeywords: true,
            messages: {
                //min: "Password must have 6 characters atleast",
                checkKeywords: FORM_KEYWORDS_ERROR,
            }
        });
    });
    $('.onFirstDollarField').each(function(i, obj) {
        $(this).rules("add", {
            digits: true,
            max: maxOnFirstAmount,
            realNumberOnly: true,
            messages: {
                realNumberOnly: FORM_NUMBER_GREATER_THAN_ZERO
            }
        });
    });
    $('.transactionAmount').each(function(i, obj) {
        $(this).rules("add", {
            //digits: true,
            //max:1000,
            floatValue: true,
            messages: {
                floatValue: FORM_FLOAT_VALUE
            }
        });
    });
    $('.clientTransactionAmount').each(function(i, obj) {
        $(this).rules("add", {
            //digits: true,
            min: 100,
            floatValue: true,
            messages: {
                floatValue: FORM_FLOAT_VALUE
            }
        });
    });
    $('.customerAccPhoneNumber').each(function(i, obj) {
        $(this).rules("add", {
            custAccPhoneNumberValidate: true,
            messages: {
                custAccPhoneNumberValidate: ERROR_MERCHANT_TRANSACTION_INVALID_CUST_ACC_PHONE_NUMBER
            }
        });
    });
    $('.merchantID').each(function(i, obj) {
        $(this).rules("add", {
            merchantID: true,
            messages: {
                merchantID: ERROR_CUSTOMER_TRANSACTION_INVALID_MERCHANT_ACC_NUMBER
            }
        });
    });

    /****************************AJAX FORM VALIDATION******************************************/
    $(document.body).on('click', '.submitValidateBTn', function() {
        $(".validate-form").validate({
            invalidHandler: function(form, validator) {

            },
            errorClass: "validate-error-msg", errorElement: "div",
            ignore: ""
        });

        $('#merchantConfirmText').each(function(i, obj) {
            $(this).rules("add", {
                equalsCancelOfferText: window.matchText,
                messages: {
                    equalsCancelOfferText: 'Please Enter "' + window.matchText + '"',
                }
            });
        });

        $('.requiredField').each(function(i, obj) {
            $(this).rules("add", {
                required: true, messages: {
                    required: FORM_REQUIRED_FIELD,
                }
            });
        });
        $('.selectDropDown').each(function(i, obj) {
            $(this).rules("add", {
                required: true, messages: {
                    required: FORM_REQUIRED_FIELD,
                }
            });
        });
        $('.alpha').each(function(i, obj) {
            $(this).rules("add", {
                alphabetsOnly: true, messages: {
                    alphabetsOnly: FORM_ONLY_ALPHABETS,
                }
            });
        });
        $('.alphaNum').each(function(i, obj) {
            $(this).rules("add", {
                alphaNumeric: true, messages: {
                    alphaNumeric: FORM_ONLY_ALPHANUMERIC,
                }
            });
        });
        $('.alphaAndSpace').each(function(i, obj) {
            $(this).rules("add", {
                alphabetsAndSpaceOnly: true, messages: {
                    alphabetsAndSpaceOnly: FORM_ONLY_ALPHABETS_AND_SPACE,
                }
            });
        });
        $('.emailField').each(function(i, obj) {
            $(this).rules("add", {
                email: true,
                required: true,
                messages: {
                    required: FORM_REQUIRED_FIELD,
                    email: FORM_INVALID_EMAIL,
                }
            });
        });
        $('.phoneField').each(function(i, obj) {
            $(this).rules("add", {
                phoneValidateUS: true, messages: {
                    phoneValidateUS: FORM_INVALID_PHONE
                }
            });
        });
        $('.faxField').each(function(i, obj) {
            $(this).rules("add", {
                faxValidate: true, messages: {
                    faxValidate: FORM_INVALID_FAX
                }
            });
        });
        $('.zipField').each(function(i, obj) {
            $(this).rules("add", {
                zipValidate: true, messages: {
                    zipValidate: FORM_INVALID_ZIP
                }
            });
        });
        $('.urlField').each(function(i, obj) {
        $(this).rules("add", {
            urlValidate: true, messages: {
                urlValidate: FORM_INVALID_URL
            }
        });
    });
        $('.realNumber').each(function(i, obj) {
            $(this).rules("add", {
                realNumberOnly: true, messages: {
                    realNumberOnly: FORM_NUMBER_GREATER_THAN_ZERO
                }
            });
        });
        $('.wholeNumberOnly').each(function(i, obj) {
            $(this).rules("add", {
                wholeNumberOnly: true, messages: {
                    wholeNumberOnly: FORM_NUMBER_POSITIVE
                }
            });
        });

        $('.passField').each(function(i, obj) {
            $(this).rules("add", {
                //min: 6,
                pwcheck: true,
                messages: {
                    //min: "Password must have 6 characters atleast",
                    pwcheck: FORM_PASSWORD_REQUIREMENTS,
                }
            });
        });
    });
    /****************************AJAX FORM VALIDATION ENDS******************************************/
});
    