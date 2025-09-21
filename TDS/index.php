<?php

include("loginandregister.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="general.css"/>
    <title>TDS Log In or Register</title>
  </head>
  <body>
    <section class="accounts-window" id="accounts-window">
        <h1 class="form-title">Track Delivery System</h1>
        <button class="log-in-button" id="log-in-button">Log in</button>
        <button class="register-button" id="register-button">Register</button>
    </section>
    <form method="post" action="" enctype="multipart/form-data">
      <section class="log-in-window" style="display: none" id="log-in-window">
        <h1 class="form-title">Log In</h1>
        <input
          class="log-in-username"
          name="username"
          type="text"
          placeholder="Username"
          required
        />
        <input
          class="log-in-password"
          name="password"
          type="password"
          placeholder="Password"
          required
        />
        <button
          class="log-in-button"
          type="submit"
          name="login"
          id="log-in-button"
        >
          Log-in
        </button>
        <button class="back-button" id="back-button">Back</button>
        <?php if (isset($login_error)): ?>
        <p class="error-message"><?php echo $login_error; ?></p>
        <?php endif; ?>
      </section>
    </form>

    <form method="post" action="" enctype="multipart/form-data">
      <section
        class="register-window"
        style="display: none"
        id="register-window"
      >
        <h1 class="form-title">Register</h1>
        <div>
          <input
            class="register-username"
            name="register-username"
            type="text"
            id="register-username"
            placeholder="Username"
            required
          />
          <input
            class="register-password"
            name="register-password"
            type="password"
            id="register-password"
            placeholder="Password"
            required
          />
        </div>
        <div>
          <input
            class="register-firstname"
            name="register-firstname"
            type="text"
            placeholder="First Name"
          />
          <input
            class="register-lastname"
            name="register-lastname"
            type="text"
            placeholder="Last Name"
          />
        </div>
          <div class="gender-type" id="gender-type">
            <label for="sex-type">Sex</label>
            <select id="sex-type" name="sex-type">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
        <div class="email-and-contactno">
          <input
            class="register-email"
            name="register-email"
            type="email"
            id="register-email"
            placeholder="Email"
            required
          />
          <input
            class="register-contactno"
            name="register-contactno"
            type="text"
            placeholder="Contact Number"
          />
        </div>
        <button
          class="register-button"
          type="submit"
          name="register"
          id="register-button"
        >
          Register
        </button>
        <button class="back-button-2" id="back-button-2">Back</button>
        <?php if (isset($registration_error)): ?>
        <p class="error-message"><?php echo $registration_error; ?></p>
        <?php endif; ?>
      </section>
    </form>
    <script src="script.js"></script>
  </body>
</html>
