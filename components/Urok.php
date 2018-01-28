<?php

class Urok{
   public  $subjects;
   public $time;
   public $title;
   public $clock;
   public $id;
    
    public function __construct($id,$title, $time){
        $subjects = SubjectType::getSubjectTypes();
        $this->id = $id;
        $this->title = $title;
        $this->time = $time;
    }
    
    public function getType(){
       // $subjects
    }
    
    public function minusTime(){
        $this->time=$this->time-1;
    }
    
    public function getValid($t){
        if( $this->time<1){
            return false;
        }else if($this->clock == $t){
            return false;
        }else{
            return true;
        }
    }
}

?>