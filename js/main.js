
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
            $('#searchcon').animate({
            height: 'toggle'
        });       
    });

    $('#reportcon').hide();
    $('.openreport').click(function(){      
        $('#reportcon').animate({
            height: 'toggle'
        });       
    });

    
    var updaterec = $("#updaterecpar div:first-child").attr("id");
    
    $('#'+updaterec).hide();

    function open(){

        //for each div with id openrec[x] return
        var openrec = $("#openrecpar a:first-child").attr("id");
        return openrec;

    }

    var openuprec = open();

    console.log(openuprec);

    $('#'+openuprec).click(function(){  // on click toggle between hiding comment box and status dropdown    
        
        $('#'+updaterec).animate({
                 height: 'toggle'
        });
             
    });

    

    //var getlistnum = $("#listnum div:first-child").attr("id");
      
   
    // //$('#updaterecpar #'+updaterec).each(function(){ 
    //     $('#'+updaterec).hide(); //hide comment box and status dropdown
    // //});
   
    // $('#'+open()).click(function(){  // on click toggle between hiding comment box and status dropdown    
        
    // $('#'+updaterec).animate({
    //         height: 'toggle'
    // });
             
    // });

        

});