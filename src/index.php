<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// taken values from form
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$fname1 = $_POST["fname1"];
$lname1 = $_POST["lname1"];
$fname2 = $_POST["fname2"];
$lname2 = $_POST["lname2"];
$date = $_POST["date"];
$male = $_POST["male"];
$phone = $_POST["phone"];
$email  = $_POST["email"];
$comment = $_POST["comment"];
$fqualification = $_POST["fqualification"];
$occupation = $_POST["occupation"];
$mqualification = $_POST["mqualification"];
$moccupation = $_POST["moccupation"];
$phone1 = $_POST["phone1"];
$email1 = $_POST["email1"];
$address = $_POST["address"];
// checking empty condition
if($_POST['submit'])
{
    if(empty($_POST["fname"]))
    {
      $first = "First Name is  required";
    }
    if(empty($_POST["lname"]))
    {
        $second = "Last Name is  required";
    }
    if(empty($_POST["date"]))
    {
        $third = "Date is required";
    }
    if(empty($_POST["male"]))
    {
        $fourth = "Please select one option";
    }
    if(empty($_POST["comment"]))
    {
        $fifth = "Please fill this field";
    }
    if(empty($_POST["fqualification"]))
    {
        $sixth = "please enter fathers qualification";
    }
    if(empty($_POST["phone"]))
    {
        $seventh = "please enter phone number";
    }
    if(empty($_POST["email"]))
    {
        $eighth = "Please enter email";
    }
    if(empty($_POST["occupation"]))
    {
        $ten = "please enter fathers occupation";
    }
    if(empty($_POST["mqualification"]))
    {
        $eleven = "please enter mothers qualification";
    }
    if(empty($_POST["moccupation"]))
    {
        $twelve = "please enter mothers occupation";
    }
    if(empty($_POST["address"]))
    {
        $thirteen = "Please enter the street address";
    }
    if(empty($_POST["fname1"]))
    {
        $fourteen = "please enter first name";
    }
    if(empty($_POST["lname1"]))
    {
        $fifteen = "Please enter last name ";
    }
    if(empty($_POST["fname2"]))
    {
        $sixteen = "Please enter first name";

    }
    if(empty($_POST["lname2"]))
    {
        $seventeen = "Please enter last name";
    }
    if(empty($_POST["phone1"]))
    {
        $eighteen = "please enter phone number";
    }
    if(empty($_POST["email1"]))
    {
        $nineteen = "Please enter email";
    }
    if (!preg_match ("/^[0-9]*$/", $phone) ){  
        $ErrMsg = "Please enter number only";  
    
    }
    if (!preg_match ("/^[0-9]*$/", $phone1) ){  
        $ErrMsg2 = "Please enter number only"; 
    }
    if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
    {
        $ErrMsg1 = "Please enter email in the correct format";
        
    }
    if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email1))
    {
        $ErrMsg1 = "Please enter email in the correct format";
    } 
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
        $nameerror = "Please enter characters only";
        
    }
    if(!preg_match("/^[a-zA-Z-' ]*$/",$lname))
    {
        $nameerr = "Please enter characters only";
    }
    if(!preg_match("/^[a-zA-Z-' ]*$/",$fname1))
    {
        $nameerror1 = "Please enter characters only";
    }
    if(!preg_match("/^[a-zA-Z-' ]*$/",$lname1))
    {
        $nameerr1 = "Please enter characters only";
    }
    if(!preg_match("/^[a-zA-Z-' ]*$/",$fname2))
    {
        $nameerror2 = "Please enter characters only";
    }
    if(!preg_match("/^[a-zA-Z-' ]*$/",$lname2))
    {
        $nameerr2 = "Please enter characters only";
    }
    
    
      
}
?>
<!-- form start -->
    <div class="form1">
    <form action = "" method = "post"  class="form2">
 <h1>Student Registration Form</h1>
 <label for="nameofapplicant">Name of Applicant</label>
 <p>
 <input type ="text" name="fname"  placeholder="First" class="dates1" value="<?php echo  $fname; ?>">

 <span class="error"><?php echo $first;?></span>
 <span class="error"><?php echo $nameerror;?></span>

 <input type="text" name="lname"  placeholder="Last" class="dates1" value="<?php echo  $lname; ?>">
 <span class="error"><?php echo $second;?></span>
 <span class="error"><?php echo $nameerr;?></span>
