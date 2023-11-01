@extends("layouts.app")
@section("content")
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-6 text-center">
                <h1>Looking For An Employee???</h1>
                <h3>Please Create An Account !!!</h3>
                <img src="{{asset("image/click.png")}}" alt="">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Employer Registration </div>
                    <div class="card-body">
                        <form action="{{route("store.employer")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Company name</label>
                                <input type="text" name="name" id="" class="form-control">
                                @if($errors->has("name"))
                                    <span class="text-danger">{{$errors->first("name")}}</span>
                                @endif
                            </div>
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
                                <button class="btn btn-primary w-75 mx-auto btn-sm " type="submit">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
