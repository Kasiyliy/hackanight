<?php
class AdminRankController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$ranks = array();
		$ranks = Rank::getRanks();
		
        include_once(DIRNAME.'backend/Rank/RankList.php');
        return true;
    }
    
    public function actionView($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$rank = Rank::getRankByID($id);
		
		$title = false;
		$max_student = false;
		
		if(isset($_POST["rank_update"])){
		    $title = $_POST["title"];
		    $max_student = $_POST["max_student"];
		    
    		Rank::updateRank($rank["id"],$title,$max_student);
    		header("Location:/admin/ranks");
		}
		
		
		include_once(DIRNAME.'backend/Rank/RankView.php');
        return true;
    }
    
    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$title = false;
		$max_student = false;
		
		if(isset($_POST["rank_add"])){
		    $title = $_POST["title"];
		    $max_student = $_POST["max_student"];
    		
    		Rank::addRank($title,$max_student);
    		header("Location:/admin/ranks");
		}
		
		include_once(DIRNAME.'backend/Rank/RankAdd.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Rank::deleteRank($id);
    	header("Location:/admin/ranks");
        return true;
    }
}
?>