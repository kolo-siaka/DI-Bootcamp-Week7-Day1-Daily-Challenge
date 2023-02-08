<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	

	 <?php 
          /**
           * 
           */
          class User
          {
          	public $firstName;
          	public $lastname;
          	function hello()
          	{
          	   return 'Hello '.$this->firstName;
          	}

          	public function test()
          	{
          		echo $this->hello(),$this->lastname;
          	}
          }

	  ?>



</body>
</html>