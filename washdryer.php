<?php
    $a = $_POST["number1"];
    $b = $_POST["number2"];
    $c = $_POST["number3"];
    
    $LA = explode(" ", $b);
    $LB = explode(" ", $c);

    class machine {
        public $N;
    }

    class washer extends machine {
        public $WashMin;
        public $WashMax;

        function wash(){
            if ($this->N >= $this->WashMin && $this->N <= $this->WashMax){
                return true;
            }
            else {
                return false;
            }
        }

    }
    class dryer extends machine {
        public $DryMin;
        public $DryMax;
        
        function dry(){
            if ($this->N >= $this->DryMin && $this->N <= $this->DryMax){
                return true;
            }
            else {
                return false;
            }
        }

    }
    $washer = new washer();
    $washer->N = intval($a);
    $washer->WashMin = intval($LA[0]);
    $washer->WashMax = intval($LA[1]);
    $dryer = new dryer();
    $dryer->N = intval($a);
    $dryer->DryMin = intval($LA[0]);
    $dryer->DryMax = intval($LB[1]);
    

    if ($washer->wash() && $dryer->dry()){
        echo "<br>Yes, is possible";
    }
    else {
        echo "<br>No, this is impossible";
    }

    ?>