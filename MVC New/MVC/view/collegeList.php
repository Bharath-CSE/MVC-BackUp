<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>StudentList</title>
</head>
<body>
    <table cellspacing='0' cellpadding='20' border='1' width='800'>
        <tr>
            <td>Collegename</td>
            <td>Location</td>
            <td>No.Of.Students</td>
            <td>Email</td>
            <td>No.Of.Departments</td>
        </tr>
        <?php
        $rows = $data->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $row) 
        {
            echo "<tr>
                        <td>{$row['college_name']}</td>
                        <td>{$row['location']}</td>
                        <td>{$row['no_of_students']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['no_of_departments']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>