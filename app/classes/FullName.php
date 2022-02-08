<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;
    protected $fullName;

    public function __construct($data=null)
    {
        //echo '<pre>';
        //print_r($data);
        //echo $data['first_name'];
        //exit();
        if ($data)
        {
            $this->firstName = $data['first_name'];
            $this->lastName = $data['last_name'];
        }
    }

    public function index()
    {
        //echo $this->firstName;
        //echo $this->lastName;

        //to write html code:
        header('Location: action.php?pages=full-name');
    }
    public function getFullName()
    {
        $this->fullName=$this->firstName.' '.$this->lastName;
        return $this->fullName;
    }


}