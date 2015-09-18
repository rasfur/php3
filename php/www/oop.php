<?

var_dump(get_class_methods('SQLite3'));




// class Validator{
//   private $_val;
//   private $_err = 0;
//   function __construct($v){$this -> _val = $v;}

//   function exec(){
//     return !$_err;

//   }
//   function isInt(){
//     if(!is_integer($this ->  _val))
//       $_err++;
//     return $this;
//   }
//   function isPoS(){
//     if(abs($this ->  _val) !== $this -> _val)
//       $_err++;
//     return $this;
//   }
//   function isStr(){
//     if(is_string($this -> _val))
//       $_err++;
//     return $this;
//   }

// }


// class A{
//   function foo(){echo __CLASS__;}
// }

// class B{
//   function foo(){echo __CLASS__;}
// }

// function deref($name){
//   switch($name){
//     case 'A' : return new A; break;
//     case 'B' : return new B; break;
//   }
// }

// deref('A') -> foo();
///////////////////////////////
// class Person{
//   private $data = array();
//   function __set($n, $v){
//     $this->$data[$n] = $v;
//   }

//   function __get($n){
//     return $data[$n];
//   }
// }
// $x = new Person;
// $x -> name = 'John';
// echo $x -> name;





// function __autoload($name){
//   include $name.".class.php";
// }
// $x = new A;


// // абстрактный метод - метод без реализации
// abstract class Db{
//   public $cnn;
//   abstract function connect();
//   abstract function open();

//   abstract function query();

//   abstract function close();
// }

// is_a($obj, 'Class'); // проверка наследия класса


// class MyDb extends Db{

//   function connect(){}
//   function open(){}
//   function query(){}
//   function close(){}
// }

// $x = new MyDb;


// class MyExceptionOne extends Exception{
//   function  __consruct($msg){
//     parent::__consruct($msg);
//   }
// }

// class MyExceptionTwo extends Exception{
//   function  __consruct($msg){
//     parent::__consruct($msg);
//   }
// }



// class Animal{

//   public $name;
//   public $age;
//   function sayHello($word){
//     echo $this->name.' сказал '.$word.'<br>';
//     $this->drawBr();
//   }

//   function drawBr(){
//     echo '<br>';
//   }

//   function __construct($x=0, $y=0, $z=0){
//     try{
//       if(!$x)
//           throw new MyExceptionOne("Нет первого параметра");
//       if(!$y)
//           throw new MyExceptionTwo("Нет второго параметра");
//       if(!$z)
//           throw new Exception("Нет параметра Z");


//       echo "object #$x created<br>";

//     }catch(MyExceptionOne $e){
//       echo $e->getMessage().'<br>';

//     }catch(MyExceptionTwo $e){
//       echo $e->getMessage().'<br>';

//     }catch(Exception $e){
//       echo $e->getMessage().'<br>';

//     }
//   }

//   function __destruct(){
//     echo "Object Deleted<br>";
//   }

//   function __clone(){
//     echo "object cloned<br>";
//   }
// }

// $cat = new Animal(1);
// $dog = new Animal();
// $kajto = new Animal(1,2);

// $cat -> name = 'Мурзик';
// $dog -> name = 'Тузик';

// $bigcat = clone $cat;
// $cat -> sayHello('Мяу!');
// $dog -> sayHello('Гав!');
// //1.07
?>