<?php

namespace anamitrevska\Select{

    abstract class ASelect{

        protected $name;
        protected $value;

        public function getname(){
            return $this->name;
        }

        public function setname($name){
            $this->name=$name;
        }

        public function getvalue(){
            return $this->value;
        }

        public function setvalue($value){
            $this->value=$value;
        }


        protected function makeOptions ($array){
            foreach($array as $key=>$value){
                echo "<option value='$value'>" . strtoupper($value) . "</option>";
            }
        }

        public abstract function makeSelect($array);

    }

}
?>