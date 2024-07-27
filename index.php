<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="process.php" method="post">
<script>function validateForm() {
            // Get references to form fields
            var firstname = document.getElementById("firstname");
            var lastname = document.getElementById("lastname");
            var email = document.getElementById("email");
            var gender = document.getElementById("gender");
            var dob = document.getElementById("dob");
            var hobbies = document.querySelectorAll('input[name="hobbies[]"]:checked');

            // Check if fields are empty
            if (firstname.value === "" || lastname.value === "" || email.value === "" || gender.value === "" || dob.value === "" || hobbies.length === 0) {
                alert("All fields are required!");
                return false; // Prevent form submission
            }
            
            // You can add additional validation for email format, date format, etc. here if needed.

            return true; // Allow form submission
        }</script>
    <h2>Registration Form</h2>
      <form action="index_form.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <label for="hobbies">Hobbies:</label><br>
        <input type="checkbox" id="hobby1" name="hobbies[]" value="Reading"> Reading<br>
        <input type="checkbox" id="hobby2" name="hobbies[]" value="Sports"> Sports<br>
        <input type="checkbox" id="hobby3" name="hobbies[]" value="Music"> Music<br>
        <input type="checkbox" id="hobby4" name="hobbies[]" value="Traveling"> Traveling<br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>