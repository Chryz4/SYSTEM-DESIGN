<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal</title>
    <link rel="stylesheet" href="personalinfo.css">
</head>
<body>
  
    <header>
        <div class="container">
          <div class="logo">
            <img src="D:\Chris\NIBM\WEB\HTML\Assignment\Scholar Sphere logo.png" alt="Scholar Sphere">
          </div>
          <nav class="navbar">
            <ul class="nav-links">
              <li class="nav-link">
                <a href="#">Home</a></li>
                <li class="nav-link faculties">
                  <a href="#">Faculties
                  <span class="material-icons drop-down-icon">
                    arrow_drop_down
                  </span></a>
              <ul class="drop-down">
                <li>Faculty of Business</li>
                <li>Faculty of Computing</li>
                <li>Faculty of Engineering</li>
                <li>Faculty of Science</li>
              </ul></li>
              <li class="nav-link courses">   
                <a href="#">Courses
                <span class="material-icons drop-down-icon">arrow_drop_down
                </span></a>
                <ul class="drop-down">
                  <li>Certificate Programme</li>
                  <li>Foundation Programme</li>
                  <li>Undergraduate Programme</li>
                  <li>Postgraduate Programme</li>
                </ul></li>
                <li class="nav-link">
                  <a href="#">About</a></li>
                <li class="nav-link">
                    <a href="#">Student Life</a></li>
                  <li class="nav-link">
                    <a href="#">Contact Us</a></li>
                      <button class="Login-button" onclick="location.href=('D:/Chris/NIBM/WEB/HTML/Assignment/StudentMgtSystemLogin.html')">
                        Login
                 </button>
                </ul>
            </nav>
            </div>
    </header>
    <div class="container2">
        <div class="header2">
          <h1>Student Profile</h1>
        </div>
        <div class="user">
        </div>
      </div>
    <div>
        <strong>Student ID:</strong> 
        <br>
        <strong>Name:</strong>
        <br>
        <strong>Program:</strong>
      </div>

              <div class="menu-container">
                <a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Home</a>
                <a href="Personalinfo.html">Personal Info</a>
                <a href="Academicinfo.html">Academic Info</a>
                <a href="Marks.html">Results  </a>
              </div>

          <div class="container-info">
                    <div class="profile-header"> </div>
                    <div class="profile-info">
                        <h2 id="studentName"></h2>
                    </div> 
                    </div> 
                    <div class="profile-details" id="profile-details">
                        <div class="section-personal">
                            <h3><center>Personal Information</center></h3><br>
                            <ul>
                                <li><strong>Full Name: </strong> Name</li>
                                <li><strong>Student ID:</strong></li>
                                <li><strong>Date Of Birth:</strong></li>
                            </ul>
                        </div>
                        <div class="section-contact">
                            <h3><center>Contact Information</center></h3><br>
                            <ul>
                                <li><strong>Home Address:</strong></li>
                                <li><strong>Mobile Number:</strong></li>
                                <li><strong>Email:</strong></li>
                            </ul>
                </div>
            </div>
        </div>
</body>
</html>