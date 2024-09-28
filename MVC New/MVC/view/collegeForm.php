<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>College Form</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<body style='font-family: arial;'>
    <div class='form-control container'>
        <form method='post' action='index.php?mod=college&view=collegeForm' style='width:500px; margin: 0px auto;'>
            <div class='form-group'>
                <label><b>
                        Collegename :
                    </b>
                </label><br>
                <input type='text' name='collegename' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Location :
                    </b>
                </label><br>
                <input type='text' name='location' required>
            </div>
            <div class='form-group'>
                <label><b>
                        No.Of.Students :
                    </b>
                </label><br>
                <input type='text' name='no_of_students' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Email :
                    </b>
                </label><br>
                <input type='email' name='email' required>
            </div>
            <div class='form-group'>
                <label><b>
                        No.Of.Departments :
                    </b>
                </label><br>
                <input type='text' name='no_of_departments' required>
            </div><br>
            <input type='submit' class='btn btn-primary' name='submit'><br>
            <?php echo $result ?>
        </form>
    </div>
</body>
</html>