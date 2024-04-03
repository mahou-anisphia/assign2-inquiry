<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Inquiry Project">
    <meta name="keywords" content="HTML Markup">
    <meta name="author" content="Nguyen Phan Quoc Viet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Application</title>
    <link rel="stylesheet" href="styles/style.css" />
  </head>
  <body class="apply-body">

    <header class="main-header">
   
      <img id="teamlogo" src="images/Newly-Webs.png" alt="teamlogo">
       <a href="#" class="header-logo">Newly-Webs </a>
  
   
     <input type="checkbox" id="checkA">
     <label for="checkA" class="icons-header">
      <img src="images/menu-regular-60.png" id="menu-icon" alt="menu-regular-60">
      <img src="images/x-regular-60.png" id="close-icon" alt="x-regular-60">
    </label>
      
     <nav class="navbar">
       <a href="index.html" style="--i:0;" > HOME</a>
       <a href="about.html" style="--i:1;"> ABOUT US</a>
       <a href="apply.html" style="--i:2;" class="active"> APPLY</a>
       <a href="jobs.html" style="--i:3;"> JOB INFORMATION</a>
       <a href="enhancement.html" style="--i:4;"> ENHANCEMENT</a>
      </nav>
   </header>

       <section class="container">
    
        <header>Job Application Form</header>
        <form method="post" action="processEOI.php" class="form">
          <div class="input-box">
            <label for="jobReferenceNumber">Job Reference Number:</label>
            <input type="text" id="jobReferenceNumber" name="jobReferenceNumber" pattern="[A-Za-z0-9]{1,5}"  title="Only 5 characters" placeholder="Enter Job Reference Number" required>
          </div>
        
        <div class="column">
            <div class="input-box">
              <span class=" details"><label for="firstName">First Name:</label></span>
               <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]{1,20}" title="Maximum 20 alpha characters" placeholder="Enter First Name" required>
            </div>

            <div class="input-box">
              <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" pattern="[A-Za-z]{1,20}" title="Maximum 20 alpha characters" placeholder="Enter Last Name" required>
            </div>
        </div>
          <div class="input-box">
            <label for="dateOfBirth">Date of Birth:</label>
            <input type="text" id="dateOfBirth" name="dateOfBirth" pattern="\d{1,2}\/\d{1,2}\/\d{4}" placeholder="dd/mm/yyyy">
          </div>

          <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
              <div class="gender">
                <input type="radio" id="check-male" name="gender" checked />
                <label for="check-male">Male</label>
              </div>

              <div class="gender">
                <input type="radio" id="check-female" name="gender" />
                <label for="check-female">Female</label>
              </div>
            </div>
          </div>
          

         <div class="column">
          <div class="input-box address">
            <label for="streetAddress">Street Address:</label>
            <input type="text" id="streetAddress" name="streetAddress" pattern=".{1,40}" placeholder="Enter Street Address" required>
            </div>
            <div class="input-box address">
            <label for="suburb">Suburb/Town:</label>
            <input type="text" id="suburb" name="suburb" pattern=".{1,40}" placeholder="Enter Suburb/Town" required> 
            </div>
          </div> 
            <div class="state-box">
            <label for="state">State:</label>
            </div>
              <div class="select-box">
              <select name="state">
                  <option value="">Select...</option>
                  <option value="VIC">VIC</option>
                  <option value="NSW">NSW</option>
                  <option value="QLD">QLD</option>
                  <option value="NT">NT</option>
                  <option value="WA">WA</option>
                  <option value="SA">SA</option>
                  <option value="TAS">TAS</option>
                  <option value="ACT">ACT</option>
                </select>
              </div>
            
              <div class="input-box">
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" pattern="[0-9]{4}" title="4 digits only" placeholder="Enter Postcode" required>
              </div>

              <div class="input-box">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
              </div>

              <div class="input-box">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{8,12}" placeholder="Enter Phone Number"  required>
              </div>

              <div class="skillList">
                <h5><label for="skillList">Skill List:</label></h5>
              <div class="skilloption">
                <br>
                  <input type="checkbox" id="skill1" name="skills[]" value="Skill 1">Skill 1
                  <label for="skill1"></label>

                  <br>
                  <label for="skill2"></label>
                  <input type="checkbox" id="skill2" name="skills[]" value="Skill 2">Skill 2
                  <br>
                  <label for="skill3"></label>
                  <input type="checkbox" id="skill3" name="skills[]" value="Skill 3">Skill 3
                  <br>
                  <label for="otherSkills"></label>
                  <input type="checkbox" class="otherSkills" name="skills[]" value="Other skills">Other skills
              </div>
            </div>
  
            <div id="otherSkills">
              <label for="otherSkills">Other Skills:</label>
              <br>
              <textarea class="otherSkills" name="otherSkills" cols="45" rows="10" placeholder="Write down your skill here..."></textarea>
            </div>
          

            <div>
              <button type="submit" class="btn"><span class="animation"></span>Apply<span class="animation"></span></button>   
            </div>
        </form>
       </section>



       <footer class="footer-distributed">
        <div class="footer-logo">
            <img src="images/Newly-Webs.png" alt="logo" id="logo">
            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Jobs</a>
            </p>
    
            <p class="footer-company-name">Copyright © 2024 <strong>Newly-Webs</strong> All rights reserved</p>
        </div>
    
        <div class="footer-center">
            <div>
                <img src="images/map-regular-36.png" alt="map-regular-36">
                <p>Ho Chi Minh City</p>
            </div>
    
            <div>
                <img src="images/phone-solid-36.png" alt="phone-solid-36">
                <p><a href="tel:+84779900990">+(84)779900990</a></p>
            </div>
            <div>
                <img class="bx-envelope" src="images/envelope-solid-36.png" alt="envelope-solid-36">
                <p><a href="images/Newly-webSP@gmail.com">Newly-webSP@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>Empowering Your Digital Universe: Where Innovation Meets Technological Mastery with Newly-Webs</strong>. 
            </p>
            <div class="footer-icons">
                <a href="#"><img src="images/facebook-square-logo-36.png" alt="facebook-square-logo-36"></a>
                <a href="#"><img src="images/instagram-logo-36.png" alt="instagram-logo-36"></a>
                <a href="#"><img src="images/github-logo-36.png" alt="github-logo-36"></a>
                <a href="#"><img src="images/twitter-logo-36.png" alt="twitter-logo-36"></a>
                <a href="#"><img src="images/youtube-logo-36.png" alt="youtube-logo-36"></a>
            </div>
        </div>
    </footer>    
</body>
</html>
