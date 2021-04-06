<?php

# 03 - A Class

/**
 * User
 * 
 * A user of the system
 * 
 */

class User 
{
    /**
      * First name
      * @var string
      */
    public $first_name;
    
    /**
      * Last name
      * @var string
      */
    public $surname;

    /**
     * Get the user's full name from their first name and surname
     * 
     * @return string The user's full name 
     */
    public function getFullName()
    {
        // return "$this->first_name $this->surname";

        // Removes white space that will result if no values are passed
        return trim("$this->first_name $this->surname");

    }
}