<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>StudentView</title>
</head>
<body>
    <table cellspacing='0' cellpadding='20' border='1' width='800'>
        <tr>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>DOB</td>
            <td>Email</td>
            <td>Number</td>
        </tr>
        <?php
        foreach ($data as $row) 
        {
            echo "<tr>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['dob']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['number']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>