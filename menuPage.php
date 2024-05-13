<?php
  // Starts or resumes a session, necessary for session variables to work.
  session_start();

  // Returns to login.php if not logged in
  if(!isset($_SESSION['username'])){
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arjosh's Cafe</title>
    <link rel="stylesheet" href="menuPage.css?v=<?php echo time(); ?>">
  </head>
  <body>
    <div class="main-div">
      <h1>Welcome to <span class="arjosh-cafe">Arjosh's Cafe!</span>, </h1>
      <h2 class="user"> <span class="echo-user"><?php echo $_SESSION['username']?></span>!</h2>

      <div class="menu-div">
        <h3>Menu:</h3>
        <ul>
          <li>Milktea - &#8369;49</li>
          <li>Iced Coffee - &#8369;100</li>
          <li>Hot Coffee - &#8369;100</li>
          <li>Tea - &#8369;30</li>
          <li>Frappe - &#8369;90</li>
        </ul>
      </div>

      <form action="om.php" method="POST">
        <div class="choose-div">
          <label for="menu"><strong>Choose your order:</strong> </label>

          <select class="dropdown" name="menu" id="menu">
            <option value="Milktea">Milktea</option>
            <option value="Iced-Coffee">Iced Coffee</option>
            <option value="Hot-Coffee">Hot Coffee</option>
            <option value="Tea">Tea</option>
            <option value="Frappe">Frappe</option>
          </select>
        </div>

        <div class="quantity-div"> <!--Requires the user to input quantity.-->
          <label for="quantity"><strong>Quantity:</strong></label>
          <input
            class="quantity-textbox"
            name="quantity"
            type="text"
            placeholder="Enter quantity"
            required
          />
        </div>

        <div class="cash-div"> <!--Requires the user to input cash.-->
          <label for="cash"><strong>Cash:</strong></label>
          <input
            class="cash-textbox"
            type="text"
            name="cash"
            placeholder="Enter amount"
            required
          />
        </div>

        <div class="submit-button-div">
          <input
            class="submit-button"
            type="submit"
            value="PLACE ORDER"
            name="orderButton"
          />
        </div>
      </form>
      
      <div class="logout-div"> <!--Logouts the user back to login page-->
        <input class="logoutBtn" type="submit" value="LOGOUT" onclick="location.href='logout.php'">
      </div>
    </div>
  </body>
</html>
