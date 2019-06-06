<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 
<section>
        <div class="container1">
            <div class="content4">
               <div class="box1">
                  <div class="login">
                      
                        <h1><?php echo $data['title'][29]['Properties']; ?></h1>
                        <p><?php echo $data['paragraph'][30]['Properties']; ?></p>
                   
                    <form name="form" class="form" action="<?php echo URLROOT . 'pages/process'; ?>" onsubmit="return validation()" method="POST">
                        <div><label for="">First Name</label></div>
                        <div><input type="text" name="FName" id="FName"/><br></div>
                        <div><label for="">Last Name</label></div>
                        <div><input type="text" name="Lname" id="Lname"/><br></div>
                        <div><label for="">Email</label></div>
                        <div><input type="text" name="Email" id="Email" /><br></div>
                        <div><label for="">Phone</label></div>
                        <div><input type="text" name="Phone" id="Phone"/><br></div>
                        
                        <div></div>
                        <input type="submit" class="button" value="Request" onClick="">
                    </form><br class="br">

                   <h1><?php echo $data['message']; ?></h1> 
                    
         
                
                </div>
               </div>
             <div class="box2">
               <h1><?php echo $data['title'][31]['Properties']; ?></h1>
                        <p><?php echo $data['paragraph'][32]['Properties']; ?></p>
                    <form name="form2" class="form" action="<?php echo URLROOT . 'pages/process2'; ?>" onsubmit="return validation2()" method="POST">
                    <div><label for="Name">Name</label></div>
                    <div><input type="text" name="Name2" /><br></div>
                    <div><label for="Phone">Phone Number</label></div>
                    <div><input type="text" name="Phone2" /><br></div>
                    <div><label for="Address">address</label></div>
                    <div><input type="text" name="Address2" /><br></div>
                    <div><label for="Time">Time Requested</label></div>
                    <div><input type="text" name="Time2" /><br></div>
                    <div></div>
                    <input type="submit" class="button" value="Request" >
                </form><br class="br">
                <h1><?php echo $data['message2']; ?></h1> 
               </div>
             
             
           
            </div>
        </div>
        <script> 
     

 
     document.getElementById("1").className = "notcurrent";
     document.getElementById("2").className = "notcurrent";
     document.getElementById("3").className = "notcurrent";
     document.getElementById("4").className = "current";

function validation()                                   
{ 
    var _fname = document.forms["form"]["FName"];               
    var _lname = document.forms["form"]["Lname"];    
    var _email = document.forms["form"]["Email"];  
    var _phone =  document.forms["form"]["Phone"];  
  
   
    if (_fname.value == "")                                  
    { 
        window.alert("Please enter your first name"); 
        _fname.focus(); 
        return false; 
    } 
    else if (allLetter(_fname) == false)                                  
    { 
        window.alert("Your Name Must only contain letters"); 
        _fname.focus(); 
        return false; 
    } 
   
    else if (_lname.value == "")                           
    { 
        window.alert("Please enter your last name"); 
        _lname.focus(); 
        return false; 
    } 

    else if (allLetter(_lname) == false)                                  
    { 
        window.alert("Your last Name Must only contain letters"); 
        _lname.focus(); 
        return false; 
    } 

    else if (_email.value == "")                           
    { 
        window.alert("Please enter your email"); 
        _lname.focus(); 
        return false; 
    } 
    else if (_email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        _email.focus(); 
        return false; 
    } 
   
    else if (_email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        _email.focus(); 
        return false; 
    } 

    
    else if (_phone.value == "")                                  
    { 
        window.alert("Please enter your phone number"); 
        _phone.focus(); 
        return false; 
    } 
    else if (allNumbers(_phone) == false)                                  
    { 
        window.alert("Your Phone number can only contain numbers"); 
        _phone.focus(); 
        return false; 
    } 
   
    return true; 
}

function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else {return false}
}
function allNumbers(uadd)
{ 
var letters = /^[0-9]+$/;
if(uadd.value.match(letters))
{
return true;
}
else {return false;}
}

function validation2()                                   
{ 
    var name = document.forms["form2"]["Name2"];               
     
    var phone = document.forms["form2"]["Phone2"];  
    var address =  document.forms["form2"]["Address2"];  
    var time = document.forms["form2"]["Time2"]; 
  
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name"); 
        name.focus(); 
        return false; 
    } 

    else if (allLetter(name) == false)                                  
    { 
        window.alert("Your Name Must only contain letters"); 
        name.focus(); 
        return false; 
    } 
   
    else if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number"); 
        phone.focus(); 
        return false; 
    } 
    else if (allNumbers(phone) == false)                                  
    { 
        window.alert("Your phone number Must only contain numbers"); 
        phone.focus(); 
        return false; 
    } 
    else if (address.value == "")                           
    { 
        window.alert("Please enter your address"); 
        address.focus(); 
        return false; 
    } 

    else if (time.value == "")                           
    { 
        window.alert("Please enter the time you would like to book"); 
        time.focus(); 
        return false; 
    } 

   
    return true; 
}</script> 
     </section>
    
   
<?php include(APPROOT . "/views/includes/footer.php"); ?>