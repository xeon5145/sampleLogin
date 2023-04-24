<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form method="POST" id="login" onsubmit="return false" >
            <label class="form-label">Username/Email</label>
            <input  class="form-control" name="username" type="text" placeholder="Enter Username/Email">
            
            <label class="form-label">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Enter Password">
            <div id="status"></div>
            <input class="btn btn-primary" name="login" type="submit" value="Login">
        </form>    
    </div>
    <div class="col-2"></div>
</div>

<script>
$("#login").submit(function(event) {
  event.preventDefault();

  // Get form data
  var formData = $(this).serialize();

  // Send form data using AJAX
  $.ajax({
    type: "POST",
    url: "api/loginCheck.php",
    data: formData,
    success: function(data) {
      var loginStatus = data;
      console.log(loginStatus);
      if(loginStatus == 1)
      {
        // window.location.href = "dashboard.php";
        console.log('Login successful');
      }
      else if(loginStatus ==  0)
      {
        $("#status").html("<div class='alert alert-danger mt-10'><strong>Login failed!</strong> Please try again.</div>");
      }
    },
    error: function() {
      console.log("failed");
    }
  });
});
</script>
