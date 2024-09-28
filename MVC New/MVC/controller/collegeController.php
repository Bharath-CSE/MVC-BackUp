<?php
    class CollegeController
    {
        public $Obj;
        function __construct()
        {  
            if(file_exists("./model/collegeModel.php"))
            {
                include_once "./model/collegeModel.php";
            }
            $this->Obj=new CollegeModel();
        }

        //This function is for call the model and view
        function collegeList()
        {
            $data=$this->Obj->collegeList();
            if(file_exists("./view/collegeList.php"))
            {   
                include_once "./view/collegeList.php";
            }
        }

        //This function is for collegeData Form
        function collegeForm()
        {
            $Obj=$this->Obj;
            $arr=array();
            if(isset($_POST['submit']))
            {
                $arr['collegename']=$_POST['collegename'];
                $arr['location']=$_POST['location'];
                $arr['no_of_students']=$_POST['no_of_students'];
                $arr['email']=$_POST['email'];
                $arr['no_of_departments']=$_POST['no_of_departments'];
            }
            $result=$this->Obj->collegeForm($arr);
            if(file_exists("./view/collegeForm.php"))
            {
                include_once "./view/collegeForm.php";
            }
        }

        function __call($name, $arguments)
        {
            echo "Invalid URL";
        }
    }
?>