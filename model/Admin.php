<?php 
class Admin{
	public static function getAdminList(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM admin");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["name"] = $row["name"];
			$get[$i]["email"] = $row["email"];
			$i++;
		}
		return $get;
	}
	public static function addAdmin($name,$email,$password){
		$db = DB::getConnection();
		$sql = "INSERT INTO admin (name,email,password) VALUES(:name,:email,:password)";
		$result=$db->prepare($sql);
		$result->bindParam(":name",$name,PDO::PARAM_STR);
		$result->bindParam(":email",$email,PDO::PARAM_STR);
		$result->bindParam(":password",$password,PDO::PARAM_STR);

		return $result->execute();
	}
	public static function updateAdmin($id,$name,$email,$password){
		$db = DB::getConnection();
		$sql = "UPDATE admin SET name = :name,email = :email,password = :password WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->bindParam(":name",$name,PDO::PARAM_STR);
		$result->bindParam(":email",$email,PDO::PARAM_STR);
		$result->bindParam(":password",$password,PDO::PARAM_STR);

		return $result->execute();
	}
	public static function deleteAdmin($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM admin WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);

		return $result->execute();
	}
	public static function getAdmin($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM admin WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function checkAdminData($email,$password){
		$db = DB::getConnection();
		$sql = "SELECT * FROM admin WHERE email = :email AND password = :password";
		$result=$db->prepare($sql);
		$result->bindParam(":email",$email,PDO::PARAM_STR);
		$result->bindParam(":password",$password,PDO::PARAM_STR);
		$result->execute();
		$get = $result->fetch();
		if($get){
			return $get["id"];
		}
		return false;
	}
	public static function checkEmailExists($email){
		$db = DB::getConnection();
		$sql = "SELECT * FROM admin WHERE email = :email";
		$result=$db->prepare($sql);
		$result->bindParam(":email",$email,PDO::PARAM_STR);
		$result->execute();
		$get = $result->fetch();
		if($get){
			return true;
		}
		return false;
	}
	public static function auth($id){
		$_SESSION["admin"] = $id;
	}
	public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    public static function checkPassword($password)
    {
        if (strlen($password) >= 8) {
            return true;
        }
        return false;
    }
}
?>