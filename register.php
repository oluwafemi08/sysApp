<main class="form-signin">
    <form action="handler.php" method="GET" <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-floating">
            <input type="text" name="first_name" class="form-control" id="floatingInput" placeholder="First Name">
            <label for="floatingInput">First Name</label>
        </div>


        <div class="form-floating">
            <input type="tetxt" name="last_name" class="form-control" id="floatingInput" placeholder="Last Name">
            <label for="floatingInput">Last Name</label>
        </div>

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating">
            <input type="password" name="confirm_password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Confirm Password</label>
        </div>

        <!-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div> -->
        <button class="w-100 btn btn-lg btn-primary" name="action" value="register" type="submit">Register</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
</main>
<?php include_once('layout/footer.php'); ?>