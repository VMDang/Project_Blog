@extends('layout.footer')
@section('content')
    <div class="container">
        <form class="panel panel-primary" action="/users/createUser" method ="post" enctype="multipart/form-data">
            @csrf
            <div class="panel-heading">
                <h2 class="text-center">Registation Form - Input User's Detail Information</h2>
            </div>
            <div class="form-group ">
                <label for="image">Upload avatar in here</label> <br>
                <input type="file" name="image" id = "image">
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" name="name" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" name="birthday" class="form-control" id="birthday">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" id="address">
                </div>
                <div class="form-group">
                    <label for="work">Job:</label>
                    <input type="text" name="work" class="form-control" id="work">
                </div>
                <div class="form-group">
                    <label for="description">Description about you:</label>
                    <input type="text" name="description" class="form-control" id="description">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="confirmation_pwd">Confirmation Password:</label>
                    <input type="password" name="confirmation_pwd" class="form-control" id="confirmation_pwd">
                </div>

                <button class="btn btn-success">Register</button>
            </div>
        </form>
        @if(session('success'))
            {{session('success')}}
        @endif
    </div>
@endsection
