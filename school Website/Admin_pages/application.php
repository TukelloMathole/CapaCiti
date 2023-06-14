<?php

include 'inc/header.php';
?>


<div class="app-container">
    <table>
        <tr>
            <td>view</td>
            <td>name</td>
            <td>surname</td>
            <td>previous school</td>
            <td>grade apply for</td>
            <td>actions</td>
        </tr>
        <?php
        $host = 'sql200.epizy.com';
        $user = 'epiz_33750808';
        $pass = '9amCwrX9gHsf3';
        $dbname = 'epiz_33750808_umzomtsha';
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = 'select * from `studentapp_db`';
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $firstName = $row['firstName'];
                $lastName = $row['LearnerSurname'];
                $email = $row['NameOfSchool'];
                $position = $row['Grade'];


                echo '    <tr>
      <td scope="row">' . $id . '</td>
      <td>' . $firstName . '</td>
      <td>' . $lastName . '</td>
      <td>' . $email . '</td>
      <td>' . $position . '</td>
      <td><input type="button" value="More"/></td>
    </tr>';
            }
        }


        ?>
    </table>
</div>