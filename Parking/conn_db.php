

<?php 
class dbConfig {
   public $host;
   public $username;
   public $password;
   public $dab;
   public $conn;

public function dbConnect() {
    $this->conn = mysqli_connect($this->host,$this->username,$this->password);

    if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "Connected successfully to server";
    }

    $db_selected = mysqli_select_db($this->conn, $this->dab);

    if (!$db_selected) {
        // if the given database doesn't exists
        // creates new database with that name
        $db_sql = 'CREATE DATABASE parking';

        // verify the database is created
        if (mysqli_query($this->conn, $db_sql)){
            echo "Database parking already exists or created successfully\n";
        } else {
            echo 'Error creating database: ' . mysqli_error() . "\n";
        }
    }

    // creating tables
    $table_sql1 = "CREATE TABLE IF NOT EXISTS users (".
            "id INT PRIMARY KEY AUTO_INCREMENT,".
            "username VARCHAR(30) UNIQUE,".
            "password VARCHAR(50),".
			"phone VARCHAR(50),".
            "name VARCHAR(100),".
			"vehicletype VARCHAR(50),".
			"vehicleno VARCHAR(50),".
            "email VARCHAR(70) UNIQUE); ";

    $table_sql2 = "CREATE TABLE IF NOT EXISTS owners (".
            "id INT PRIMARY KEY AUTO_INCREMENT,".
            "username VARCHAR(30) UNIQUE,".
            "password VARCHAR(50),".
            "phone VARCHAR(50),".
            "name VARCHAR(100),".
            "address VARCHAR(50),".
            "email VARCHAR(70) UNIQUE); ";

    $table_sql3 = "CREATE TABLE IF NOT EXISTS admin (".
            "id INT PRIMARY KEY AUTO_INCREMENT,".
            "name VARCHAR(100),".
            "username VARCHAR(30) UNIQUE,".
            "password VARCHAR(50),".
            "phone VARCHAR(50),".
            "email VARCHAR(70) UNIQUE); ";





    // verify the table is created
        if (mysqli_query($this->conn, $table_sql1)) {
            echo "Table1: users already exists or created successfully\n";
        } else {
            echo 'Error creating table1: ' . mysqli_error($table_sql1) . "\n";
        }
        if (mysqli_query($this->conn, $table_sql2)) {
            echo "Table2: users already exists or created successfully\n";
        } else {
            echo 'Error creating table2: ' . mysqli_error($table_sql2) . "\n";
        } 
        if (mysqli_query($this->conn, $table_sql3)) {
            echo "Table3: users already exists or created successfully\n";
        } else {
            echo 'Error creating table3: ' . mysqli_error($table_sql3) . "\n";
        }
       
}
}


$obj = new dbConfig();

$obj->host = 'localhost';
$obj->username = 'root';
$obj->password = '';
$obj->dab = 'parking';
$obj->dbConnect();


?>
