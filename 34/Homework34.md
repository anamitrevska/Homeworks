### Homework 34

## Homework 01
1. Create a “Person” class and instantiate an object of it.
2. Add properties for name, age.
3. Add methods getName(), getAge() which will return values of properties name and age.
4. Invoke var_dump() on the person object to inspect it.

## Homework 02
We have our script.php that is written in procedural way, using associative arrays. Rewrite this code to use OOP approach, you can use script_object.php as starting point where I put detail instructions.    


## Homework 03
In this PHP exercise, you will build the beginnings of a user registration form. To do this, you will create a class for making the select field, then use an object derived from the class in the form. You can begin with the script you wrote for Homework 24 hw01-func-another.php , since you will be revising the two functions you created there as methods of your class.      

First of all, write an array that includes browser types: Firefox, Chrome, Internet Explorer, Safari, Opera, Other.      

Then begin to write the class Select. You will need two properties, $name for the name of the select field, and $value, an array to provide the option values. You will also need four methods in addition to the two methods you will adapt from Homework 24: setName, getName, setValue, getValue. Checking to be sure the value is an array belongs in the setValue method, so write that here, and delete it from from makeSelect if you are using your script from Homework 24.     

Now we come to the two functions you wrote to generate the select field for Homework 24. Change the makeOptions function to iterate over the array argument's values rather than keys. This will be your fifth method. Then revise the makeSelect function to be the sixth method in your class.    

Next comes the HTML. Write a user registration form asking for name, username, email, browser. Use text fields to collect the user data for the first three, then instantiate an object based on your class for the select field. When the user clicks the submit button, return the data as confirmation.    

If you were creating a registration form to use on the Web, you would want to collect the data in a database.  

EXTRA: Create a database and save data from the form in the database.