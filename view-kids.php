<!DOCTYPE html>  
<html>  
<head>  
  <title>My Form</title>  
  <!-- Include the jQuery library -->  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
</head>  
<body>  
  <form>  
    <!-- Form fields go here -->  
    <input type="submit" id="submit-button" value="Submit">  
  </form>  
  
  <!-- Add the JavaScript code to trigger the alert -->  
  <script>  
    $(document).ready(function() {  
      $('#submit-button').click(function() {  
        alert('Thank you for submitting the form!');  
      });  
    });  
  </script>  
</body>  
</html>
