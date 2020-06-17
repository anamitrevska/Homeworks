<?php

namespace anamitrevska\Select{
    class HtmlSelect extends ASelect{

        public function makeSelect($array)
        {
            echo '<select name=' . $this->name . '>';
            $this->makeOptions($array);
            echo '</select>';
        }
    }
}

?>