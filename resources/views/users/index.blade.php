@extends('app')

@section('content')
<div class="container">
            <div class="content">
                <div class="title"><h1>Gestion des utilisateur</h1></div>
            
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
                                <td>
                                    <a class="btn btn-small btn-success" href="{{ URL::to('user/' . $value->id) }}">Show</a>
                                    <a class="btn btn-small btn-success" href="{{ URL::to('user/edit/' . $value->id) }}">Edit</a>
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('user/delete/' . $value->id) }}">Delete</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-small btn-success" href="{{ URL::to('user/create') }}">Create</a>
            </div>
        </div>        


@endsection

