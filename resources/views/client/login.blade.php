@extends('templade')
@section('title')
    محمد شاپ
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="post" action="{{url("/login")}}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control"  name="email">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control"name="password" >
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">ورود</button>
            </form>
        </div>
    </div>
</div>

@endsection
