<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cats Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @if ($message = Session::get('success'))
        <div id="notif" class="notification">
            <p class="text-notif">{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('failed'))
        <div id="notif" class="notification-failed">
            <p class="text-notif">{{ $message }}</p>
        </div>
    @endif
    <div class="container py-4">
        <div class="header">
            <div class="text-center">
                <h1>Cats Management</h1>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Insert Data
            </button>
        </div>
        <div class="body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Type/Kind</th>
                        <th scope="col">Colour</th>
                        <th scope="col">Food</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($cats as $d)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->gender }}</td>
                        <td>{{ $d->type }}</td>
                        <td>{{ $d->colour }}</td>
                        <td>{{ $d->food }}</td>
                        <td><a href="{{ $d->id }}" class="btn btn-warning">Edit</a> | <a href="{{ $d->id }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>'cats.store','enctype' => 'multipart/form-data']) !!}
                    
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlInput1">Name</label>
                                {!! Form::text('name', null, ['class' => 'form-control','required'])!!}
                            </div>
                        </div>                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlSelect1">Gender</label>
                                {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null , ['class' => 'form-select','required','placeholder' => 'Please select'])!!}
                            </div>
                        </div>                      
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlInput1">Type/Kind</label>
                                {!! Form::text('type', null, ['class' => 'form-control','required'])!!}
                            </div>
                        </div>                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlInput1">Colour</label>
                                {!! Form::text('colour', null, ['class' => 'form-control','required'])!!}
                            </div>
                        </div>                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="form-group mt-3">
                                <label for="exampleFormControlInput1">Food</label>
                                {!! Form::text('food', null, ['class' => 'form-control','required'])!!}
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    setTimeout(function() {
        $('#notif').fadeOut('fast');
    }, 3000);
</script>
</html>