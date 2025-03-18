<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap");

    :root {
      --primary-color: #0da1a1;
      --secondary-color: #322b57;
      --text-light: #f3f3f3;
      --extra-light: #f3f4f6;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Roboto", sans-serif;
    }


    .container {
      display: flex;
      min-height: 100vh;
    }

    .container__left {
      flex: 1;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("images/bg.jpg");
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .navbar {
      padding: 1rem 2rem;
      color: var(--extra-light);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .navbar span {
      font-size: 1.5rem;
      font-weight: 500;
      cursor: pointer;
    }

    .image__content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: var(--extra-light);
    }

    .image__content h2 {
      font-size: 3rem;
      margin-bottom: 30rem;
    }

    .image__content p {
      letter-spacing: 2px;
    }

    .image__subtitle {
      text-align: center;
    }

    .container__right {
      flex: 1.25;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .content {
      width: 100%;
      max-width: 550px;
      padding: 1rem;
      display: grid;
      grid-template-columns: 150px auto;
      gap: 1rem;
      color: var(--secondary-color);
    }

    .header {
      margin-bottom: 1rem;
    }

    .header h1 {
      font-size: 2.5rem;
      font-weight: 900;
      color: var(--primary-color);
    }

    .header p {
      letter-spacing: 2px;
    }

    .content span {
      display: grid;
      align-items: center;
      font-size: 1rem;
      font-weight: 600;
    }



    input {
      width: 100%;
      padding: 1rem;
      background-color: var(--text-light);
      outline: none;
      border: none;
      border-radius: 5px;
    }

    .btns {
      display: flex;
      gap: 1rem;
    }

    .btn {
      flex: 1;
      padding: 1rem;
      outline: none;
      border: none;
      font-size: 1rem;
      color: var(--extra-light);
      cursor: pointer;
    }

    .cancel {
      background-color: var(--secondary-color);
    }

    .confirm {
      background-color: var(--primary-color);
    }

    @media screen and (width < 800px) {
      .container__left {
        display: none;
      }
    }
  </style>
  <title>Registration Page</title>
</head>

<body>
  <div class="container">
    <div class="container__left">
      <div class="navbar">
        <span>CaptureMomentsStudio</span>

        <span><i class="ri-menu-line"></i></span>
      </div>
      <div class="image__content">
        <p>CLICK FOR YOUR SHOOT</p>
        <h2>Photography.</h2>
        <p class="image__subtitle">JOURNEY EVERYWHERE</p>
      </div>
    </div>
    <div class="container__right">
      <form class="content" action="Registration.php" method="post">
        <span></span>
        <div class="header">
          <h1>Registration</h1>
        </div>

        <span>Name</span>
        <div>
          <label for="Username"></label>
          <input type="text" placeholder="Enter Username" autocomplete="off" name="Username" />
        </div>

        <span>Email</span>
        <div>
          <label for="Email"></label>
          <input type="email" placeholder="Enter Email Address" minlength="8" autocomplete="off" name="Email"/>
        </div>

        <span>Password</span>
        <div>
          <label for="Password"></label>
          <input type="password" placeholder="Enter Password" autocomplete="off" name="Password"/>
        </div>

        <span>Phone Number</span>
        <div>
          <label for="Number"></label>
          <input type="tel" placeholder="Enter Phone Number" min="10" autocomplete="off" name="Number" />
        </div>

        <span>City</span>
        <div>
          <label for="City"></label>
          <input type="text" placeholder="City" autocomplete="off" name="City"/>
        </div>

        <div class="btns">
          <button class="btn cancel">CANCEL</button>
          <button class="btn confirm">CONFIRM</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>