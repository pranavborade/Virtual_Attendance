<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtualAtt | Sign up</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/css/sign-in.css">
</head>

<body>
    <main class="form-signin w-100 m-auto">
        <form>
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Student name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <label for="cars">Choose a branch:</label>
            <select name="cars" id="cars">
                <option class="invalid" value="blank"></option>
                <option class="valid" value="AE">Automobile Engineering</option>
                <option class="valid" value="CE">Civil Engineering</option>
                <option class="valid" value="CH">Chemical Engineering</option>
                <option class="valid" value="CM">Computer Technology</option>
                <option class="valid" value="ME">Mechanical Engineering</option>
                <option class="valid" value="BD">Cloud Computing and Big Data</option>
                <option class="valid" value="MK">Mechatronics</option>
                <option class="valid" value="IDD">Interior Decoration and Design</option>
            </select>

            <div class="form-floating">
                <input type="number" class="form-control  mb-4" id="floatingInput" placeholder="XXXXXXXXXXXX">
                <label for="floatingPassword">Enrollment Number</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control  mb-4" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
    </main>
</body>

</html>