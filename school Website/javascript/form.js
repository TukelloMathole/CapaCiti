function regValidation(){

    var First_name = document.forms['myform']['First_name'].value;
    var FnregTest = /^[A-Za-z]+$/;
    var firstnameIsValid = FnregTest.test(First_name);
    if(First_name == ""){
        alert('enter your name');
        return false;
    }
    if(firstnameIsValid == false){
        alert('first name should contain letters only');
    }




    var Grade= document.forms['myform']['Grade'].value;
    var FnregTest = /^[0-2]{1,2}[:.,-]?$/;
    var gradeIsValid = FnregTest.test(Grade);
    if(Grade == ""){
        alert('Grade');
        return false;
    }
    if(Grade>12) {
        alert('Invalid number');
        
    }else if(gradeIsValid == false){
        alert('grade should contain numbers only');
    }



    var LearnerSurname = document.forms['myform']['LearnerSurname'].value;
    var FnregTest = /^[A-Za-z]+$/;
    var learnersurnameIsValid = FnregTest.test(LearnerSurname);

    if(LearnerSurname == ""){
        alert('Enter your Surname');
        return false;
    }
    if(learnersurnameIsValid == false){
        alert('Surname should contain letters only');
    }

    var LearnerEmail = document.forms['myform']['LearnerEmail'].value;
    var FnregTest = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    var learneremailIsValid = FnregTest.test(LearnerEmail);
    if(LearnerEmail == ""){
        alert('Enter your Email');
        return false;
    }
    if(learneremailIsValid == false){
        alert('Invalid Email');
    }

    var LearnerMobileNumber= document.forms['myform']['LearnerMobileNumber'].value;
    var FnregTest = /^[0-9]+$/;
    var learnerMobileNumberIsValid = FnregTest.test(LearnerMobileNumber);
    if(LearnerMobileNumber == ""){
        alert('Enter Mobile Number');
        return false;
    }
    if(learnerMobileNumberIsValid == false){
        alert('Invalid number');
    }
//RESIDENTIAL ADDRESS
    var HouseNumber= document.forms['myform']['HouseNumber'].value;
    if(HouseNumber == ""){
        alert('Enter House Number');
        return false;
    }

    var StreetName= document.forms['myform']['StreetName'].value;
    if(StreetName == ""){
        alert('Enter Street Name');
        return false;
    }
    //PARENTS OR GUARDIAN DETAILS

    var GuadianFirstName = document.forms['myform']['GuadianFirstName'].value;
    var FnregTest = /^[A-Za-z]+$/;
    var guadianFirstNameIsValid = FnregTest.test(GuadianFirstName);
    if(GuadianFirstName == ""){
        alert('enter your name');
        return false;
    }
    if(guadianFirstNameIsValid == false){
        alert('first name should contain letters only');
    }

 var GuadianEmail = document.forms['myform']['GuadianEmail'].value;
    var FnregTest = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    var guadianEmailIsValid = FnregTest.test(GuadianEmail);
    if(GuadianEmail == ""){
        alert('Enter your Email');
        return false;
    }
    if(guadianEmailIsValid == false){
        alert('Invalid Email');
    }

    
    var GuadianSurname = document.forms['myform']['GuadianSurname'].value;
    var FnregTest = /^[A-Za-z]+$/;
    var guadianSurnameIsValid = FnregTest.test(GuadianSurname);

    if(GuadianSurname == ""){
        alert('Enter your Surname');
        return false;
    }
    if(guadianSurnameIsValid == false){
        alert('Surname should contain letters only');
    }

var GuadianMobileNo= document.forms['myform']['GuadianMobileNo'].value;
    var FnregTest = /^[0-9]+$/;
    var guadianMobileNoIsValid = FnregTest.test(GuadianMobileNo);
    
    if(GuadianMobileNo == ""){
        alert('Enter Mobile Number');
        return false;
    }
    if(guadianMobileNoIsValid == false){
        alert('Invalid number');
    }
    //QUALIFICATIONS

    var LastGradePassed = document.forms['myform']['LastGradePassed'].value;
    var FnregTest = /^[0-2]{1,2}[:.,-]?$/;
    var lastGradePassedIsValid = FnregTest.test(LastGradePassed);
    if( LastGradePassed== ""){
        alert('Enter last grade passed');
        return false;
    }
    if(Grade>12) {
        alert('Invalid number');
        
    }else if(lastGradePassedIsValid == false){
        alert('Grade should contain numbers only');
    }

    var NameOfSchool = document.forms['myform']['NameOfSchool'].value;
    var FnregTest = /^[A-Za-z]+$/;
    var nameOfSchoolIsValid = FnregTest.test(NameOfSchool);
    if(NameOfSchool == ""){
        alert('Enter Name of School');
        return false;
    }
    if(nameOfSchoolIsValid == false){
        alert('Name of school should contain letters only');
    }


}
