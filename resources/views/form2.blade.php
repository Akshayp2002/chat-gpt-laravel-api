<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
    form 2
    </div>
    <div class="card-body">
      <form id="postForm">    
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" id="name" name="name" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">age</label>
            <input type="text" id="age" name="age" class="form-control" required="">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" id="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit"onclick="submitStudent()" class="btn btn-success submit-button">Submit</button>
      </form>
      <div id="vanillajs"><b>Person info will be listed here.</b></div>

<div id="jqueryjs"><b>Person info will be listed here.</b></div>
    </div>
  </div>
</div>  
</body>
<script>
$('form').submit(function (e) {
    e.preventDefault();

    var formData = $(this).serialize();

    $.ajax({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
        type: "POST",
        cache: false,
        url: '/submit-form2',
        data:formData,

        success: function (msg) {
            //alert("Success!");
            document.getElementById("vanillajs").innerHTML = msg;
            $("#jqueryjs").html("<p>" + msg + "</p>");
        }
    });
});
</script>
</html>
// form tag with username and password fields 
<form action="/login" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" id="username" name="username" class="form-control" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="password" id="password" name="password" class="form-control" required="">
      </div>
      <button type="submit" class="btn btn-success">Login</button>
      </form>

//form tag with unsername password confirm password 
<form action="/login" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" id="username" name="username" class="form-control" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input type="password" id="password" name="password" class="form-control" required="">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Confirm Password</label>
        
        <input type="password" id="password2" name="password2" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-success">Login</button>
        </form>
        </body>
        </html>

        //table with 3 column
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John</td>
                  <td>john@gmail.com</td>
                  <td>123-456-7890</td>
                  </tr>
                  <tr>
                    <td>John</td>
                    <td>john@gmail.com</td>
                    <td>123-456-7890</td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>john@gmail.com</td>

                      <td>123-456-7890</td>
                      </tr>
                      </tbody>
                      </table>

//js function for ajax form submission
<script>
function login(form) {
  var email = form.email.value;
  var password = form.password.value;
  $.ajax({
    type: "POST",
    url: "/login",
    data: {email: email, password: password},
    success: function(data) {
      if (data.success) {
        window.location.href = "/";
        } else {
          alert("Invalid email or password");
          }
          }
          });
          }
</script>
//

//registeration form
<form action="/register" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" id="email" name="email" class="form-control" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" id="password" name="password" class="form-control" required="">
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
      </form>


//login form
<form action="/login" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" id="email" name="email" class="form-control" required="">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" id="password" name="password" class="form-control" required="">
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
      </form>


      //login form
      <form action="/login" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" id="email" name="email" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" id="password" name="password" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
</form>
