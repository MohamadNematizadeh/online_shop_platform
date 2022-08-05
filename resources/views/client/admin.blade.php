@extends('templade')
@section('title')
    محمد شاپ
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="{{url("/admin_dashboard")}}">
                    <div class="mb-3">
                        <label  class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" name="user_name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">گزرواژه</label>
                        <input type="password" class="form-control"name="password" >
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">ورود</button>
                </form>
            </div>
        </div>
    </div>

@endsection
