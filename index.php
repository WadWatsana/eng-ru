<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '', 'eng_ru');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM subject";
    $result = $connect->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>ข้อมูลราคาเมนูของร้าน</h1>
        <table>
            <thead>
                <tr>
                    <td width="5%">#</td>
                    <td width="25%">ชื่อเมนู</td>
                    <td width="25%">ราคา (บาท) </td>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td class="branch">
                         <?php echo $row['branch'];?>
                        </td>
                        <td><?php echo $row['branch']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>

    </div>
</body>
</html>