<?php
$name = $_POST['name'];  
$hiddenField = $_POST['hiddenField'];  
$email = $_POST['email'];  
$age = $_POST['age'];  
$job = $_POST['job'];  
$address = $_POST['address'];  
$languages1 = $_POST['languages1']; 
$languages2 = $_POST['languages2'];
$languages3 = $_POST['languages3']; 
$daysavailable = $_POST['daysavailable'];
$contact = $_POST['contact'];  
$date = gmdate("M d Y");  
print "<center><b><p>Thank you $name we will get back to you shortly</p></b></center>";  
print "<center>$date</center>";  
$to ="krishsuisun@gmail.com";  
$subject = "Job Application form";  
$body =" Date: $date \n Name: $name \n hiddenField: $hiddenField \n Email address: 
$email \n Age: $age \n Job: $job \n Address: $address \n Languages: $languages1  
$languages2 $languages3 \n Days available: $daysavailable[0] $daysavailable[1] 
$daysavailable[2] $daysavailable[4] \n Contact: $contact \n\n";  
 mail($to,$subject,$body);             
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon shortcut" type="image/png" href="volskaLogo.png">
    <title>Volska | Official Website | FAKE WEBSITE |  Employee Job Application | </title>
    <link rel="stylesheet" href="employee.css">
        <link rel="stylesheet" href="style.css">
    <link
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/ Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="text-align: center">
<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <p class="bold">ATTENTION</p>
        <p class="alertptag">All businesses closed because of covid-19.</p>
    </div>
<h1>Job Application</h1>
<br>
<br>

    <form action="form.php" method="post" name="form1" id="form1">  
        <p> 
            <label> 
                <input type="text" name="name" id="name" /> 
                Name</label> 
                <input name="hiddenField" type="hidden" id="hiddenField" value="Job Application form from Volska " /> 
                <br />           <br />

                <label> 
                    <input type="text" name="email" id="email" />              E-mail Address</label> 
                    <br />           <br /> 
                    <label> 
                        <input name="age" type="text" id="age" size="4" maxlength="3" />             Age:</label> 
                        <br />           <br />
                        <p>         What type of job are you looking for?</p>  
                        <p>       
                           <label> 
                            <input name="job" type="radio" id="job" value="programmer" checked="checked" /> Programmer<br /> 
                            <input type="radio" name="job" id="designer" value="designer" /> 
                            Designer<br /> 
                            <input type="radio" name="job" id="manager" value="manager" /> 
                            Manager          </label>  
                        </p> 
                        <p>Please enter your mailing address: </p> 
                        <p>
                            <label> 
                                <textarea name="address" id="address" cols="45" rows="5"></textarea> 
                            </label> 
                        </p> 
                        <p>Which programming languages do you work with?</p> 
                        <p> 
                            <label> 
                                <input name="languages1" type="checkbox" id="languages1" value="php" checked="checked" /> 
                                php</label> 
                                <br /> 
                                <input type="checkbox" name="languages2" value="html" id="languages1" /> 
                                html</label> 
                                <br /> 
                                <input type="checkbox" name="languages4" value="css" id="languages1" /> 
                                css</label> 
                                <br />
                                <label> 
                                    <input type="checkbox" name="languages3" value="javascript" id="languages2" /> 
                                    javascript</label> 
                                </p> 
                                <p>What days of the week are you available for an interview?</p> 
                                <p> 
                                    <label> 
                                        <select name="daysavailable[]" size="4" multiple="multiple" id="daysavailable[]"> 
                                            <option value="monday">Monday</option> 
                                            <option value="tuesday">Tuesday</option>  
                                            <option value="wednesday" selected="selected">Wednesday</option> 
                                            <option value="thursday">Thursday</option> 
                                        </select>  
                                    </label> 
                                </p> 
                                <p>To select multiple days drag over the days, to select altnernate days Ctrl-click on the days you are available. </p> 
                                <p>How do you prefer to be contacted?<br /> </p>
                                <p> 
                                    <label> 
                                        <select name="contact" id="contact"> 
                                            <option value="phone">Phone</option> 
                                            <option value="email">E-mail</option> 
                                            <option value="post">post</option> 
                                        </select>
                                     </label>
                                </p>
                                <p> 
                                    <label> 
                                        <input type="submit" name="button" id="button" value="Send " /> 
                                    </label> 
                                    <label> 
                                        <input type="reset" name="button2" id="button2" value="Reset" /> 
                                    </label> 
                                    <br /> 
                                </p> 
                                <p><strong>Privacy Policy</strong>: the information you provide will not be shared it is only for the use in our selection of potential employees. </p> 
                            </form> 
                                        


</body>
</html>