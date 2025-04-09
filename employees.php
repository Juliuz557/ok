<?php
include 'db_connect.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Employees List</h1>
    </header>
    <section>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Salary</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['position']; ?></td>
                    <td><?= $row['department']; ?></td>
                    <td>$<?= number_format($row['salary'], 2); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </section>
</body>

</html>

<?php $conn->close(); ?>