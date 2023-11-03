@extends("layouts.app")
@section("content")
    <div class="container mx-auto w-50 text-center">
        <div class="row justify-content-center mt-5">
            <div class="card bg-dark bg-gradient text-light">
                <div class="card-header  w-100">Verify Account</div>
                <div class="card-body bg-black ">
                    <p>
                        Your Account is not verified , Verify Your Account First ...
                        <a href="{{route("resend.email")}}">Resend verification email</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
