<?php


class Fileactions
{  
    //function for showing directories permissions
    public function make_writeable($file_id = 1)
    { 
    	//list of directories
	    $directories = [
	        "../app/config/database.php",
	        "../app/config/app.php",
	        "config/database.php",
	        "database/install.sql"
	    ]; 

		if(isset($file_id) && !empty($file_id))
		{
			$index = $file_id - 1;
			chmod($directories[$index], 0777); // Change the file permission
		}
		return TRUE;
    }
}

?>