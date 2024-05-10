<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM Sach";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
</head>
<body>
    <h1>Danh sách sách</h1>

    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Mã sách</th>
                <th>Tên sách</th>
                <th>Số lượng</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['MaSach']; ?></td>
                    <td><?php echo $row['TenSach']; ?></td>
                    <td><?php echo $row['SoLuong']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Không có dữ liệu sách.</p>
    <?php endif; ?>

  
</body>
</html>