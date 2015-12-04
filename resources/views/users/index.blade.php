<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Users</div>
                <h1>All the Users</h1>
            
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
            
                        <!-- we will also add show, edit, and delete buttons -->
                        <td>
            
                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                           <!--  <a class="btn btn-small btn-success" href="{{ URL::to('user/' . $value->id . '/destroy') }}">Delete this User</a>-->
                         
             {!! Form::open([
                'method' => 'DELETE', 
                'route'  => ['user.destroy', $value->id]
             ]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
            
                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                 <!--           <a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Nerd</a> -->
            
                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
              <!--              <a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a>-->
            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                
            </div>
        </div>
    </body>
</html>
