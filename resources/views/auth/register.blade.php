<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ asset('css/reg_css/reg.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reg_css/styles.css') }}" rel="stylesheet">

</head>

<body>
<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form method="post">
            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <div class="form-group"><input class="form-control" type="text" name="fName" placeholder="First Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="lName" placeholder="Last Name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
            <div class="form-group"><input class="form-control" type="date" name="dob" placeholder="DD/MM/YYYY"></div>
            <div class="form-group"><input class="form-control" type="text" name="address" placeholder="Address"></div>
            <div class="form-group"><input class="form-control" type="text" name="nic" placeholder="NIC No."></div>
            <div class="form-group"><input class="form-control" type="text" name="dln" placeholder="Driver License No."></div>
            <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Contact No."></div>

            <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a class="already" href="#">You already have an account? Login here.</a></form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
