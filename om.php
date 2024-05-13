<?php
  // Starts or resumes a session, necessary for session variables to work.
session_start();

// Function for calculating the expenses made.
if(isset($_POST['orderButton'])){
    $food = $_POST['menu'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    
    $foodPrice = 0;
    
    switch($food){
        case 'Milktea':
            $foodPrice = 49;
            break;
       case 'Iced-Coffee':
             $foodPrice = 100;
            break;
       case 'Hot-Coffee':
             $foodPrice = 100;
            break;
       case 'Tea':
             $foodPrice = 30;
            break;

        case 'Frappe':
            $foodPrice = 90;
            break;
    }
    
    $totalCost = $foodPrice * $quantity;
    $change = $cash - $totalCost;
    
    // Receipt like message.
    if($change >= 0){
        $message = "THANK YOU FOR ORDERING IN ARJOSH'S CAFE!";
        $totalMessage = "The total cost is:  &#8369;" . $totalCost;
        $changeMessage = "Your change is:  &#8369;" . $change;
    }else{ // If not exact amount of cash, these texts will prompt.
        $message = "YOU NEED TO PAY THE EXACT AMOUNT OF CASH.";
        $missingCash = $change - $change - $change;
        $missingCashMessage = "You are lacking  &#8369;" . $missingCash ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arjosh's Cafe</title>
    <link rel="stylesheet" href="om.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="main-div">
        <?php 
            if(isset($message)) {
                echo "<h2>$message</h2>";
            }
            if(isset($totalMessage)) {
                echo "<h3>$totalMessage</h3>";
            }
            if(isset($changeMessage)) {
                echo "<h3>$changeMessage</h3>";
            }
            if(isset($missingCashMessage)) {
                echo "<h2>$missingCashMessage</h2>";
            }
        ?>
        
        <!--Button to go back to menuPage.php-->
        <input class="back" type="submit" value="Back to Menu" name="backToMenu" onclick="location.href='menuPage.php'">
    </div>
</body>
</html>
