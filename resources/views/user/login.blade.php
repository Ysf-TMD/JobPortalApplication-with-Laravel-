@extends("layouts.app")
@section("content")
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-8">
                @include("message")
                <div class="card shadow-lg">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{route("login.post")}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control">
                                @if($errors->has("email"))
                                    <span class="text-danger">{{$errors->first("email")}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                                @if($errors->has("password"))
                                    <span class="text-danger">{{$errors->first("password")}}</span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button class="btn btn-primary w-75 mx-auto btn-sm " type="submit">login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
