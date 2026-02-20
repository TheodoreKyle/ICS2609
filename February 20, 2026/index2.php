<?php
    class BankAccount {
        private $accountName;
        private $balance;  

        function __construct($accountName, $balance) {
            $this -> accountName = $accountName;
            $this -> balance = $balance; 
        }

        public function getAccountName() {
            return $this -> accountName;
        }

        function getBalance() {
            return $this -> balance;
        }

        function deposit($deposit) {
            $this -> balance += $deposit; 
            // return $this -> balance;
            echo "Deposited amount: " . $deposit . ". Your current balance now is: " . $this -> balance; 
        }

        function withdraw($amount) {
            if ($this -> balance > $amount) {
                $this -> balance -= $amount;
                echo "Withdrew amount: " . $amount . ". Your current balance now is: " . $this -> balance;
            }
            else {
                echo "You have insufficient balance."; 
            }
            // return $this -> balance; 
        }
    }

    $account = new BankAccount("Theodore Kyle Choa", 1000000); 

    echo $account -> getAccountName(); 
    echo "<br>";
    echo $account -> getBalance();
    echo "<br><br>";
    $account -> deposit(2000); 
    echo "<br>"; 
    echo $account -> getBalance(); 
    echo "<br><br>"; 
    echo $account -> withdraw(50000); // 2000000, 50000
    echo "<br><br>"; 

    // echo $account -> deposit(); 

    $account2 = new BankAccount("Juan Dela Cruz", 5000);
    echo $account2 -> getAccountName();
    echo "<br>"; 
    echo $account2 -> getBalance();
    echo "<br>";  
?>