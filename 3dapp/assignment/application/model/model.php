<?php
class Model
{
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;

	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test2.db';

		// Then create a connection to a database with the PDO() function
		try {
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
			));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		} catch (PDOEXception $e) {
			echo "I'm sorry, Lester. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
			print new Exception($e->getMessage());
		}
	}

	public function dbCreate()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (id INTEGER PRIMARY KEY, modelTitle TEXT, name TEXT, info TEXT, ingredients TEXT, x3dUrl TEXT, imageUrl0 TEXT, imageUrl1 TEXT, imageUrl2 TEXT, imageUrl3 TEXT, imageUrl4 TEXT)");
			$this->dbhandle->exec(
				"INSERT INTO Model_3D (Id, modelTitle, name, info, ingredients, x3dUrl, imageUrl0, imageUrl1, imageUrl2, imageUrl3, imageUrl4) 
				VALUES (1, 'Fanta X3D Model', 'Fanta Can', 'Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.', 'Carbonated Water, Sugar, Orange Juice from Concentrate (3.7%), Citrus Fruit from Concentrate (1.3%), Citric Acid, Vegetable Extracts (Carrot, Pumpkin), Sweeteners (Acesulfame K, Sucralose), Preservative (Potassium Sorbate), Malic Acid, Acidity Regulator (Sodium Citrate), Stabiliser (Guar Gum), Natural Orange Flavourings with Other Natural Flavourings, Antioxidant (Ascorbic Acid).', '../application/assets/x3d/fanta.x3d', '../application/assets/images/my_images/fantaX3D.png', '../application/assets/images/my_images/fanta(1).jpg', '../application/assets/images/my_images/fanta(2).jpg', '../application/assets/images/my_images/fanta(3).jpg', '../application/assets/images/my_images/fanta(4).jpg'); " .
					"INSERT INTO Model_3D (Id, modelTitle, name, info, ingredients, x3dUrl, imageUrl0, imageUrl1, imageUrl2, imageUrl3, imageUrl4) 
			VALUES (2, 'Sprite X3D Model', 'Sprite', 'Sprite is a crisp, refreshing and clean-tasting lemon and lime-flavoured soft drink.', 'Carbonated Water, Sugar, Citric Acid, Sweeteners (Acesulfame K, Aspartame), Acidity Regulator (Sodium Citrate), Natural Lemon and Lime Flavourings.', '../application/assets/x3d/sprite.x3d', '../application/assets/images/my_images/spriteX3D.png', '../application/assets/images/my_images/sprite(1).png', '../application/assets/images/my_images/sprite(2).png', '../application/assets/images/my_images/sprite(3).png', '../application/assets/images/my_images/sprite(4).jpg'); " .
					"INSERT INTO Model_3D (Id, modelTitle, name, info, ingredients, x3dUrl, imageUrl0, imageUrl1, imageUrl2, imageUrl3, imageUrl4) 
			VALUES (3, 'Oasis X3D Model', 'Oasis Summer Fruits', 'The UKs number one on-the-go juice drink, this time with your favourite summer fruits.', 'Water, Sugar, Fruit Juices From Concentrates 5% (Apple 1.7%, Strawberry 1.5%, Redcurrant 1.2%, Cherry 0.6%), Citric Acid, Natural Berry Flavouring with Other Natural Flavourings, Fruit and Vegetable Concentrates (Blueberry, Blackcurrant, Carrot, Apple, Hibiscus), Stabiliser (Polyphosphates), Acidity Regulator (Sodium Citrate), Preservatives (Potassium Sorbate, Sodium Benzoate), Sweeteners (Aspartame, Acesulfame K). Contains a Source of Phenylalanine.', '../application/assets/x3d/oasis.x3d', '../application/assets/images/my_images/oasisX3D.png', '../application/assets/images/my_images/oasis(1).jpg', '../application/assets/images/my_images/oasis(2).jpg', '../application/assets/images/my_images/oasis(3).jpg', '../application/assets/images/my_images/oasis(4).png'); "
			);
			return "X3D model data inserted successfully inside test1.db";
		} catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbRead()
	{
		try {

			//Get the database as an object
			$sql = 'SELECT * FROM Model_3D';
			$stmt = $this->dbhandle->query($sql);

			//Set up an array to return the results to the view
			$result = null;

			//Set up a variable to index each row of the array
			$i = 0;

			//Use a while loop to loop through the rows
			while ($data = $stmt->fetch()) {

				//Write the database contents to the results array for sending back to the view
				$result['Model_3D'][$i]['modelTitle'] = $data['modelTitle'];
				$result['Model_3D'][$i]['name'] = $data['name'];
				$result['Model_3D'][$i]['info'] = $data['info'];
				$result['Model_3D'][$i]['ingredients'] = $data['ingredients'];
				$result['Model_3D'][$i]['x3dUrl'] = $data['x3dUrl'];
				$result['Model_3D'][$i]['imageUrl0'] = $data['imageUrl0'];
				$result['Model_3D'][$i]['imageUrl1'] = $data['imageUrl1'];
				$result['Model_3D'][$i]['imageUrl2'] = $data['imageUrl2'];
				$result['Model_3D'][$i]['imageUrl3'] = $data['imageUrl3'];
				$result['Model_3D'][$i]['imageUrl4'] = $data['imageUrl4'];

				//increment the row index
				$i++;
			}
		} catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}

		//Close the database connection
		$this->dbhandle = NULL;

		//Send the response back to the view
		return $result;
	}

	function dbDelete() {
		$this->dbhandle->exec("DROP TABLE Model_3D");
		return "Models table successfully deleted from inside models.sqlite file";
	}
}
