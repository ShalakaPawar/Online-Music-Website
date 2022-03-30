<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>User Registration and Login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left" >
                <h2>Login Here<h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>

                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" class="form-control" required>

                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h2>Register Here<h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>

                    </div>

                    <div class="form-group">
                        <label>password</label>
                        <input type="password" name="password" class="form-control" required>

                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>

</div>
    </div>
</body>
</html>