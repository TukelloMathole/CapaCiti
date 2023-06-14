function contSubmit(){
    
    var F_name= document.forms['conForm']['F_name'].value;
    var FnregTest= /^[A-Za-z]+$/;
    var f_nameIsValid= FnregTest.test(F_name);

    if(F_name == ''){
    alert( "Enter your Name");
    return false;
}
    if(f_nameIsValid == false){
    alert("Name should contain letters only");
 }

 var S_name= document.forms["conForm"]["S_name"].value;
 var FnregTest= /^[A-Za-z]+$/;
 var s_name= FnregTest.test(S_name);

 if(S_name == ''){
    alert("Enter your Surname");
    return false;

 }
 if(s_name == false){
    alert("Surname should contain letters only");
 
}

var Email= document.forms["conForm"]["Email"].value;
var FnregTest= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
var emailIsValid= FnregTest.test(Email);

if(Email== ''){
    alert("Enter your Email");
    return false;
}
if(emailIsValid== false){
    alert("Invalid input")
}
var Subject= document.forms["conForm"]["Subject"].value;
var FnregTest= /^[A-Za-z]+$/;
var subject= FnregTest.test(Subject);

if(Subject==''){
    alert("Enter the Subject");
    return false;

}
if(subject== false){
    alert("Subject should contain letters only");
}

var MessageBox= document.forms["conForm"]["MessageBox"].value;

if(MessageBox==''){
    alert("Write something in the Message Box");
    return false;
}

}


function contSubmit(){
    
    var F_name= document.forms['conForm']['F_name'].value;
    var FnregTest= /^[A-Za-z]+$/;
    var f_nameIsValid= FnregTest.test(F_name);

    if(F_name == ''){
    alert( "Enter your Name");
    return false;
}
    if(f_nameIsValid == false){
    alert("Name should contain letters only");
 }

 var S_name= document.forms["conForm"]["S_name"].value;
 var FnregTest= /^[A-Za-z]+$/;
 var s_name= FnregTest.test(S_name);

 if(S_name == ''){
    alert("Enter your Surname");
    return false;

 }
 if(s_name == false){
    alert("Surname should contain letters only");
 
}

var Email= document.forms["conForm"]["Email"].value;
var FnregTest= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
var emailIsValid= FnregTest.test(Email);

if(Email== ''){
    alert("Enter your Email");
    return false;
}
if(emailIsValid== false){
    alert("Invalid input")
}
var Subject= document.forms["conForm"]["Subject"].value;
var FnregTest= /^[A-Za-z]+$/;
var subject= FnregTest.test(Subject);

if(Subject==''){
    alert("Enter the Subject");
    return false;

}
if(subject== false){
    alert("Subject should contain letters only");
}

var MessageBox= document.forms["conForm"]["MessageBox"].value;

if(MessageBox==''){
    alert("Write something in the Message Box");
    return false;
}

}


function contSubmit(){
    
    var F_name= document.forms['conForm']['F_name'].value;
    var FnregTest= /^[A-Za-z]+$/;
    var f_nameIsValid= FnregTest.test(F_name);

    if(F_name == ''){
    alert( "Enter your Name");
    return false;
}
    if(f_nameIsValid == false){
    alert("Name should contain letters only");
 }

 var S_name= document.forms["conForm"]["S_name"].value;
 var FnregTest= /^[A-Za-z]+$/;
 var s_name= FnregTest.test(S_name);

 if(S_name == ''){
    alert("Enter your Surname");
    return false;

 }
 if(s_name == false){
    alert("Surname should contain letters only");
 
}

var Email= document.forms["conForm"]["Email"].value;
var FnregTest= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
var emailIsValid= FnregTest.test(Email);

if(Email== ''){
    alert("Enter your Email");
    return false;
}
if(emailIsValid== false){
    alert("Invalid input")
}
var Subject= document.forms["conForm"]["Subject"].value;
var FnregTest= /^[A-Za-z]+$/;
var subject= FnregTest.test(Subject);

if(Subject==''){
    alert("Enter the Subject");
    return false;

}
if(subject== false){
    alert("Subject should contain letters only");
}

var MessageBox= document.forms["conForm"]["MessageBox"].value;

if(MessageBox==''){
    alert("Write something in the Message Box");
    return false;
}

}


