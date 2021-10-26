<html>
    <head></head>

    <body>
        <?php
            class People {
                public $name, $dob, $hobby;
              
                function __construct($name, $dob, $hobby) {
                  $this->name = $name;
                  $this->dob = $dob;
                  $this->hobby = $hobby;
                }
                
                function getAge() {
                    $birthDate = $this->dob;
                    $age = floor((time() - strtotime($this->dob)) / 31556926);
                    return "Hi $this->name, you are $age years old! You like to confuse yourself with $this->hobby";
                }
              }
              
              $person = new People("Kevin", "25-10-2000", "OOP");
              echo $person->getAge();
        ?>
    </body>
</html>