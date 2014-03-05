<?php

namespace Authe;

class Authe
{
    private $TokenHandler;
    private $DBHandler;
    
    public function __construct($TokenHandler = null, $DBHandler = null) {
        if ($TokenHandler)
            $this->TokenHandler = $TokenHandler;
        if ($DBHandler)
            $this->DBHanlder = $DBHandler;
    }
    
    /**
     * A wrapper function to be pulled apart later
     */
    public function loginAndGetToken($username, $password) {
        
        return FALSE;
    }
}