@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="Location">Location</label>
                        <input type="text" name="location" value="{{$info->location}}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Location">Profile Pic</label>
                        <input type="file" name="avatar" accept="image/*" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="Location">About Me</label>
                        <textarea type="text" name="about" required class="form-control">{{$info->about}} </textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Save Info" class="btn btn-primary btn-block">
                    </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
