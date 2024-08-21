<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <?php
    // Simple welcome message after form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']); // Assuming the form has an input field named 'name'
        echo "<h1>Welcome, " . $name . "!</h1>";
        echo "<p>Thank you for submitting the form.</p>";
    } else {
        echo "<h1>Welcome!</h1>";
        echo "<p>Please fill out the form to submit your information.</p>";
    }
    ?>
</body>
</html>
