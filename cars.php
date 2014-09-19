<? php
	if(isset($_GET)) {
	  
  	  foreach($car_order as $car_order) 	{
	     foreach($car_order as $key=> $value) {
	        echo $key . ': ' . $value . "<br>  \n";
	      }
	        echo '<br>';
	}
	
	
	}
	
	$car_orders[0]['model'] = 'taurus';
	$car_orders[0]['engine'] = 'v6';
	$car_orders[0]['color'] = 'blue';
	$car_orders[1]['model'] = 'mustang';
	$car_orders[1]['engine'] = 'v8';
	$car_orders[1]['color'] = 'black';
	$car_orders[2]['model'] = 'focus';
	$car_orders[2]['engine'] = 'v6';
	$car_orders[2]['color'] = 'blue';


	if(empty($_GET)) {
  	  foreach($car_order as $car_order) 	{
	     foreach($car_order as $key=> $value) {
	        echo $key . ': ' . $value . "<br>  \n";
	      }
	        echo '<a href=' . '"#"' . '>Car Order</a>';
		echo '<br>';

		}
	}

	print_r($car_orders[$_GET['car_order']]);

	foreach($car_order as $car_order) 	{
	   foreach($car_order as $key=> $value) {
	      echo $key . ': ' . $value . "<br>  \n";
	    }
	      echo '<br>';
	}



	print_r($car_order);

	$car = new $car_order;
	
	$car->setColor('blue');
	
	print_r($car);
	echo $car->make;


	abstract class car{
	  protected $engine;
	  protected $wheels =4;
	  protected $doors;
	  protected $length;
	  protected $weight;
	  protected $colot;
	
	  public function setColor($color)
		$this-> color = $color;

	}
	

	abstract class ford extends car{}
	class taurus extends ford{
		public function __construct() {
		  $this->engine = 'v6';
		  $this->doors ='4';
		  $this->length = '200cm';
		  $this->weight = '1700kg';
		
		}
	

	}





?>
