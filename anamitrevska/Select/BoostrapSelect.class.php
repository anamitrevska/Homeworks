<?php
namespace anamitrevska\Select{

    class BoostrapSelect extends ASelect{
        const BOOTSTRAP_FORM_CLASS="form-group";
        const BOOTSTRAP_SELECT_CLASS ="form-control";


        public function makeSelect($array)
        {

            ?>
            <div class="<?php echo self::BOOTSTRAP_FORM_CLASS ?>">
            <select name="<?php echo $this->name ?>" class="<?php echo self::BOOTSTRAP_SELECT_CLASS ?>"> 
         <?php  $this->makeOptions($array); ?>
        </select>
        </div>
        <?php
        }
    }

    }


?>