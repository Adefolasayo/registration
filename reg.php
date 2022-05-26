<!DOCTYPE html>
<head>

<title>REGISTRATION FORM</title>
<link href="reg.css" type="text/css" rel="stylesheet">
<style>

</style>

</head>

<body>
    <div class="container">
        <header>REGISTER</header>

        <form action="user_data.php" method="post">
            <label> NAME:</label><br>
            <input type="text" name="name" placeholder="ENTER NAME" required><br>
            <label>EMAIL:</label><br>
            <input type="email" name="email" placeholder="ENTER EMAIL" required><br>
            <label>DATE OF BIRTH:</label><br>
            <input type="date" name="DOB" required><br>
            <label>GENDER:</label><br>
            <input type="radio" name="gender" value="MALE">MALE
            <input type="radio" name="gender" value="FEMALE">FEMALE<br>
            <label>COUNTRY:</label><br>
            <input type="country" name="country" placeholder="ENTER COUNTRY" required><br>
            <input type="submit" value="SUBMIT">
        </form>
    </div>  



</body>


</html>