var Btn = document.getElementById('submit');



Btn.addEventListener("click",goto)



function goto(){

    

    //create log in validation for log in input elements using regex

    var textEmail = document.getElementById('Uname').value;

    var textpassword = document.getElementById('password').value;

    /// my email will be split into four different parts to form a valid mzamomtsha mail for both student and the staff

    //// Example i.e lethu.student@mzamomtsha.org.za

    var validEmail = /^([a-zA-Z0-9\.-]+).([student|admin|staff])@(mzamomtsha).(org).(za)$/;

    var emailIsValid = validEmail.test(textEmail);



    console.log(textEmail);

    if(emailIsValid == false || textEmail == ""){

        document.getElementById('err').innerHTML = '*';

    }



    if(emailIsValid == true){

        ///this section takes you to different pages dependin on either your email includes staff/admin/student

        //window.location.replace("<?php echo $_SERVER['PHP_SELF'];?>")

        if(textEmail.includes("admin")){

            alert('youn are admin');

        }

        if(textEmail.includes("staff")){

            alert('youn are staff');

        }

        if(textEmail.includes("student")){

            window.location.replace("./students/indexstudents.php")

            

        }

        

    }

    

}









/*





var emailIsValid =  textEmail == validEmail.test(textEmail)? false : true;



let text = textEmail;

        console.log(text.includes("admin"));



if(emailIsValid == true){

        window.location.replace("<?php echo $_SERVER['PHP_SELF'];?>")

    }







tukello.student@mzamomtsha.org.za

*/