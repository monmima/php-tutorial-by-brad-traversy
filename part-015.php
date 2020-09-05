<?php
    // Message vars
    $message = "";
    $msgClass = "";

    // check for the submit
    if (filter_has_var(INPUT_POST, "submit")) {
        // echo "Submitted";

        # Get form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // check required fields
        if (!empty($email) && !empty($name) && !empty($message)) {
            // Passed
            echo "PASSED";
        } else {
            // Failed
            $message = "Please fill in all fields";
            $msgClass = "alert-danger";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>

    <div class="container">
        
        <?php if ($message !=  ""): ?>
            <div class="alert <?php echo $msgClass; ?>">
            <?php echo $message ?></div>
        <?php endif; ?>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>

            <div class="form-group">
                <label>Message</label>
                <input type="text" name="message" class="form-control" value="">
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>

</body>
</html>