<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submission</title>
    <style>
        form{
            width:40%;
            margin:100px auto;
            background-color: #fff;
            border-radius:10px;
            padding: 20px;
        }
    </style>
</head>
<body style="background-color:skyblue">
    
    <form action="form.php" method="post">
        Name: <input type="text" name="username" required /><br><br>
        Email: <input type="email" name="email" required /><br><br>
        Select District: <select name="district">
            <option value="">Select District</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Shylhet">Shylhet</option>
        </select> <br> <br>
        Select Gender: 
        <input type="radio" name="gender" value="Male"> Male
     <input type="radio" name="gender" value="Female">  Female
        <br><br>
        <input type="submit" value="Submit">
</body>
</html>