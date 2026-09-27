<!DOCTYPE html>
<html>
<head>
    <title>Week4 PA - Jaser</title>
</head>
<body>

<h2>Current Products:</h2>

<table border="1" cellpadding="5">
<tr>
    <th>Product #</th>
    <th>Name</th>
    <th>Type</th>
</tr>

<?php while($row = $products->fetch_assoc()): ?>
<tr>
    <td><?= $row['ProductNo'] ?></td>
    <td><?= $row['Name'] ?></td>
    <td><?= $row['Type'] ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>
