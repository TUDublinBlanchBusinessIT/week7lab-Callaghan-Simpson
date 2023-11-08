<?php
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
           if $hScore>$aScore{
               return $this->totalPoints+=3
            else
               return $this->totalPoints+=1
           }
               
    return $this->totalGames+=1;
    }
    
}
?>