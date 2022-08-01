<?php 
class User  {
	private $fullname;
	private $email;
	private $password;

	public function register ($pdo) {
		$hashedPass= password_hash($this->getPassword(), PASSWORD_DEFAULT); 		
		//prepare a statement
		try{
			//prepare a query
			$stm = $pdo->prepare("insert into users (name, email, password) values (?,?,?)");
			$stm->execute([$this->getFullname(),$this->getEmail(),$hashedPass]);
			$stm=null;
			return "Successful registration";
			header("location: home.php");
		} catch (PDOException $e) {
			return $ex->getMessage();
		}
		//factor out profile pic
	}
	public function login($pdo) {
		$email= $this->getEmail();
		$stm= $pdo->prepare("select * from users where email= ?");
		$stm->execute([$this->getEmail()]);
		$row= $stm->fetch();
		$hashedPass= $row['password'];
		if(password_verify($this->getPassword(), $hashedPass)) {
			session_start();
			$_SESSION['username']= $row['email']; 
			$stm = null;
			return true;
		}
		else {
			$stm = null;
			return false;
			/* echo '
			<script type="text/javascript">
				window.location("1-regform.php");
				window.onload = function(){
					alert("Invalid login");
				};
				</script>';  */
			}
		}

		public function changePassword($pdo) {
			session_start();
			try {
					$hashedPass= password_hash($this->getPassword(), PASSWORD_DEFAULT); 	
					$stm= $pdo->prepare("update users set password= ? where email= ? ");
					$stm->execute([$hashedPass, $_SESSION['username']]);
					$stm= null;
					header("Refresh: 3");
					echo("Password Change Successful");
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}	

		public function logout ($pdo){
			session_unset('username');
			session_destroy();
			header("location: ../index.html");
		}

		public function getFullname()
		{
			return $this->fullname;
		}

		public function setFullname($fullname)
		{
			$this->fullname = $fullname;

			return $this;
		}


		public function getEmail()
		{
			return $this->email;
		}


		public function setEmail($email)
		{
			$this->email = $email;

			return $this;
		}


		public function getPassword()
		{
			return $this->password;
		}

		public function setPassword($password)
		{
			$this->password = $password;

			return $this;
		}

		public function getCity()
		{
			return $this;
		}

		public function setCity)
		{
			$this =;

			return $this;
		}
	}
	?>