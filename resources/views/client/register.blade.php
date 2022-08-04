@extends('templade')
@section('title')
    محمد شاپ
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="{{url("/register")}}">
                    <div class="mb-3">
                        <label  class="form-label">نام</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" name="user_name">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">شماره همراه</label>
                        <input type="text" class="form-control" name="mobile_number">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">ایمیل</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">شهر خود را انتخاب کنید</label>
                        <select class="form-select" name="city_id" >
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">  گذرواژه</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label"> تکرار گذرواژه</label>
                        <input type="password" class="form-control" name="password2">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">آدرس  منزل یا محل کار</label>
                        <textarea class="form-control" name="address"  rows="3"></textarea>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">نام نویسی</button>
                </form>
            </div>
        </div>
    </div>

@endsection
