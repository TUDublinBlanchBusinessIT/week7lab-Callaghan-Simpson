<?php

date_default_timezone_set('Europe/Dublin');
class Team 
{
    
    private $name="";
    private $totalPoints=0;
    private $totalGames=0;
    private $totalGoals=0; 
    
    public function __construct($name)
    {
        $this->name=$name;
    }
    
    public function finalScore($hScore,$aScore)
    {
        $this->totalgames++;
        $this->totalGoals += $hScore;
                
        if ($hScore>$aScore){
            $this->totalPoints+=3;
        }
        elseif($hScore==$aScore){
            $this->totalPoints+=1;
        }
               
    }
    
    public function getGoalAverage()
    {
        
    }
    
}
?>