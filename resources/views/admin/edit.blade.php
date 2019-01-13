@extends('layout.default')
@section('contents')
    <h1>修改用户</h1>
    {{--警告框--}}
    @include('layout._errors')

    <form  method="post" action="{{route('user.update',['admin'=>$admin])}}">
        <div class="form-group">
            <label>用户名</label>
            <input type="text" name="username" class="form-control" value="{{$admin->username}}">
        </div>
        <div class="form-group">
            <label>邮箱</label>
            <input type="text" name="email" class="form-control" value="{{$admin->email}}">
        </div><div class="form-group">
            <label>手机号</label>
            <input type="number" name="tel" class="form-control" value="{{$admin->tel}}">
        </div>
        {{csrf_field()}}
        <button class="btn btn-primary btn-block">提交</button>
    </form>

@stop
