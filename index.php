 <?php
        class car{
            public $color;
            public function setcolor($c) {
                return 'car is : '.$this->color=$c;
            }
        
        public function sayHello(){
            return 'sayHello';
        }
    }
        
$newcar = new car;
$test=$newcar->setcolor('red');
echo $test;
echo '<hr>';
echo $newcar->sayHello();
echo '<hr>';
echo $newcar->color='orange';
