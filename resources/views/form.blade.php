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
      Laravel 8 - Add Blog Post Form Example
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
<script>
     $('#postForm').on('submit',function(e){
        e.preventDefault();
        let title = $('#title').val();
        let name = $('#name').val();
        let age = $('#age').val();
        let description = $('#description').val();
            $.ajax({
                type: "POST",
                url:'/submit-form',
                headers: 
                {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: 
                {
                "_token": "{{ csrf_token() }}",
                title: title,
                name: name,
                age: age,
                description: description,
                },
                success: function (response) {
                    alert(response['success']);
                },
            })
    });
    </script>
</html>
