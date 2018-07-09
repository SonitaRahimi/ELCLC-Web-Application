<?php
class Validation{
	public function is_fname_valid($fname)
    {
   if (preg_match('/[A-Za-z]{1,10}[0-9]{0,}\s?[A-Za-z]{0,10}[0-9]{0,}/', $fname)) {    
            return true;
        }
    return false;
		}
		
		public function is_lname_valid($lname)
    {
	if (preg_match('/[A-Za-z]{1,10}[0-9]{0,}\s?[A-Za-z]{0,10}[0-9]{0,}/', $lname)) {    
            return true;
        }
    return false;
	}
	
	 public function is_pnumber_valid($pnumber)
    {
    if (preg_match('/[0-9]{1,10}/', $pnumber)) {
			return true;  
        }
    return false;
    }
		
		
    public function is_email_valid($email)
    {
   if (preg_match('/^(\w+\.)*\w+@(\w+\.)+[A-Za-z]+$/', $email)) {    
            return true;
        }
    return false;
		}   
}
?>