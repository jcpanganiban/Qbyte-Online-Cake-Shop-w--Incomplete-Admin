<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Qbyte Online Cake Shop</title>
  <link rel="stylesheet" href="../css/variables.css" type="text/css" />
  <link rel="stylesheet" href="../css/navbar.css" type="text/css" />
  <link rel="stylesheet" href="../css/index.css" type="text/css" />
  <link rel="stylesheet" href="../css/order.admin.css" type="text/css" />
</head>
<?php
  include "../includes/header-admin.inc.php"
?>
<div class="bg-img">
  <div class="main-admin">
    <div class="daily-report">
      <table>
        <tr>
          <th>Date</th>
          <th>Earnings</th>
        </tr>
        <tr>
          <td id="date">Sample Date</td>
          <td id="earnings">P 6969</td>
        </tr>
      </table>
    </div>
    <div class="orders">
      <table>
        <tr>
          <th>Username</th>
          <th>Orders</th>
          <th>Date</th>
          <th>Price</th>
          <th>Status</th>
          <th>Buttons</th>
        </tr>
        <tr>
          <td>Jepoy</td>
          <td>Dizon</td>
          <td>John</td>
          <td>Cedric</td>
          <td>Tubia</td>
          <td><button id="pending">Pending</button><button id="ready">Ready</button><button
              id="purchased">Purchased</button><button id="terminate">Terminate</button></td>
        </tr>
      </table>
    </div>
  </div>
</div>

</div>
</div>
<footer class="footer"></footer>
</body>

</html>