<?php
require_once 'controller/form.php';
$control = new formController();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <title>Welcome | Administrator</title>
</head>
<body>
<div id="wrapper">
    <div class="left_container">
        <div class="dropdown">
            <button class="dropbtn">Administrator Menu</button>
            <div class="dropdown-content">
                <a href="?url=1">Show all</a>
                <a href="?url=2">Add New</a>
                <a href="?url=3">Update</a>
                <a href="?url=4">Delete</a>
            </div>
        </div>
    </div>
    <div class="right_container">
        <?php
        if (isset($_GET['url']) && $_GET['url'] == '1') {
            echo '<h2>ALL EMPLOYEES</h2>';
            $employees_data = array();
            $employees_data = $control->showall();
            $data[] = $employees_data;
            ?>
            <table>
                <tr>
                    <th>Email</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Title</th>
                    <th>Phone</th>
                </tr>
                <?php
                for ($i = 0; $i < count($employees_data); $i++) {
                    foreach ($data as $item) {
                        ?>
                        <tr>
                            <td><?php echo $item[$i]['email']; ?></td>
                            <td><?php echo $item[$i]['fname']; ?></td>
                            <td><?php echo $item[$i]['lname']; ?></td>
                            <td><?php echo $item[$i]['title']; ?></td>
                            <td><?php echo $item[$i]['phone']; ?></td>
                        </tr>
                    <?php }
                } ?>
            </table>
        <?php } ?>
    </div>
</div>
</body>
</html>