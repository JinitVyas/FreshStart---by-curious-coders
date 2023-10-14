<?php
    include 'partials/header.php';
?>
<style>
        /* Custom CSS for the login page */
        body {
            background-color: #f8f9fa;
        }
        .registration-form {
            background-color: #pink;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .registration-form h2 {
            text-align: center;
        }
    </style>

    <form action="partials/handlelogin.php" method="post">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-4 registration-form">
                    <h2>Login</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" name="Login" class="btn btn-success">Login</button>
                        <p>Don't have an account? <a href="#">Register</a><br>
                        <a href="forgotpwd.html">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
    include 'partials/footer.php';
?>