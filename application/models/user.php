<?php

class User extends DataMapper
{
    
    /**
     * Update a user, password will be hashed
     * 
     * @param int id
     * @param array user
     * @return int id
     */
    /*public function update($id, $user) {
        // prevent overwriting with a blank password
        if (isset($user['password']) && $user['password']) {
            // need the library for hashing the password
            $this->load->library("auth");
            $user['password'] = $this->auth->hash($user['password']);
        } else {
            unset($user['password']);
        }
        
        $this->db->where('id', $id)->update($this->table, $user);
        return $id;
    }*/
    
    /**
     * Check if a user exists
     * 
     * @param int key
     * @param string identification field
     */
    
    public function exists($key, $where = 'id') {
        return $this->where($where,$key)->count();
    }
    
    /**
     * Activate a user
     * 
     * @param int id
     */
    public function activate($id) {
        return $this->get_by_id($id)->update('activated',1);
    }
    
    /**
     * Deactivate a user
     * 
     * @param int id
     */
    public function deactivate($id) {
        return $this->get_by_id($id)->update('activated',0);
    }
}