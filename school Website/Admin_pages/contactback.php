<?php

include 'inc/header.php';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!--<div class="conback-cont">
    <table>
        <th>
        <td>name</td>
        <td>surname</td>
        <td>email</td>
        <td>subject</td>
        <td>message</td>
        </th>
    </table>
</div>-->

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Reply</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $host = 'sql200.epizy.com';
    $user = 'epiz_33750808';
    $pass = '9amCwrX9gHsf3';
    $dbname = 'epiz_33750808_umzomtsha';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $sql = 'select * from `contactus`';
    $result = mysqli_query($conn,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $subject = $row['subject'];
        $message = $row['message'];

        echo '    <tr>
      <th scope="row">' . $id . '</th>
      <td>'.$firstName.'</td>
      <td>'.$lastName.'</td>
      <td>'.$email.'</td>
      <td>'.$subject.'</td>
      <td>'.$message.'</td>
      <td><input type="button" value="Reply"/></td>
    </tr>';
      }
    }
    
    
    ?>
    <!--<tr>
      <th scope="row">1</th>
      <td>Dummie name</td>
      <td>Dummie surname</td>
      <td>dummie@email.com</td>
      <td>Math</td>
      <td>Indeed this is a message.</td>
      <td><input type="button" value="Reply"/></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Another name</td>
      <td>Another surname</td>
      <td>another@email.com</td>
      <td>Math Lit</td>
      <td>Indeed this is another message.</td>
      <td><input type="button" value="Reply"/></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Stuart</td>
      <td>Lang</td>
      <td>s.lang@email.com</td>
      <td>Scrabble</td>
      <td>Indeed this is yet another message.</td>
      <td><input type="button" value="Reply"/></td>-->
    </tr>
  </tbody>
</table>