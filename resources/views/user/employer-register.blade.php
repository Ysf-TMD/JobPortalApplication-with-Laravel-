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
                <div class="card" id="card" >
                    <div class="card-header">Employer Registration </div>
                    <div class="card-body" >
                        <form action="#" method="post" id="registrationForm">
                            @csrf
                            <div class="form-group">
                                <label for="">Company name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                                @if($errors->has("name"))
                                    <span class="text-danger">{{$errors->first("name")}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                                @if($errors->has("email"))
                                    <span class="text-danger">{{$errors->first("email")}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                                @if($errors->has("password"))
                                    <span class="text-danger">{{$errors->first("password")}}</span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button class="btn btn-primary w-75 mx-auto btn-sm " type="submit" id="btnRegister">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="" id="message"></div>
            </div>
        </div>
    </div>


    <script>
        var url = "{{route("store.employer")}}";
        document.getElementById("btnRegister").addEventListener("click",function(e){
            var form = document.getElementById("registrationForm");

            var formData = new FormData(form);
            var button  = e.target;
            var messageDiv = document.getElementById("message");
            var card  = document.getElementById('card');
            messageDiv.innerHTML = "";
            button.disabled = true  ;
            button.innerHTML = "Sending Email ..."
            fetch(url,{
                method : "POST",
                headers : {
                    "X-CSRF-TOKEN" : "{{csrf_token()}}"
                },
                body : formData
            }).then(response => {
                console.log("fetching data " , response)
                if ( response.ok){
                    console.log("response.ok")
                    console.log(response.json())
                    return response;
                }else {
                    throw new Error("Error in fetching function ... ")
                }
            }).then(data =>{
                button.innerHTML = "Register" ;
                button.disabled = false ;
                card.style.display="none";
                messageDiv.innerHTML = "<div class='alert alert-success '> Registration was Successful , please check your email to verify it </div>"

            }).catch(error =>{
                console.log("catching error ",error)
                button.innerHTML = "Register" ;
                button.disabled = false ;
                messageDiv.innerHTML = "<div class='alert alert-danger '>Something went wrong , Please try Again</div>"

            })
        })
    </script>

@endsection
