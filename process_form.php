<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $itemName = $_POST["item-name"];
  $portionSize = $_POST["portion"];
  $uom = $_POST["units"];
  $recipeNumber = $_POST["recipe-number"];
  $calories = $_POST["calories"];
  $protein = $_POST["protein"];
  $carbohydrate = $_POST["carbohydrate"];
  $totalFat = $_POST["total-fat"];
  $saturatedFat = $_POST["saturated-fat"];
  $polyunsaturatedFat = $_POST["polyunsaturated-fat"];
  $transFat = $_POST["trans-fat"];
  $cholesterol = $_POST["cholesterol"];
  $sodium = $_POST["sodium"];
  $potassium = $_POST["potassium"];
  $phosphorus = $_POST["phosphorus"];
  $calcium = $_POST["calcium"];
  $iron = $_POST["iron"];
  $totalFiber = $_POST["total-fiber"];
  $sugar = $_POST["sugar"];
  $fluid = $_POST["fluid"];
  $vitaminA = $_POST["vitamin-a"];
  $vitaminC = $_POST["vitamin-c"];
  $vitaminB1 = $_POST["vitamin-b1"];
  $vitaminB2 = $_POST["vitamin-b2"];
  $niacin = $_POST["niacin"];
  $vitaminB6 = $_POST["vitamin-b6"];
  $magnesium = $_POST["magnesium"];
  $zinc = $_POST["zinc"];
  $copper = $_POST["copper"];
  $vitaminE = $_POST["vitamin-e"];
  $pantothenicAcid = $_POST["pantothenic-acid"];
  $vitaminB12 = $_POST["vitamin-b12"];
  $folate = $_POST["folate"];
  $vitaminK = $_POST["vitamin-k"];
  $selenium = $_POST["selenium"];
  $vitaminD = $_POST["vitamin-d"];
  $iodine = $_POST["iodine"];
  $chloride = $_POST["chloride"];
  $biotin = $_POST["biotin"];
  $fluoride = $_POST["fluoride"];
  $choline = $_POST["choline"];
  $linoleicAcid = $_POST["linoleic-acid"];
  $manganese = $_POST["manganese"];
  $molybdenum = $_POST["molybdenum"];
  $chromium = $_POST["chromium"];
  $carbCnt = $_POST["carb-cnt"];
  $ingredients = $_POST["ingredients-list"];

  // connect to database
  $servername = "localhost";
  $username = "standard";
  $password = "Newsletter!"
  $dbname = "ingredientsDB";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert data into the database
  $sql = "INSERT INTO items(item_name, portion_size, uom, recipe_number, calories, protein, carbohydrate, total_fat, saturated_fat, polyunsaturated_fat, trans_fat, cholesterol, sodium, potassium, phosphorus, calcium, iron, total_fiber, sugar, fluid, vitamin_a, vitamin_c, vitamin_b1, vitamin_b2, niacin, vitamin_b6, magnesium, zinc, copper, vitamin_e, pantothenic_acid, vitamin_b12, folate, vitamin_k, selenium, vitamin_d, iodine, chloride, biotin, fluoride, choline, linoleic_acid, manganese, molybdenum, chromium, carb_cnt, ingredients) 
  VALUES('$itemName', '$portionSize', '$uom', '$recipeNumber', '$calories', '$protein', '$carbohydrate', '$totalFat', '$saturatedFat', '$polyunsaturatedFat', '$transFat, '$cholesterol', '$sodium', '$potassium', '$phosphorus', '$calcium', '$iron', '$totalFiber', '$sugar', '$fluid', '$vitaminA', '$vitaminC', '$vitaminB1', '$vitaminB2', '$niacin', '$vitaminB6', '$magnesium', '$zinc', '$copper', '$vitaminE', '$pantothenicAcid', '$vitaminB12', '$folate', '$vitaminK', '$selenium', '$vitaminD', '$iodine', '$chloride', '$biotin', '$fluoride', '$choline', '$linoleicAcid', '$manganese', '$molybdenum', '$chromium', '$carbCnt', '$ingredients'"
}
