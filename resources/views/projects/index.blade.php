<!doctype html>
<html lang="en">

<head>
    <style>
        .container {
            background-color: #dbaecd;
        }

        .icons i {
            color: #b5b3b3;
            border: 1px solid #b5b3b3;
            padding: 6px;
            margin-left: 4px;
            border-radius: 5px;
            cursor: pointer;
        }

        .activity-done {
            font-weight: 600;
        }

        .list-group li {
            margin-bottom: 12px;
        }

        .list-group-item {}

        .list li {
            list-style: none;
            padding: 10px;
            border: 1px solid #e3dada;
            margin-top: 12px;
            border-radius: 5px;
            background: #fff;
        }

        .checkicon {
            color: green;
            font-size: 19px;
        }

        .date-time {
            font-size: 12px;
        }

        .profile-image img {
            margin-left: 3px;
        }
    </style>

    <title>projects</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
      
        <form class="form-inline">
            <div class="form-group col-12">
                <label for="">Add new project</label>
                <input type="text" name="title" id="" class="form-control col-6" placeholder="" aria-describedby="helpId">
                
            </div>
        </form>

        <div class="row">
            @foreach($projects as $project)
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">{{$project->title}}</h3>
                <p class="card-text">{{$project->created_at}}</p>
                
                    <a href="{{route('projects.show',[$project->id])}}"class="btn btn-primary">show</a>
                    <a href="{{route('projects.edit',[$project->id])}}" class="btn btn-success">Edit</a>
                    <a href="{{route('projects.delete',[$project->id])}}"class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>