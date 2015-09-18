<?



class User extends AUser{
  public $name;
  public $login;
  public $password;
  public static $cntU = 0;



  function __construct($n, $l, $p){
    $this -> name = $n;
    $this -> login = $l;
    $this -> password = $p;
    ++self::$cntU;
  }

  function __destruct(){
    echo 'Пользователь '.$this->name. ' Удален !<br>';
  }




  function showinfo(){
    echo "<p>Name: ". $this -> name .'</p>';
    echo "<p>Login: ". $this -> login .'</p>';
    echo "<p>Pass: ". $this -> password .'</p>';
  }

  function __clone(){
    $this -> name = '';
    $this -> login = '';
    $this -> password = '';
    ++self::$cntU;
  }
}