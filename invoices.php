<?php
  $sql = "
    SELECT InvoiceId, CustomerId, InvoiceDate, Total
    FROM invoices
  ";

  $pdo = new PDO('sqlite:chinook.db'); // PHP Data Objects
  $statement = $pdo->prepare($sql); // prepared statements
  $statement->execute(); // executes the SQL

  $invoices = $statement->fetchAll();

  // var_dump($invoices); // like console.log but for php
  // exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoices</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Invoice ID</th>
        <th>Customer ID</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($invoices as $invoice) : ?>
        <tr>
          <td><?php echo $invoice['InvoiceDate'] ?></td>
          <td><?php echo $invoice['InvoiceId'] ?></td>
          <td><?php echo $invoice['CustomerId'] ?></td>
          <td><?php echo $invoice['Total'] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>