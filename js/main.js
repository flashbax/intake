
$(document).ready(function() {
    //if 'Other' is selected in the referral select, show the other text field
    $('#referral').change(function(){
	    if($('#referral').val()=='Other')
	        $('#referralother').show();
	    else
	        $('#referralother').hide();
    });

    //if 'Other' is selected in the type of file select, show the other text field
    $('#type').change(function(){
	    if($('#type').val()=='Other')
	        $('#typeother').show();
	    else
	        $('#typeother').hide();
    });

    $('#searchcon').hide();
    $('.opensearch').click(function(){
            $('#searchcon').show();
            $('.opensearch').hide();
    });

   

});