<?php


class ScheduleController{
    public function actionCreate(){
        $subjects = SubjectType::getSubjectTypes();
        $times = Time::getTimes();
        $rooms = Room::getRooms();
        $weeks = Week::getWeeks();
        $groups = Group::getGroups();
        $teachers = Teacher::getTeachers();
            
            echo "<table>";
        foreach ($times as $time){
          
            echo "<tr>";  echo $time["start_time"]."-".$time["end_time"]; 
            foreach($weeks as $week){
              echo "<td>"; 
               
               foreach($rooms as $room){
                  // if(Schedule::checkRoom($room["id"],$time["start_time"],$time["end_time"])){
                  //    
                 // }
                  echo $room["title"].", ";
               }
              echo "</td>"; 
               
                echo $week["title"];
            }
            echo "<tr><br>";
            
        }
        
        
            echo "</table>";
    
                           
                                 
        return true;
    }
   
}







?>


