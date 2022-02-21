<?php
class Student{
    private $id;
    private $fname;
    private $lname;
    private $address;
    private $counrtry;
    private $gender;
    private $email;
    private $password;
    private $deparment;
    private $errors;
    function __construct($errors)
    {
        
    }
    function __destruct()
    {
        
    }
    function __set($name, $value)
    {
        if($name=='id'){
            if(filter_var($value,FILTER_VALIDATE_INT)){
                $this->id=$value;
            }
        }
        if ($name=='fname') {
            $this->fname=$value;
            validation($value);
            if (strlen($value<3)) {
               $errors['fname']="First Name must be more than 3 char";
             }
        }
    }

    function validation($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
}

?>