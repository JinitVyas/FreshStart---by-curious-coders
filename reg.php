<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
      }

      .container {
        max-width: 600px; /* Increased width */
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h2 {
        text-align: center;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        display: block;
        font-weight: bold;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"],
      select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 5px; /* Added margin for spacing */
      }

      select {
        height: 36px;
      }

      .gender-label {
        margin-bottom: 5px;
      }

      .radio-group {
        display: flex;
        align-items: center;
      }

      .radio-group label {
        margin-right: 10px;
      }

      .button-container {
        text-align: center;
      }

      button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Registration Form</h2>
      <form action="#" method="post">
        <div class="form-group">
          <input
            type="text"
            id="first_name"
            name="first_name"
            placeholder="First Name"
            required
          />
        </div>

        <div class="form-group">
          <input
            type="text"
            id="last_name"
            name="last_name"
            placeholder="Last Name"
            required
          />
        </div>

        <div class="form-group">
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            required
          />
        </div>

        <div class="form-group">
          <input
            type="date"
            id="dob"
            name="dob"
            placeholder="Date of Birth"
            required
          />
        </div>

        <div class="form-group">
          <select id="gender" name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>

        <div class="form-group">
          <input
            type="text"
            id="contact_number"
            name="contact_number"
            placeholder="Contact Number"
            required
          />
        </div>

        <div class="form-group">
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
            required
          />
        </div>

        <div class="form-group">
          <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            placeholder="Confirm Password"
            required
          />
        </div>

        <div class="button-container">
          <button type="submit">Register</button>
        </div>
      </form>
    </div>
  </body>
</html>
