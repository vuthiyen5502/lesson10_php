<?php
//bai1
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Create objects of Circle and Rectangle classes
$circle = new Circle(5);
$circleArea = $circle->calculateArea();
echo "Circle area: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 6);
$rectangleArea = $rectangle->calculateArea();
echo "Rectangle area: " . $rectangle->calculateArea() . "\n";
echo "<br>";
//bai2
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow! Meow!";
    }
}

// Create objects of Dog and Cat classes
$dog = new Dog();
$cat = new Cat();

// Make sounds
$dog->makeSound();
echo "\n";
$cat->makeSound();
echo "<br>";
//bai3
abstract class Employee {
    protected $name;
    protected $salary;

public function __construct ($name,$salary){
    $this->name=$name;
    $this->salary=$salary;

}
abstract public function displayDetails();
}
class Manager extends Employee {
    public function displayDetails(){
        return "Name:" .$this->name.",Salary:".$this->salary;
    }
}
class Staff extends Employee {
    public function displayDetails(){
        return "Name:" .$this->name.",Salary:".$this->salary;
    }
}
$manager =new Manager ("yen",1000);
$staff =new Staff ("anh", 2000);
echo $manager->displayDetails();
echo "<br>";
echo $staff->displayDetails();
echo "<br>";
//bai4
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        echo "Car started.\n";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        echo "Motorcycle started.\n";
    }
}

// Create objects of Car and Motorcycle classes
$car = new Car();
$motorcycle = new Motorcycle();

// Start vehicles
$car->start();
$motorcycle->start();
echo "<br>";
//bai5
abstract class Database {
    abstract public function connect();
    abstract public function query($sql);
    abstract public function disconnect();
}


class MySQLDatabase extends Database {
    public function connect() {
        echo "Connecting to MySQL database.\n";
        // Code kết nối đến cơ sở dữ liệu MySQL
    }


    public function query($sql) {
        echo "Running MySQL query: $sql\n";
        // Code thực thi câu truy vấn trên cơ sở dữ liệu MySQL
    }


    public function disconnect() {
        echo "Disconnecting from MySQL database.\n";
        // Code ngắt kết nối cơ sở dữ liệu MySQL
    }
}


class PostgreSQLDatabase extends Database {
    public function connect() {
        echo "Connecting to PostgreSQL database.\n";
        // Code kết nối đến cơ sở dữ liệu PostgreSQL
    }


    public function query($sql) {
        echo "Running PostgreSQL query: $sql\n";
        // Code thực thi câu truy vấn trên cơ sở dữ liệu PostgreSQL
    }


    public function disconnect() {
        echo "Disconnecting from PostgreSQL database.\n";
        // Code ngắt kết nối cơ sở dữ liệu PostgreSQL
    }
}


// Sử dụng các lớp con để gọi phương thức connect, query và disconnect


$mysql = new MySQLDatabase();
$mysql->connect(); // Output: Connecting to MySQL database.
$mysql->query("SELECT * FROM users"); // Output: Running MySQL query: SELECT * FROM users
$mysql->disconnect(); // Output: Disconnecting from MySQL database.


$postgres = new PostgreSQLDatabase();
$postgres->connect(); // Output: Connecting to PostgreSQL database.
$postgres->query("SELECT * FROM employees"); // Output: Running PostgreSQL query: SELECT * FROM employees
$postgres->disconnect(); // Output: Disconnecting from PostgreSQL database.