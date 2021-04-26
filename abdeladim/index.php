<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">

  <title>Admin management</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <div class="top"></div>
    <div class="bottom">
      <div class="row">
        <div class="col left">
          <img src="images/logo.svg" alt="Logo" />


          <div class="adminbutton">
          <button type="submit" name="formateur" id="formateur" class="claim-your-free-trial">formateur</button>
          <button type="submit" name="student" id="student" class="claim-your-free-trial">students</button>
        </div>
          
        </div>

        <div class="col right">

          <!-- START FORM -->

          <div class="right">
            
              <div class="form-control">
      
           
              </div>


            <form   action="index.php" method="POST">
            <div class="form">
              <div class="form-control">
                <div class="form-in</form>put">
                  <input id="firstName" name="firstname" type="text" placeholder="First Name" aria-label="First Name">
                </div>
              </div>
      
              <div class="form-control">
                <div class="form-input">
                  <input id="lastName" name="lastname" type="text" placeholder="Last Name" aria-label="Last Name">
                </div>
                
              </div>
      
              <div class="form-control">
                <div class="form-input">
                  <input id="email" name="email" type="email" placeholder="Email Address" aria-label="Email Address">
                </div>
              </div>
      
              <div class="form-control">
                <div class="form-input">
                  <input id="formateur" name="formateur" type="text" placeholder="formateur" aria-label="formateur">
                </div>
              </div>
      
              <div class="form-control claim-your-free-trial-form-control">
                <button id="submit" name="addstudent" type="submit" class="claim-your-free-trial">add student</button>
              </div>
            </form>
               
      
              
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>
