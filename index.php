<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Andi's Website</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <script src="form.js"></script>  
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LevOmIeAAAAADBH0KQo7VIvqFQQtzlOLnzw7qDl"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  </head>
  <body>
    <script>
      function onSubmit(token) {
        document.getElementById("contact-form").submit();
      }
    </script>
  <?php

  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != '') {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
    
      $to = "andreas@kruger.joburg";
      $body = "";
    
      $body .="Name: $name\r\n";
      $body .="Email: $email\r\n";
      $body .="Message: $message\r\n";
    
      mail($to, $subject, $body);
    

    $message_sent = true;

    }
    else {
      $message_sent = false;
    }

  }

  

?>

    <canvas id="bg"></canvas>   

    <main>

        <nav class="navbar">
            <a href="#about">About me</a> 
            <a href="#projects">Projects</a> 
            <a href="#work">Where I worked</a> 
            <a href="#contact">Contact</a>
            </nav>

      <header>
        <h1>Andreas Krüger</h1>
        <p>Welcome to my website!</p>
        <p>Heres me face </p>
      </header>


      <blockquote>
        <p>I bodged this together and put it on the interwebs</p>
      </blockquote>

      <section id="about">
        <h2>📜 Manifesto</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

      </section>

      <section class="light" id="projects">
        <h2>👩🏽‍🚀 Projects</h2>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <h2>🏆 Accomplishments</h2>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

      </section>

      <blockquote>
        <p>The best way out is always through <br>-Robert Frost</p>
      </blockquote>

      <section class="left" id="work">
        <h2>🌮 Work History</h2>

        <h3>McDonalds</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <h3>Burger King</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <h3>Taco Bell</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

      </section>

      <blockquote>
        <p>Thanks for watching!</p>
      </blockquote>


      <section id="contact">
        <h2>📱 Contact me</h2>

        <h3>✉️ Email</h3>
        <p>
            <a class="contactlink" href="mailto:andreas@kruger.joburg?subject=Howzit%2C%20I%20would%20like%20to%20tell%20you%20that...&body=Howzit%2C%0D%0AI%20stumbled%20upon%20your%20website%20and%20would%20just%20like%20to%20tell%20you%20%0D%0A%3CInsert%20content%20here%3E%0D%0A%0D%0AKind%20Regards%0D%0A%3CYour%20Name%3E">Send me an email!</a>
        </p>
        <h3>📞 Phone</h3>
        <p>
          Not so fast, how about this: send me an email and I will have my people call your people 😏
        </p>
        <h3>🌍 Or just use this excelent form</h3>

      <?php

      if($message_sent):
   

      ?>

      <h3>Thanks, got your email</h3>

      <?php else: ?>
        <div class="container">
        <form id="contact-form" action="index.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="john@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Howzit" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
              <button class="g-recaptcha btn" 
              data-sitekey="6LevOmIeAAAAADBH0KQo7VIvqFQQtzlOLnzw7qDl"
              data-callback='onSubmit' 
              data-action='submit'>Submit</button>
            </div>
        </form>
    </div>

      <?php endif; ?>

      </section>


    </main>
    
    <script type="module" src="main.js"></script>
  </body>
</html>
