<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal</title>
    <link rel="stylesheet" href="Studentportal.css">
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
    <div class="container-welcome">
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
                <a href="StudentPortal.html" class="active">Home</a>
                <a href="Personalinfo.html">Personal Info</a>
                <a href="Academicinfo.html">Academic Info</a>
                <a href="Marks.html">Results</a>
               
              </div>

          <div class="container-welcome">

            <div class="home">
                <h2>Welcome to your Student Portal</h2>
                <p><center>Here you can view your personal information, academic details, marks and exam results</center></p>
            </div>
                    
        </div>
</body>
</html>