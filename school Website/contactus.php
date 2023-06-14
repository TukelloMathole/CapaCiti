<?php
include 'inc/header.php'

?>

<div class="contact_section">
    <div class="box">
        <form name="conForm" onsubmit="contSubmit()" method="POST">
            <table>
                <tr>
                    <td><label for="">Name: <input type="text" name="F_name"></label></td>
                    <td><label for="">surname: <input type="text" name="S_name"></label></td>
                </tr>
                <tr>
                    <td><label for="">Email: <input type="text" name="Email"></label></td>
                    <td><label for="">subject: <input type="text" name="Subject"></label></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            <textarea name="MessageBox" id="" cols="30" rows="7"></textarea>
            <input type="submit" value="Submit" id="submit">
        </form>
    </div>
    <div class="box" id="box-2">
        <table>
            <tr>
                <td><i class="bi bi-telephone"></i></td>
                <td><label for="">021 909 0099</label></td>
            </tr>
            <tr>
                <td><i class="bi bi-envelope"></i></td>
                <td><label for="">mzamomtshaprimaryschool@org.com</label></td>
            </tr>
            <tr>
                <td><i class="bi bi-geo-alt"></i></td>
                <td><label for="">Valangen Tambo Str Cape Town</label></td>
            </tr>
            <tr>
                <td><i class="bi bi-clock"></i></td>
                <td><label for="">Mon-Fri 08:00-17:00 </label></td>
            </tr>
        </table>
    </div>
</div>


<?php
include 'inc/footer.php'

?>