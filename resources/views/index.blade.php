<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container ">
        <h1>All Post</h1>
        <div class="col-sm-8 .col-lg-12 ">

            <table class="table table-striped align-middle" >
                <thead class="table-dark"></thead>
                  <tr>
                    <th scope="col" colspan="9" class="text-center">All Post</th>

                  <tr>
                    <th scope="col">Sl</th>
                    <th colspan="2">Title</th>
                    <th scope="col">Category</th>

                    <th colspan="2">Comtent</th>
                    <th colspan="2">Author</th>
                    <th scolspan="2">Image</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($posts as $post)
                  <tr >
                    <td>{{ $i++ }}</td>
                    <td colspan="2">{{ $post->title }}</td>
                    <td colspan="2">{{ $post->category->name }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->user->name }}</td>

                    <td colspan="2" >
                        <img   src="{{ asset("/" . $post->featured_image) }}"  style="width: 25%;" alt="">
                    </td>

                  </tr>
                  @endforeach
                </tbody>
              </table>

    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
