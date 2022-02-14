
<!DOCTYPE html>
<html>
    <head>
        <title>register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="register.css"/>
    </head>
    <body>

        <form action="register_results.php" method="post" class="container">
            <label>password</label>
            <input type="password" placeholder="password" name="password" required>

            <label>repeat password</label>
            <input type="password" placeholder="password" name="password" required>

            <label>Email Address</label>
            <input type="email" placeholder="email" name="email" required>

            <label>Phone Number</label>
            <input type="phonenumber" placeholder="Phone Number" maxlength="10"name="number"required>

            <label>ID Number</label>
            <input type="number" placeholder="ID Number" maxlength="8"name="ID_Number" required>

            <label>Name</label>
            <input type="name" placeholder="Name"style="text-transform:uppercase" name="name" required>
            <div>
                <button class="registerbtn" type="submit">submit</button><br/>
                <button class="cancelbtn" type="cancel"><a href=index.html target=_blank >cancel</a></button>
            </div>
        </form>
    </body>
</html>

