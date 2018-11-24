@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
             <div class="card-header">
                 Profile Description
             </div>
              <div class="card-body">
                <img src="{{Storage::url($user->avatar)}}" class="rounded-top" height="200" width="200" alt="">
              <h4 class="card-title m-1">{{$user->name}}</h4>
                <p class="card-text">Body</p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection