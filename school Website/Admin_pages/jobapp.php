<?php

include 'inc/header.php';

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!--<div class="container">
    <h1>job applications</h1>
</div>-->

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">CV</th>
            <th scope="col">Position applied for</th>
            <th scope="col">Accept or Reject</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $host = 'sql200.epizy.com';
        $user = 'epiz_33750808';
        $pass = '9amCwrX9gHsf3';
        $dbname = 'epiz_33750808_umzomtsha';
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $sql = 'select * from `career_db`';
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $firstName = $row['fName'];
                $lastName = $row['lName'];
                $email = $row['email'];
                $position = $row['position'];


                echo '    <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $firstName . '</td>
      <td>' . $lastName . '</td>
      <td>' . $email . '</td>
      <td>' . $position . '</td>
      <td><input type="button" value="Reply"/></td>
    </tr>';
            }
        }


        ?>
</table>