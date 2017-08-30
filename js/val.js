function validate() {
var firstname = document.getElementById("firstname").value;
var lastname = document.getElementById("lastname").value;
var phone = document.getElementById("phone").value;
var referral = document.getElementById("referral").value;
var referralother = document.getElementById("referralother").value;
var lawyer = document.getElementById("lawyer").value;
var type = document.getElementById("type").value;
var typeother = document.getElementById("typeother").value;
var dateofcontact = document.getElementById("dateofcontact").value;
var formfilledby = document.getElementById("formfilledby").value;
var comments = document.getElementById("comments").value;
var email = document.getElementById("email").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'firstname1=' + firstname + '&lastname1=' + lastname + '&phone1=' + phone + '&referral1=' + referral + '&referralother1=' + referralother + '&lawyer1=' + lawyer + '&type1=' + type + '&typeother1=' + typeother + '&dateofcontact1=' + dateofcontact + '&formfilledby1=' + formfilledby + '&comments1=' + comments + '&email1=' + email;

var firstnamecheck = document.form.firstname.value;
var lastnamecheck = document.form.lastname.value;
var phonenumcheck = document.form.phone.value;  
var referralothercheck = document.form.referralother.value;
var typeothercheck = document.form.typeother.value;
var formfillcheck = document.form.formfilledby.value;
    
    //FIRST NAME
    for (fn = 0; fn < firstnamecheck.length; fn++) { 
        if (!isNaN(firstnamecheck[fn])) {
         document.getElementById('firstnameerror').innerHTML="Use only letters in this field";
        } 
    }

    if (firstnamecheck == "") {
     document.getElementById('firstnameerror').innerHTML="Please enter the first name";
    } 


    //LAST NAME
    for (ln = 0; ln < lastnamecheck.length; ln++) { 
        if (!isNaN(lastnamecheck[ln])) {
         document.getElementById('lastnameerror').innerHTML="Use only letters in this field";
        } 
    }

    if (lastnamecheck == "") {
     document.getElementById('lastnameerror').innerHTML="Please enter the last name";
    } 

    //PHONE
    if (phonenumcheck.length < 10 || isNaN(phonenumcheck)) { // If length of number is less than 10 or not numeric then fail
     document.getElementById('phoneerror').innerHTML="Please enter phone number";
    } 

    //REFERRAL
    for (r = 0; r < referralothercheck.length; r++) { 
        if (!isNaN(referralothercheck[r])) {
         document.getElementById('referralothererror').innerHTML="Use only letters in this field";
        } 
    }

    if (document.form.referral.value == "Other" && referralothercheck == "") {
     document.getElementById('referralothererror').innerHTML="Please enter the referral name in the text field";
    } 

    //TYPE OF FILE 
    for (t = 0; t < typeothercheck.length; t++) { 
        if (!isNaN(typeothercheck[t])) {
         document.getElementById('typeothererror').innerHTML="Use only letters in this field";
        } 
    }

    if (document.form.type.value == "Other" && typeothercheck == "") {
     document.getElementById('typeothererror').innerHTML="Please enter the type of file in the text field";
    } 

    //DATE OF CONTACT
    if (document.form.dateofcontact.value == "") {
     document.getElementById('dateofcontacterror').innerHTML="Please enter the date of contact";
    } 

    //FORM FILLED BY
    for (f = 0; f < formfillcheck.length; f++) { 
        if (!isNaN(formfillcheck[f])) {
         document.getElementById('formfilledbyerror').innerHTML="Use only letters in this field";
        } 
    }

    if (formfillcheck.length == 0) {
     document.getElementById('formfilledbyerror').innerHTML="Please enter who took the call";
    } 

    else {
    // AJAX code to submit form.
        $.ajax({
        type: "POST",
        url: "ajaxjs.php",
        data: dataString,
        cache: false,
        success: function() {
            window.location.replace(html);

        }
});

}
    return false;
}
;
