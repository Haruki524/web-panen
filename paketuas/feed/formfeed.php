<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color: aquamarine;
            padding: 10px;
        }
        .mb-3{
        background-color: grey !important;
        padding: 20px;
        height: auto;
        width: 700px;
        border-radius: 20px;
        }
        
    </style>
</head>
<body>
    <center>
    <div class="mb-3">
        <H1>Feedback Form</H1>
        <FORM action="mailto: yuuhasegawa21@gmail.com" method="post" enctype="text/plain">
            First Name : <INPUT type="text" name="firstname" placeholder="Enter name here">
            Second Name : <INPUT type="text" name="secondname"  placeholder="Enter surname here">
          <BR>
          <BR>
      <!--It's important that both of these radio button have the same name so they behave as one component (i.e. Only one can be selected at a time)-->  
          <INPUT type="radio" name="gender" value="male" >Male<BR>
          <INPUT type="radio" name="gender" value="female">Female  
          <BR>
          <BR>
      <!--This uses the new HTML "email" INPUT type which will automatically validates the email address when the SUBMIT button is clicked-->
          email: <INPUT type="email" name="mail" placeholder="e-mail address">
          <BR>
          <BR>
            Comment :<BR>        
            <TEXTAREA rows="6" cols="50" name="commentfield"></TEXTAREA>
            <BR>
            <BR>
            <INPUT TYPE="submit" value="Send Feedback">
            <INPUT TYPE="reset" value="Reset">
            <INPUT href="/paketuas/formlogin/login2.php" TYPE="submit" value= "Home">
        </FORM>
    </div>
</center>
</body>
</html>