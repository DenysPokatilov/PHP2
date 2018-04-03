<?php

/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 03.04.2018
 * Time: 00:51
 */

class  User
{
    protected $login = null;
    protected $password = null;
    protected $email = null;
    protected $rating = 5;
    protected $isLogged = false;
    public $ggg=100;
    public function logIn()
    {
        echo "You are logIn";
        var_dump($this->isLogged = true);
    }

    public function logOut($somevar)
    {
        echo 'You are log Out,' . '' . $somevar . '' . " go to sleep" . " ";
        echo '</pre>';
        var_dump($this->isLogged = false);
    }
}

 $newa= new User();
$newb= clone $newa;
$newb->ggg=101;
echo $newa->ggg;
echo $newb->ggg;
var_dump($newa);
var_dump($newb);


die();



class Manedger extends User {

}
class Admin extends User {

}

$manadger= new Manedger();
$admin= new Admin();


$callfun = new User();
$callfun->logIn();
echo '</br>';
$callfun->logOut($name = ' Petr ');
echo '</br>';


/*$persona3->rating = "5";
$persona3->email = 'denyspoaktilov@gmail.com';
$persona3->login = "denys";
$persona3->password = '12345';*/

class Car
{
    private $price = 2645.545545;
    public $brand = 'someBrand';
    public $model = 'someModel';
    public $year = null;
    public $driver = null;

    public function setVal($val)
    {
        $this->price = $val;
        $formt = round($val, 2);
        echo $formt;
    }

    public function getVal()
    {

        return $formatirovanayaper = number_format($this->price);

    }

    public function showBrand()
    {
        echo $this->brand . " ";

    }

    public function showModel()
    {
        echo $this->model . " ";

    }

}

class WaterCar extends Car
{
    private $waterspeed;


}
$watercar= new WaterCar();
$watercar->showBrand();

die();
$val = 234.2125;
$obgect = new Car();
$obgect->setVal($val);
$obgect->getVal();
die();

echo '</pre>';
$t = new Car;
echo '</pre>';
$t->showBrand();
echo '</pre>';
$t->showModel();
echo '</pre>';


$firstCar = new Car();
$secondCar = new Car();
$thirdCar = new Car();

$firstCar->brand = 'Toyota';
$firstCar->model = 'Corola';
$firstCar->year = '2000';
var_dump($firstCar);

$secondCar->year = '2015';
$secondCar->brand = 'Mazda';
$secondCar->model = '6';

$thirdCar->brand = 'Ford';
$thirdCar->model = 'Taurus';
$thirdCar->year = '1995';
var_dump($thirdCar);


var_dump($secondCar);

$firstCar->driver = $persona1;
$secondCar->driver = $persona2;
//$secondCar->driver=()
var_dump($firstCar);
var_dump($secondCar);

$thirdCar->driver = $persona3;
print_r($thirdCar);
var_dump($thirdCar);

$a = 'Hello';
$obj = (object)$a;
var_dump($obj);

$a = ['s,fh0', 85765, 446456, 'petr' => $name];
$obj = (object)$a;
var_dump($obj);

