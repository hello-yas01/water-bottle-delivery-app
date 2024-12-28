/*const { name } = require("commander");

<script>
    document.getElementById('orderForm').addEventListener('submit', function(event)) {
        event.preventDefault(); //Prevent the form from submitting normally

        //Get the form data
        const formData = {
            name: document.getElementById('name').value,
            address: document.getElementById('address').value,
            contactNumber: document.getElementById('contactNumber').value,
            quantity: document.getElementById('quantity').value
        };

        //send the form data to your server using getch or XMLHttpRequest
        fetch('/api/orders', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Failed to place order');
        })
        .then(data => {
            alert(data.message); //show success message
            //clear the form fields
            document.getElementById('orderForm').reset();
        })
        .catch(error => {
            console.error('Error:', error);
        alert('Failed to place order. Please try again later.');
        });
    };
</script> */

  document.getElementById('orderForm').addEventListener('submit', function(event) {
    //event.preventDefault(); // Prevent the form from submitting normally

    // Get the form data
    const formData = {
      name: document.getElementById('name').value,
      address: document.getElementById('address').value,
      contactNumber: document.getElementById('contactNumber').value,
      email: document.getElementById('email').value,
      quantity: document.getElementById('quantity').value
    };

    // Send the form data to your server using fetch or XMLHttpRequest
    fetch('/api/orders', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(formData)
    })
    .then(response => {
      if (response.ok) {
        return response.json();
      }
      throw new Error('Failed to place order');
    })
    .then(data => {
      alert(data.message); // Show success message
      // Clear the form fields
      document.getElementById('orderForm').reset();
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Failed to place order. Please try again later.');
    });
  }); 

 
 /*yadnesh code*/

 /* // Handle form submission
  document.getElementById('orderForm').addEventListener('submit', function(event) {
    // Prevent form submission
    alert("Booking Successful!"); // Show success popup
    // Clear form fields
    // You can add additional logic here such as submitting the form data to a server
});

*/

  