</p>
<p>
    <label for="date">Date of Birth</label>
    <p>
    <input type="date" name="date" class="dates" value="<?php echo $date;?>">
    <span class="error"><?php echo $third;?></span>

   
</p>
<label for="gender">Gender</label>
<p>

<input type="radio" name="male" value="male" >



<label for="male">Male</label>
</p>
<p>
<input type="radio" name="male" value="female" > 


<label for="male">Female</label>
<br>
<span class="error"><?php echo $fourth;?></span>
</p>
<p>
    <label for="Details">Details of Siblings</label>
    </p>
    <p>
    <textarea name="comment" rows="5" cols="44"></textarea>
    <span class="error"><?php echo $fifth;?></span>
   
</p>
<p>
    <label for="parentsinfo">Parent's Information</label>
</p>
<p>
    <label for="fathersname">Fathers Name</label>
</p>
<p>
    <input type="text" name="fname1" placeholder="first" class="dates1"  value="<?php echo $fname1;?>">
    <span class="error"><?php echo $fourteen;?></span>
    <span class="error"><?php echo $nameerror1;?></span>
  
    <input type="text" name="lname1" placeholder="last" class="dates1" value="<?php echo $lname1;?>">
    <span class="error"><?php echo $fifteen;?></span>
    <span class="error"><?php echo $nameerr1;?></span>

   
</p>
<p>
    <label for="fathersqualification">Fathers Qualification</label>
</p>
<p>
<input type="text" name = "fqualification" class="dates2"  value="<?php echo $fqualification;?>">
<span class="error"><?php echo $sixth;?></span>

</p>
<div class="main" >
    <div class="phone">
        <p>
    <label for="Phone">Phone</label>
</p>
    <input type="text" name="phone" placeholder="#### ###" class="dates1"  value="<?php echo $phone;?>">

    <span class="error"><?php echo $ErrMsg;?></span>
  <span class ="error"><?php echo $seventh;?></span>
</div>
<div class="email">
    <p>
    <label for="Phone">Email</label>
</p>
    <input type="email" name="email" placeholder="" class="dates1"  value="<?php echo $email;?>">
    <span class="error"><?php echo $eighth;?></span>
   
</div>
</div>
<p>
    <label for="fathersoccupation">Fathers Occupation</label>
</p>
<p>
    <input type="text" name="occupation" class="dates2"  value="<?php echo $occupation;?>">
    <span class="error"><?php echo $ten;?></span>
  
</p>



<p>
    <label for="fathersname">Mothers Name</label>
</p>
<p>
    <input type="text" name="fname2" placeholder="first" class="dates1"  value="<?php echo $fname2;?>">
    <span class="error"><?php echo $sixteen;?></span>
    <span class="error"><?php echo $nameerror2;?></span>
   
    <input type="text" name="lname2" placeholder="last" class="dates1"  value="<?php echo $lname2;?>">
    <span class="error"><?php echo $seventeen;?></span>
    <span class="error"><?php echo $nameerr2;?></span>

</p>
<p>
    <label for="mothersqualification">Mothers Qualification</label>
</p>
<p>
<input type="text" name = "mqualification" class="dates2"  value="<?php echo $mqualification;?>">
<span class="error"><?php echo $eleven;?></span>

</p>

<div class="main" >
    <div class="phone">
        <p>
    <label for="Phone">Phone</label>
</p>
    <input type="text" name="phone1" placeholder="#### ###" class="dates1" value="<?php echo $phone1;?>">
   
    <span class="error"><?php echo $ErrMsg2;?></span>
    <span class ="error"><?php echo $eighteen;?></span>
</div>
<div class="email">
    <p>
    <label for="Phone">Email</label>
</p>
    <input type="email" name="email1" placeholder="" class="dates1"  value="<?php echo $email1;?>">
    <span class="error"><?php echo $nineteen;?></span>

</div>
</div>

<p>
    <label for="mothersoccupation">Mothers Occupation</label>
</p>
<p>
    <input type="text" name="moccupation"  class="dates2"  value="<?php echo $moccupation;?>">
    <span class ="error"><?php echo $twelve;?></span>

</p>
<p>
    <label for="address">Address</label>
</p>
<p>
    <input type="text" name="address" placeholder="Street Address"  class="dates2"  value="<?php echo $address;?>">
    <span class="error"><?php echo $thirteen;?></span>

</p>
<input type="submit" name="submit" value="submit">


</form>
<!-- form end -->
</div>
</body>
</html>