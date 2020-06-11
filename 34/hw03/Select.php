<?php
class Select
{
  //Property
  //Create String variable $name.
  //Create Array variable $value.

  public string $name;
  public array $vallue;


  //Methods
  // create methods getName() and  setName($name)
  //The string set by this method will be the name of the select field.

  function setName($name)
  {
    $this->name = $name;
  }

  function getName()
  {
    return $this->name;
  }
  //Create method setVallue($value)
  //This methods provides the values used for the options
  //in the select field and checks to be sure the value is an array. 

  function setVallue($value)
  {
    if (is_array($value)) {
      $this->value = $value;
    }
  }

  //Create method getValue()
  function getValue()
  {

    return  $this->value;
  }

  // Create method makeOptions($value)
  //This method creates the actual select options. It is private, 
  //since there is no need for it outside the operations of the class.
  private function makeOptions($value)
  {
    foreach ($value as $key => $value) {
      echo "<option value='$value'>" . strtoupper($value) . "</option>";
    }
  }


  function makeSelect()
  {

    echo '<select name=' . $this->name . '>';
    $this->makeOptions($this->value);
    echo '</select>';
  }
}
    // Create method makeSelect()
    //This method puts it all together to create the select field.
