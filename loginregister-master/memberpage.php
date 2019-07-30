<head>
  <link rel="stylesheet" href="file.css">
</head>
<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); exit(); }

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>
<header id="header">
      <div class="logo-area" align="center">
        <img id="header-img" src="https://set2learn.com.au/wp-content/uploads/2018/10/Basic-Computer-Skills.png"  alt='Logo' >
      </div>

      <div class="toggle-area">
        <label for="toggle"><i class="fas fa-bars"></i></label>
      </div>

      
      <div class="nav-bar" align="right">
        <a  href='logout.php'>Logout</a>
        
      </div>

    </header>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2 align="center" >Welcome <b><?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></b></h2>
				
				<hr>

		</div>
	</div>


</div>

<div id="form-block">
  <div id="form-block--left">
    <div id="left-content">
       <h1> Available Vacancies/Post On The List below </h1><span class="small-text1"> NB: All job vacancies require not less them  Diploma at an Accredited institute</span><br/><span class="small-text"> Click On The Post Of which you qualify to begin your job application  </span>
       <div>
         
         <ul style="list-style-type:square;">

            <button class="signup-button" title="HR Manager" name="button-em"><a href="http://localhost:8080/loginregister-master/cv.page"><span><h4 align="center">HR manager</h4></span></a>
             
            <button class="signup-button" title="Senior C# Developer" name="button-em"><a href="http://localhost:8080/loginregister-master/cv.page"><span><h4 align="center">Senior C# Developer</h4></span></a>

            <button class="signup-button" title="System Analyst" name="button-em"><a href="http://localhost:8080/loginregister-master/cv.page"><span><h4 align="center">System Analyst</h4></span></a>

            <button class="signup-button" title="UX/UI Designer" name="button-em"><a href="http://localhost:8080/loginregister-master/cv.page"><span><h4 align="center">UX/UI Designer</h4></span></a>  

                      
          </ul>

       </div>
    </div>
    <hr/>
    
  </div>
  <div id="form-block--right"><img src="http://media.lpgenerator.ru/images/36509/dllhost.png"/></div>
</div>






