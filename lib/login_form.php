<?php require_once "lib/base/login.php"; ?>         

            <form method="POST">
        
    <div class="form-group">
    <label class="col-form-label" id="text-login">Email</label>
    
    <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Email"
     name="email_log">
    </div>

     <div class="form-group">
      <label for="inputPassword" class="col-form-label" id="text-login">Password</label>
    
      <input type="password" class="form-control" id="inputPassword"
      placeholder="Password" name="password_log">
      </div>
      <button type="submit" class="btn-lg btn-primary" name="login">Sign in</button>
      <br/><br/>
      <a href="registration.php" id="text-login">
       Don't have an account? Sign up</a>

  </form>