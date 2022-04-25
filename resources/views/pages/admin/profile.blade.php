@extends('layouts.admin.master-admin')

@section('title')
    Profile
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <img src="{{asset('storage/avatars/' . Auth::user()->avatar)}}" height="150" class="img-circle  float-left" style="margin-right: 30px"/>
                    <h2 class="text-themecolor text-info">
                        Profile de {{Auth::user()->name}}
                    </h2>
                    <form enctype="multipart/form-data" action="{{route('dashboardUserUpdateAvatar')}}" method="POST">
                        @method('POST')
                        @csrf
                        <label class=" text-themecolor d-block">Mettre a jour votre image de profile</label>
                        <input type="file" name="avatar" class="d-block mb-3">
                        <input type="submit" class="float-right btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
