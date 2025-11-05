<!doctype html>

<html lang="en">


 <head>

  <meta charset="UTF-8">

  <title>Workers Login</title>

  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

 </head>
 <style>

    /* @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap'); */
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}
body
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color:white;
}
section
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2px;
  flex-wrap: wrap;
  overflow: hidden;
}
section::before
{
  /* content: '';
  position: absolute;
  width: 100%;
  height: 100%; */
  /* background: linear-gradient(#000,rgb(235, 212, 5),#000); */
  /* animation: animate 5s linear infinite; */
}
/* @keyframes animate
{
  0%
  {
    transform: translateY(-100%);
  }
  100%
  {
    transform: translateY(100%);
  }
} */
section span
{
  position: relative;
  display: block;
  width: calc(6.25vw - 2px);
  height: calc(6.25vw - 2px);
  /* background: #181818; */
  z-index: 2;
  transition: 1.5s;
}
/* section span:hover
{
  background: rgb(230, 226, 6);
  transition: 0s;
} */

section .signin
{
  position: absolute;
  width: 400px;
  background: #222;
  z-index: 1000;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  border-radius: 4px;
  box-shadow: 0 15px 35px rgba(0,0,0,9);
}
section .signin .content
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 40px;
}
section .signin .content h2
{
  font-size: 2em;
  color: rgb(245, 229, 12);
  text-transform: uppercase;
}
section .signin .content .form
{
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 25px;
}
section .signin .content .form .inputBox
{
  position: relative;
  width: 100%;
}
section .signin .content .form .inputBox input
{
  position: relative;
  width: 100%;
  background: #333;
  border: none;
  outline: none;
  padding: 25px 10px 7.5px;
  border-radius: 4px;
  color: #fff;
  font-weight: 500;
  font-size: 1em;
}
section .signin .content .form .inputBox i
{
  position: absolute;
  left: 0;
  padding: 15px 10px;
  font-style: normal;
  color: #aaa;
  transition: 0.5s;
  pointer-events: none;
}
.signin .content .form .inputBox input:focus ~ i,
.signin .content .form .inputBox input:valid ~ i
{
  transform: translateY(-7.5px);
  font-size: 0.8em;
  color: #fff;
}
.signin .content .form .links
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.signin .content .form .links a
{
  color: #fff;
  text-decoration: none;
}
.signin .content .form .links a:nth-child(2)
{
  color: rgb(245, 229, 12);
  font-weight: 600;
}
.signin .content .form .inputBox input[type="submit"]
{
  padding: 10px;
  background: rgb(245, 229, 12);
  color: #000;
  font-weight: 600;
  font-size: 1.35em;
  letter-spacing: 0.05em;
  cursor: pointer;
}
input[type="submit"]:active
{
  opacity: 0.6;
}
@media (max-width: 900px)
{
  section span
  {
    width: calc(10vw - 2px);
    height: calc(10vw - 2px);
  }
}
@media (max-width: 600px)
{
  section span
  {
    width: calc(20vw - 2px);
    height: calc(20vw - 2px);
  }
}
 </style>

 <body> <!-- partial:index.partial.html -->

 <section>
        <!-- other elements -->

        <div class="signin">
            <div class="content">
                <h2>Login</h2>
                <form action="/workerlogin" method="POST" class="form">
                    @csrf
                    <div class="inputBox">
                        <!-- Phone number input -->
                        <input type="tel" id="phone" name="login" required>
                    </div>
                    <div class="inputBox">
                        <!-- Password input -->
                        <input id="password" type="password" name="password" required><i>Password</i>
                    </div>
                    <div class="links">
                        <a href="#">Forgot Password</a>
                        <a href="/applicationworker">Signup</a>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Login">
                    </div>
                    @if($errors->has('login'))
                    <div style="color: red" class="alert alert-danger" role="alert">
                        {{ $errors->first('login') }}
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </section>
    <script>
    // Initialize Intl Tel Input for the phone field
    const phoneInput = document.querySelector("#phone");
    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "pk",   // Set Pakistan as the default country
        onlyCountries: ["pk"],  // Restrict to Pakistan only
        separateDialCode: true, // Display +92 separately
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        dropdownContainer: null // Disable the dropdown for country selection
    });
</script>

 </body>

</html>
