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
