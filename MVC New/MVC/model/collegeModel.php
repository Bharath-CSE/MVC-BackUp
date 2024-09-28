<?php

    if(file_exists("common/database.php"))
    {
        include_once "common/database.php";
    }

    class CollegeModel extends database_connection
    {
        //This function is for get the data from database and return the data
        function collegeList()
        {
            $db=$this->connect();
            $data=$db->prepare("select * from college_list");
            $data->execute();
            return $data;
        }

        //This function is for insert the data to the database
        function collegeForm($arr)
        {
            if(isset($_POST['submit']))
            {
                $db=$this->connect();
                $data=$db->prepare("insert into college_list(college_name,location,no_of_students,email,no_of_departments) values(:college_name,:location,:no_of_students,:email,:no_of_departments)");
                $data->bindParam(":college_name",$arr["collegename"]);
                $data->bindParam(":location",$arr['location']);
                $data->bindParam(":no_of_students",$arr['no_of_students']);
                $data->bindParam(":email",$arr['email']);
                $data->bindParam(":no_of_departments",$arr['no_of_departments']);
                $data->execute();
                $count=$data->rowCount();
                if($count>0)
                {
                    return "Inserted Successfully";
                }
                else
                {
                    return "Error";
                }
            }
        }
    }
?>