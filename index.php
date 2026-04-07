<?php
// Database credentials
$host     = '127.0.0.1';
$db       = 'students';
$user     = 'root';
$pass     = '12345'; // Add your password if you set one during MySQL install
$charset  = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// 1. The Query from your image
$stmt = $pdo->query("SELECT student_id, firstname, lastname, email, `register date` FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student List</title>
    <style>
        table { border-collapse: collapse; width: 100%; font-family: sans-serif; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        tr:nth-child(even) { background-color: #fafafa; }
    </style>
</head>
<body>

    <h2>Users Table Data</h2>

    <table>
        <thead>
            <tr>
                <th>student_id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>register date</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $stmt->fetch()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['student_id']) ?></td>
                    <td><?= htmlspecialchars($row['firstname']) ?></td>
                    <td><?= htmlspecialchars($row['lastname']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['register date']) ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>