<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Form</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<?php
    foreach($rows as $data)
    {
        $id=$data['student_id'];
        $fname=$data['first_name'];
        $lname=$data['last_name'];
        $dob=$data['dob'];
        $email=$data['email'];
        $number=$data['number'];
    }
?>
<body style='font-family: arial;'>
    <div class='form-control container'>
        <form method='post' action='index.php?mod=student&view=updateForm&id=<?php echo $id?>' style='width:500px; margin: 0px auto;'>
            <div class='form-group'>
                <label><b>
                        Firstname :
                    </b>
                </label><br>
                <input type='text' name='firstname' value=<?php echo $fname ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Lastname :
                    </b>
                </label><br>
                <input type='text' name='lastname' value=<?php echo $lname ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Dob :
                    </b>
                </label><br>
                <input type='date' name='dob' value=<?php echo $dob ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Email :
                    </b>
                </label><br>
                <input type='email' name='email' value=<?php echo $email ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Number :
                    </b>
                </label><br>
                <input type='text' name='number' value=<?php echo $number ?> required>
            </div><br>
            <input type='submit' class='btn btn-primary' name='submit'><br>
        </form>
    </div>
</body>
</html>