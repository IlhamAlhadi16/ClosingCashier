<?php if(! defined('BASEPATH')) exit('No direct Script access allowed');

class UserModel extends CI_Model{

	public function get($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('login')->row();
		// Sama kek SELECT * FROM user WHERE username = '$username'

		return $result;
	}
}
