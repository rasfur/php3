<?

class SuperUser extends User implements ISuperUser{

  public static $cntSU = 0;

  function __construct($n, $l, $p, $r){
    parent:: __construct($n, $l, $p);
    $this -> role = $r;
    ++self::$cntSU;
    --parent::$cntU;
  }
  function showinfo(){
    parent::showinfo();
    echo 'Role: ' . $this->role.'<br>';
  }
  function getInfo(){
    //$arr = array();

    /* вывод getInfo() 1 вариант */
    // foreach($this as $k => $v)
    //   $arr[$k] = $v;
    // return $arr;

    /* вывод getInfo() 2 вариант */
    return (array)$this;

  }
}