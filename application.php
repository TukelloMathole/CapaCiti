<?php
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    * {
        background-image: url();
    }

    table {
        background-color: steelblue;
    }




    h2 {
        background-color: black;
        border-radius: 10px;
        color: white;
        font-family: monospace;
    }

    a {
        text-decoration: none;
        color: white;
        background-color: black;
        border-radius: 5px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>

<h1 align="center" bgcolor="Red">
    <font face="arial" color="#073B6C">Learner Application Form </font>
</h1>
<form  onsubmit="return regValidation()">
    <table border="0" cellpadding="5" cellspacing="4" width="300" height="400" align="center" bgcolor="#FFFFFF" style="border:1px solid #C8C6C6;">
        <tr>
            <td colspan="4">
                <font face="arial" color="#ea2f41">
                    <h2>Learner details</h2>
            </td>
        </tr>
        <tr>
            <td>First Name</td>
            <td> <input type="text" name="First-name"></td>
            <td>Grade</td>
            <td>
                <input type="text" name="Grade">
            </td>
        </tr>

        <tr>

            <td>Date of Birth</td>
            <td>
                <input type="date" id="start" name="DOB" value="2000-07-22" min="1997-01-01" max="2023-12-31">
            </td>
        </tr>
        <tr>
            <td>Surname</td>
            <td> <input type="text" name="LearnerSurname"></td>
            <td>Email</td>
            <td> <input type="text" name="LearnerEmail"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="Gender">
                    <option>select </option>
                    <option>Male </option>
                    <option>Female </option>
                </select>
            </td>
            <td>Mobile No.</td>
            <td> <input type="text" name="LearnerMobileNumber"></td>
        </tr>
        <tr>
            <td>Community</td>
            <td>
                <select name="Leaner-Community">
                    <option>select </option>
                    <option>BC-d </option>
                    <option>OC </option>
                </select>
            </td>
            <td>Alternate Mobile</td>
            <td> <input type="text" name="LearnerAlternativeMobile"></td>
        </tr>
        <tr>
            <td colspan="4">
                <font face="arial" color="#ea2f41">
                    <h2>Residental Address</h2>
            </td>

        </tr>
        <tr>
            <td>House Number</td>
            <td> <input type="text" name="HouseNumber"></td>
            <td>Province</td>
            <td>
                <select name="Province">
                    <option>Western Cape </option>
                    <option>Western Cape </option>
                    <option>Western Cape </option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Street Name</td>
            <td> <input type="text" name="StreetName"></td>
            <td>Muncipality</td>
            <td>
                <select name="Municipality">
                    <option>City of Cape Town </option>
                    <option>Stellenbosch </option>
                    <option>Overberg Municipality </option>
                    <option>Witzenberg Local Municipality </option>

                </select>
            </td>
        </tr>

        <tr>
            <td>District</td>
            <td>
                <select name="District">
                    <option>West Coast </option>
                    <option>City Of Cape Town </option>
                    <option>Cape Winelands </option>
                    <option>Overberg </option>
                    <option>Central Karoo </option>
                    <option>Garden Route </option>
                </select>
            </td>
            <td>Village/Town/City</td>
            <td>
                <select name="Village-Town-City">
                    <option>select </option>
                    <option>Khayelitsha </option>
                    <option>Gugulethu </option>
                    <option>Wynberg </option>
                    <option>Bellvile </option>
                </select>
            </td>
        </tr>
        <!---PARENTS PART-->
        <tr>
            <td colspan="4">
                <font face="arial" color="#ea2f41">
                    <h2>Parents/Guadian Details</h2>
            </td>
        </tr>
        <tr>
            <td>First Name</td>
            <td> <input type="text" name="GuadianFirstName"></td>
            <td>Email</td>
            <td> <input type="text" name="GuadianEmail"></td>
        </tr>

        <tr>
            <td>Middle Name</td>
            <td> <input type="text" name="Guadian-MiddleName"></td>

        </tr>
        <tr>
            <td>Surname</td>
            <td> <input type="text" name="Guadian-Surname"></td>

        </tr>
        <tr>
            <td>Mobile No.</td>
            <td> <input type="text" name="GuadianMobileNo"></td>
        </tr>
        <tr>
            <td>Community</td>
            <td>
                <select name="GuadianCommunity">
                    <option>select </option>
                    <option>BC-d </option>
                    <option>OC </option>
                </select>
            </td>
            <td>Alternate Mobile</td>
            <td> <input type="text" name="Guadian-Alternative-Mobile"></td>
        </tr>
        <!--END-->
        <tr>
            <td colspan="4">
                <font face="arial" color="#ea2f41">
                    <h2> Qualifications</h2>
            </td>
        </tr>
        <tr>
            <td>Last Grade Passed</td>
            <td> <input type="text" name="LastGradePassed"></td>
        </tr>
        <tr>
            <td> Year</td>
            <td> <input type="text" name="Year"></td>
        </tr>
        <tr>
            <td>Name of school</td>
            <td> <input type="text" name="NameOfSchool"></td>

        </tr>
        <tr>
            <td colspan="4">
                <label> PDF Document: </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file"><br><br>
                <input class="btn btn-primary" type="submit" value="Send Application" >
                <a href="/index.php" style="padding: 10px; color: white; float: right;">Back-home</a>
            </td>
            <table border="0" cellpadding="2" cellspacing="2" width="100%" align="center" bgcolor="#EFEEEE" style="border:1px solid #C8C6C6;">
                <tr>
                </tr>
                </td>
            </table>
        </tr>
    </table>
</form>

<script src="./javascript/form.js"></script>
<!--

Learner Details named Texted Boxes

1 First-name
2 Grade
3 Middle-name
4 DOB
5 LearnerSurname
6 LearnerEmail
7 Gender
8 LearnerMobileNumber
9 Leaner-Community
10 LearnerAlternativeMobile


Residential Address

1 HouseNumber
2 Province
3 StreetName
4 Municipality
5 District
6 Village-Town-City

Parents/Guadian Details

1 GuadianFirstName
2 GuadianEmail
3 Guadian-MiddleName
4 Guadian-Surname
5 GuadianMobileNo
6 GuadianCommunity
7 Guadian-Alternative-Mobile

Qualification

1 LastGradePassed
2 Year
3 NameOfSchool
4 ID
5 SchoolReport
6 GuadianID




-->