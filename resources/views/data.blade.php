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
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Name</th>
                <th>age</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  </div>
</div>  
</body>
{{-- <script>
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
    </script> --}}
</html>
