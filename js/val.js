function validate() {
var firstname = document.getElementById("firstname").value;
var lastname = document.getElementById("lastname").value;
var phone = document.getElementById("phone").value;
var referral = document.getElementById("referral").value;
var referralother = document.getElementById("referralother").value;
var lawyer = document.getElementById("lawyer").value;
var type = document.getElementById("type").value;
var typeother = document.getElementById("typeother").value;
var dateofcontact = document.getElementById("typeother").value;
var formfilledby = document.getElementById("formfilledby").value;
var comments = document.getElementById("comments").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'firstname1=' + firstname + '&lastname1=' + lastname + '&phone1=' + phone + '&referral1=' + referral + '&referralother1=' + referralother + '&lawyer1=' + lawyer + '&type1=' + type + '&typeother1=' + typeother + '&dateofcontact1=' + dateofcontact + '&formfilledby1=' + formfilledby + '&comments1=' + comments;
    if (firstname == '' || lastname == '' || phone == '' || referral == '' || referralother == '' || lawyer == '' || type == '' || typeother == '' || dateofcontact == '' || formfilledby == '' || comments == '') {
        alert("Please Fill All Fields");
    } else {
    // AJAX code to submit form.
        $.ajax({
        type: "POST",
        url: "ajaxjs.php",
        data: dataString,
        cache: false,
        success: function(html) {
        alert(html);
    }
});

}
    return false;
}
