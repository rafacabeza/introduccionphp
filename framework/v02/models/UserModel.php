<?php

class UserModel
{
    private $_users = array();
    
    public function __construct() {
        $this->_users = array(
            array (id => 1, name => 'Juan'),    
            array (id => 2, name => 'Pedro'),    
            array (id => 3, name => 'Sara'),    
            array (id => 4, name => 'Laura')   
            );        
    }
    
    public function getAll()
    {
        return $this->_users;
    }
    
    public function get($id)
    {
        foreach ($this->_users as $user){
            if ($user['id'] = $id) return $user;
        }
    }
    
    
}
