
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

    //var updaterec = $("#updaterecpar div:first-child").attr("id");
    var updaterecord = $('div[id^="updaterecord"]');
    
   //$(updaterecord).hide();

    var updatearray = $.map(updaterecord, function(value, index) {
        return [index];
    });

        //for each div with id openrec[x] return
    var updaterecord = $('a[id^="openrecord"]');
     
    var openarray = $.map(openrecord, function(value, index) {
        return [index];
    });

   
    var countelem = $('a[id*="openrecordchild"]')
    for (var i = 1; i <= countelem.length;) { 
        $('a#openrecordchild').each(function() {
            $( this ).addClass(''+i++);
            console.log(i);
        });
    }

    $('a[id^="openrecord"]').click(function(){ 
        var listnum =  $.each( updatearray, function (index, num){   
        return [index];
        
    });
    


        

        //ar sampleget = sample();
        console.log(listnum);
             
    }); 

    

    //var openrecord = $('a[id^="openrecord"]');

    // function sample() { 
    //     return $.each( openrecord, function (index, num){
    //         // console.log(index);
    //         // console.log(num);
    //         return openrecord.index;
    //     });
    // }



    //     openrecordid = $("#openrecord a:first-child").attr("id");
    //     console.log(openrecordid);
        
    //     var updatematched = $('div[id^="updaterecord"]');
       
    //     console.log(updatematched);

    //     $.each( updatematched, function (index, num){
    //         console.log(index);
    //         console.log(num);
    //     });


    //     // if (openuprecord = match) {
    //     //     $(match).animate({
    //     //              height: 'toggle'
    //     //     });
    //     //  }


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