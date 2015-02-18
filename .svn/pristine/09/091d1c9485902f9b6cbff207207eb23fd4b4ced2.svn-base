// JS

function toggleCheckboxes(flag) {  
    var form = document.getElementById('user-role-form');
    var inputs = form.elements;
    if(flag == 'true'){
	    for (var i = 0; i < inputs.length; i++) { 
	      if (inputs[i].type == "checkbox") {
	        inputs[i].checked = true;
	      }  
	    }
	    $('#checkAllID').val('false');
    }else{
    	for (var i = 0; i < inputs.length; i++) { 
   	      if (inputs[i].type == "checkbox") {
   	        inputs[i].checked = false;
   	      }  
   	    }
    	$('#checkAllID').val('true');
    }
}

function toggleSubCheckboxes(ID)
{
	if($('.mod'+ID).find('input[type="checkbox"]').prop("checked") == true){
		$('div.mod'+ID+'_attr').find('input[type="checkbox"]').prop('checked', true);
	}else{
		$('div.mod'+ID+'_attr').find('input[type="checkbox"]').prop('checked', false);
	}
}

function deletFile()
{
    $('#delete-file').attr("value", "");
    $('#delete-file').hide();
    $('#delete-file-button').hide();
    
}
$(document).ready(function(){
    $('#resetVal').click(function(){
        $('.select2-me').select2('val','');
    });
});
/*
$(function() {
    // Apparently click is better chan change? Cuz IE?
    $('input[type="checkbox"]').change(function(e) {
        var checked = $(this).prop("checked"),
        container = $(this).parent(),
        siblings = container.siblings();

        container.find('input[type="checkbox"]').prop({
            indeterminate: false,
            checked: checked
        });

        function checkSiblings(el) {
            var parent = el.parent().parent(),
            all = true;

            el.siblings().each(function() {
                return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
            });

            if (all && checked) {
                parent.children('input[type="checkbox"]').prop({
                    indeterminate: false,
                    checked: checked
                });
                checkSiblings(parent);
            } else if (all && !checked) {
                parent.children('input[type="checkbox"]').prop("checked", checked);
                parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
                checkSiblings(parent);
            } else {
                el.parents("li").children('input[type="checkbox"]').prop({
                    indeterminate: true,
                    checked: false
                });
            }
        }

        alert(checkSiblings(container));
    });
});*/


/*
This function is used to validate empty field while add new faq category from faqs/_ajax_form.php
*/

function categoryvalidation(){
    var catName =jQuery("#FaqsCategories_faqCategoryName").val();
    success=true;
    if(catName==''){
        success=false;
        jQuery('#output').html('Category Name cannot be blank.').show();
    }
    if(!success)
            return success;
}