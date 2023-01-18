<?php

class Card
{
    public function __construct($id, $img, $revSideImg)
    {
        $this->id = $id + 1;
        $this->img = $img;
        $this->revSideImg = $revSideImg;
    }

    public function generateNum()
    {
        switch ($this->id) {
            case 1:
            case 2:
                return 'corr12';
            case 3:
            case 4:
                return 'corr34';
            case 5:
            case 6:
                return 'corr56';
            case 7:
            case 8:
                return 'corr78';
            case 9:
            case 10:
                return 'corr910';
            case 11:
            case 12:
                return 'corr1112';
            case 13:
            case 14:
                return 'corr1314';
            case 15:
            case 16:
                return 'corr1516';
            case 17:
            case 18:
                return 'corr1718';
            case 19:
            case 20:
                return 'corr1920';
            case 21:
            case 22:
                return 'corr2122';
            case 23:
            case 24:
                return 'corr2324';
        }
    }

    public function cellNumber() {
        return 'cell'.$this->id;
    }    
}

?>