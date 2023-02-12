<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('INPUT NEW DATA') }} </div>
            <div class="card-body">
                <form action="{{ route('createTable') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name">
                        @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input name="age" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Age">
                        @error('age')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input name="address" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Address">
                        @error('address')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input name="phone" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Phone Number">
                        @error('phone')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Insert</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>