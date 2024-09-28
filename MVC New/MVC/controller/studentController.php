<?php
    class StudentController
    {
        public $Obj;
        function __construct()
        {
            if(file_exists("./model/studentModel.php"))
            {
                include_once "./model/studentModel.php";
            }
            $this->Obj=new StudentModel();
        }

        //This function is for call the model and view
        function studentList()
        {
            $rows=$this->Obj->studentList();
            if(file_exists("./view/studentList.php"))
            {   
                include_once "./view/studentList.php";
            }
        }

        //This function is for studentData Form
        function studentForm()
        {
            if(isset($_POST['submit']))
            {
                $arr=array();
                $arr['firstname']=$_POST['firstname'];
                $arr['lastname']=$_POST['lastname'];
                $arr['dob']=$_POST['dob'];
                $arr['email']=$_POST['email'];
                $arr['number']=$_POST['number'];
                $this->Obj->studentForm($arr);
            }
            if(file_exists("./view/studentForm.php"))
            {
                include_once "./view/studentForm.php";
            }
        }

        function getStudentDetails()
        {
            $id=$_GET['id'];
            $rows=$this->Obj->getStudentDetails($id);
            if(file_exists("./view/updateForm.php"))
            {
                include_once "./view/updateForm.php";
            }
        }

        //This function is for updateData Form
        function updateForm()
        {
            $id=$_GET['id'];
            if(isset($_POST['submit']))
            {
                $arr=array();
                $arr['id']=$id;
                $arr['firstname']=$_POST['firstname'];
                $arr['lastname']=$_POST['lastname'];
                $arr['dob']=$_POST['dob'];
                $arr['email']=$_POST['email'];
                $arr['number']=$_POST['number'];
                $rows=$this->Obj->updateForm($arr);
                $this->studentList();
            }
        }

        function deleteStudent()
        {
            $id=$_GET['id'];
            $this->Obj->deleteStudent($id);
            $this->studentList();
        }

        function viewStudent()
        {
            $id=$_GET['id'];
            $data=$this->Obj->getStudentDetails($id);
            if(file_exists("./view/studentView.php"))
            {
                include_once "./view/studentView.php";
            }
        }

        function login()
        {
            $username=$_POST['username'];
            $givenpassword=$_POST['password'];
            $dbPassword=$this->Obj->login($username);
            $row=$dbPassword->fetch(PDO::FETCH_ASSOC);
            if($givenpassword==$row['password'])
            {
                $this->studentList();
            }
            else
            {
                echo "Please Give Correct Username and Password";
            }
        }

        function __call($name, $arguments)
        {
            echo "Invalid URL";
        }
    }
?>