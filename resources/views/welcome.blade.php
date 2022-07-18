<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>
    <body>
        <div class="container mt-3">
                <div class="row">
                <div class="col-sm-3 p-3 bg-dark text-white"><a href="{{url('/')}}">Home</a></div>
                <div class="col-sm-3 p-3 bg-dark text-white"><a href="{{url('/About')}}">About</a></div>
                <div class="col-sm-3 p-3 bg-dark text-white"><a href="{{url('/Course')}}">Course</a></div>
                <div class="col-sm-3 p-3 bg-dark text-white"><a href="{{url('/Contact')}}">Contact</a></div>
                </div>
                <div class="p-3 bg-primary text-white text-center" style="width:100%">
                    <h1>wellcome</h1>
                    <p>Resize this responsive page to see the effect!</p> 
                </div>
            </div>
            </body>         
</html>
