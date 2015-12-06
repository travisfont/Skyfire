<?php

class customFieldTypes
{

}

class dataFieldTypes
{
    static protected function email()
    {
        return 'email';
    }
    
    static protected function password()
    {
        return 'password';
    }
}

class Validator extends dataFieldTypes
{
    private $_credentials;
    public  $errors = NULL;
    
    public function __construct($credentials)
    {
        $this->_credentials = $credentials;
    }
    
    public function check()
    {
        // min
        // max
        
        foreach ($this->_credentials as $field => $array)
        {
            var_dump($field);
            var_dump($array);
            exit;
        }

        $this->errors = array();
    }

    public function fails()
    {
        return $this->check();
    }
    
    public function success()
    {
        return $this->check();
    }
}

// usa_phone
// numeric
// text

#load::library('Input');
#load::library('Validator');

// Review:
// http://www.phpclasses.org/package/8818-PHP-Validate-array-of-submitted-form-values.html#usage

$data = array
(
    'email'    => array('value' => Input::get('email'),    'type' => 'email',    'required' => TRUE),
    'password' => array('value' => Input::get('password'), 'type' => 'password', 'required' => TRUE),
);
$validation = new Validator($data);

if ($validation->success())
{
    /* check log in
    $credentials = array
    (
        'table_name'     => 'users',
        'field_account'  => 'email',
        'field_password' => 'password'
    )
    $login = new login($credentials);
    if ($login->authenticate())
    { $session::create(); } */
}
else
{
    var_dump($validation->errors);
}
