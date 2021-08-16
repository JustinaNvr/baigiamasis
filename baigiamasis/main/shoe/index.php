<?php

require_once 'Shoe.php';

//class Nike extends Shoe{
//    private $name;
//
//    public function __construct($size, $price, $image, $name)
//    {
//        parent::__construct(($size, $price, $image);
//        $this->name = $name;
//    }
//}
//
//class Adidas extends Shoe{
//    private $name;
//
//    public function __construct($size, $price, $image, $name)
//    {
//        parent::__construct(($size, $price, $image);
//        $this->name = $name;
//    }
//}
//
//class New_Balance extends Shoe{
//    private $name;
//
//    public function __construct($size, $price, $image, $name)
//    {
//        parent::__construct(($size, $price, $image);
//        $this->name = $name;
//    }
//}
//
//class Reebok extends Shoe{
//    private $name;
//
//    public function __construct($size, $price, $image, $name)
//    {
//        parent::__construct(($size, $price, $image);
//        $this->name = $name;
//    }
//}

$shoes_n_am_90 = new Shoe('Nike', [37, 38, 39, 40, 42, 43, 44, 45, 46, 47], 'Air Max 90', '144,99€');
$shoes_n_am_97 = new Shoe('Nike', [37, 39, 41, 42, 43, 44, 45, 46, 47], 'Air Max 97', '139,99€');
$shoes_n_am_bolt = new Shoe('Nike', [37, 39, 40, 41, 42, 43, 44, 45, 47], 'Air Max Bolt', '94,99€');
$shoes_n_am_excee = new Shoe('Nike', [39, 40, 41, 42, 43, 44, 45, 46, 47], 'Air Max Excee', '124,99€');

$shoes_a_yeezy = new Shoe('Adidas', [37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47], 'Yeezy', '550,00€');
$shoes_a_originals = new Shoe('Adidas', [37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47], 'Originals', '105,00€');
$shoes_a_run = new Shoe('Adidas', [37, 38, 40, 41, 42, 43, 44, 45, 46, 47], 'Running', '75,99€');
$shoes_a_superstar = new Shoe('Adidas', [37, 38, 39, 40, 41, 42, 45, 46, 47], 'Superstar', '99,99€');
$shoes_a_tennis = new Shoe('Adidas', [37, 38, 39, 40, 41, 42, 43, 44, 45], 'Tennis', '65,00€');

$shoes_f_distruptor = new Shoe('Fila', [37, 38, 39, 40, 41, 42, 44, 45], 'Distruptor', '109,99€');
$shoes_f_sandblast = new Shoe('Fila', [37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47], 'Sandblast', '64,99€');

$shoes_nb_530 = new Shoe('New Balance', [37, 38, 39, 40, 41, 42, 43, 44, 45], '530', '99,99€');
$shoes_nb_237 = new Shoe('New Balance', [37, 38, 39, 40, 41, 42, 43, 45, 47], '237', '84,99€');
$shoes_nb_327 = new Shoe('New Balance', [37, 38, 39, 40, 41, 42, 43, 45, 47], '327', '109,99€');

$shoes_r_classic = new Shoe('Reebok', [37, 38, 40, 42, 43, 45, 46, 47], 'Classic', '80,00€');
$shoes_r_legacy = new Shoe('Reebok', [37, 38, 39, 40, 41, 42, 43, 46, 47], 'Legacy', '90,00€');
$shoes_r_royal = new Shoe('Reebok', [37, 38, 39, 40, 41, 43, 45, 47], 'Royal', '17,99€');
$shoes_r_vintage = new Shoe('Reebok', [37, 38, 40, 41, 42, 43, 45, 46, 47], 'Vintage', '85,00€');







