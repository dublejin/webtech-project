<? php
	$flag=-1;
	include_once 'data.php';
	$user_name = $_POST['user_name'];
	$pwd = $_POST['pwd'];
	
	for(int i=0; i<$usn_length; i++){
		if (usn_list[i] == $user_name){
			if(pwd_list[i] == $pwd){
				$flag = i;
				}
			else{
				$flag = -2;
				echo "Wrong password";
		}}
					
			
				}
				?>
	