
$(document).ready(function () {

    // Select all the buttons
    var button = document.querySelectorAll('[data-id]');

    // For each button...
    Array.from(button).forEach(button => {

      // Listen for "clicks"
        button.addEventListener('click', function(e) {

        // When clicked, select all the "ids"
        Array.from(document.querySelectorAll('.updaterecord')).forEach(item => {
          // ... and make sure they are hidden
            item.classList.add('updaterecord-hidden');
        });

            // Now, find the data-id on the clicked button
          console.log(e.target.tagName)
          var id = e.target.dataset.id;
        
        // Find the thing that we want to show, and toggle the class that
        // hides it.
        //console.log("id ---> ", id); // try putting this in
        document.getElementById(id).classList.toggle('updaterecord-hidden');
      })

    });

});