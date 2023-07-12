<?php
//bai1
interface Resizable {
    public function resize($percentage);
}


class Rectangle implements Resizable {
    private $width;
    private $height;


    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }


    public function resize($percentage) {
        $this->width *= (1 + ($percentage / 100));
        $this->height *= (1 + ($percentage / 100));
    }


    public function getWidth() {
        return $this->width;
    }


    public function getHeight() {
        return $this->height;
    }
}


// Sử dụng lớp Rectangle để thay đổi kích thước của hình chữ nhật


$rectangle = new Rectangle(10, 5);
echo "Original Width: " . $rectangle->getWidth() . "\n"; // Output: Original Width: 10
echo "Original Height: " . $rectangle->getHeight() . "\n"; // Output: Original Height: 5


$rectangle->resize(50);
echo "Resized Width: " . $rectangle->getWidth() . "\n"; // Output: Resized Width: 15
echo "Resized Height: " . $rectangle->getHeight() . "\n"; // Output: Resized Height: 7.5
echo "<br>";
//bai2
interface Logger {
  public function logInfo();
  public function logWarning();
  public function logError();
}
class FileLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
class DatabaseLogger implements Logger {
  public function logInfo() {

  }
  public function logWarning() {
      
  }
  public function logError() {
      
  }
  protected $log;
  public function __construct($log) {
      $this->log = $log;
      $this->logInfo();
      $this->logWarning();
      $this->logError();
  }
  public function getLog() {
      return $this->log;
  }
}
$FileLogger = new FileLogger("bug...1");
$DatabaseLogger = new DatabaseLogger("bug...2");
echo $FileLogger->getLog(). "<br>";
echo $DatabaseLogger->getLog(). "<br>";
//bai3
interface Drawable {
    public function draw();
}


class Circle implements Drawable {
    private $radius;


    public function __construct($radius) {
        $this->radius = $radius;
    }


    public function draw() {
        echo "Drawing a circle with radius $this->radius.\n";
    }
}


class Square implements Drawable {
    private $sideLength;


    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }


    public function draw() {
        echo "Drawing a square with side length $this->sideLength.\n";
    }
}


// Sử dụng lớp Circle và Square để vẽ hình


$circle = new Circle(5);
$circle->draw(); // Output: Drawing a circle with radius 5.


$square = new Square(10);
$square->draw(); // Output: Drawing a square with side length 10.
echo "<br>";
//bai4
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function sort() {
        sort($this->data);
        return $this->data;
    }
}
$arraySorter = new ArraySorter([1,6,2,4,9]);
$sortedArray = $arraySorter->sort();
echo "Array after sorting: " . implode(", ", $sortedArray);
echo "<br>";
//bai5
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using AES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting AES encrypted data...";
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using DES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting DES encrypted data...";
    }
}

$aes = new AES();
$aes->encrypt("Data to encrypt"); 
$aes->decrypt("Encrypted data"); 
echo "<br>";
$des = new DES();
$des->encrypt("Data to encrypt"); 
$des->decrypt("Encrypted data");