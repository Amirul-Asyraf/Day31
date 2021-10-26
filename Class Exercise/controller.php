<?php
    class Customer {
        public $cust_name;
        public $cust_id;

        function __construct($cust_name, $cust_id) {
            $this->cust_name = $cust_name;
            $this->cust_id = $cust_id;

        }

        function get_name() {
            return $this->cust_name;
        }

        function get_id() {
            return $this->cust_id;
        }
    }

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo $name;

        //Save to database
        newName($name, $conn);

        //Select name from database
        // $user_name = getName($name, $conn);

        //Select id from database
        // $user_id = getID($name, $conn);

        $customer = new Customer(getName($name, $conn), getID($name, $conn));
        echo $customer->get_name();
        echo '<br>';
        echo $customer->get_id();
        
    }
?>