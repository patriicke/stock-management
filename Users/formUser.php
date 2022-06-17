<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Register User</title>
    <link rel="stylesheet" href="./../Styles/style.css">
</head>
<body> 
    <div class="flex items-center justify-center w-[100%]  h-[100vh] flex-col ">
            <h1 class="text-[2em]">Register a user</h1>
            <form action="./../Register/registerUser.php" method="POST" class="grid  grid-cols-2 w-[50%] gap-3">
            <label for="fname">FIRST NAME</label>
            <input type="text" name="fname" placeholder="First name" class="border">
            <label for="lname">LAST NAME</label>
            <input type="text" name="lname" placeholder="Last name" class="border">
               <label for="telephone">TELEPHONE</label>
            <input type="number" name="telephone" placeholder="Telephone" class="border">
            <label for="gender">GENDER</label>
            <div>
                <label for="male">MALE</label>  
                <input type="radio" name="gender"  class="border">
                <label for="female">FEMALE</label>
                <input type="radio" name="gender" class="border">
            </div>
            <label for="nationality">NATIONALITY</label>
            <input type="text" name="nationality" placeholder="Nationality" class="border">
            <label for="username">USERNAME</label>
            <input type="text" name="username" placeholder="Username" class="border">
            <label for="email">EMAIL</label>
            <input type="email" placeholder="Email" name="email" class="border">
            <label for="password">PASSWORD</label>
            <input type="password" name="password" placeholder="Password" class="border">
            <label for="cpassword">CONFIRM PASSWORD</label>
            <input type="password" name="cpassword" placeholder="Confirm password" class="border">
            <input type="submit" value="REGISTER"  class="border">
        </form>
    </div>
</body>
</html>