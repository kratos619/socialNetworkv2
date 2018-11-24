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
              <h3 class="card-title m-1">{{$user->name}}</h3>
              <h4><span class="text-muted">Location:</span>{{$user->profile->location}}</h4>
              <p><span class="text-muted"> About Me:</span>{{$user->profile->about}}</p>
                <p class="card-text">
                    @if (Auth::id() == $user->id)
                    <a  href="{{route('profile.edit') }}"  class="btn btn-primary">Setup Profile</a>    
                    @endif
                    
                </p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection