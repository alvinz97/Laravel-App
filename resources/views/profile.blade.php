@extends('layouts.master')
@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center mt-2">
           <div class="custom-card pb-3">
                <table class="table table-hover table-stripe">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Logged In</th>
                            <th scope="col">Logged Out</th>
                            <th scope="col">Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if (count($histories) > 0)
                            @foreach ($histories as $history)
                                <tr>
                                    <th scope="row">{{ $history->id }}</th>
                                    <th scope="row">{{ $history->logged_at }}</th>
                                    <th scope="row">{{ $history->logged_out_at }}</th>
                                    <th scope="row"></th>
                                </tr>
                            @endforeach
                            {{$histories->links()}}
                        @else
                            <h3>No Data Found</h3>
                        @endif --}}
                    </tbody>
                </table>
           </div>
        </div>

        <div class="col-md-4 text-center mt-2">
           <div class="custom-card pb-3">
                <div class="text-center">
                    @if (auth()->user()->img_url == 'not.jpg')
                            <img src="storage/public/avatars/not.jpg" alt="{{ auth()->user()->name }} Profile Image" class="img-fluid rounded-circle my-3 width-150 height-150">
                    
                        @else 
                        <img src="storage/public/avatars/{{auth()->user()->id}}/{{auth()->user()->img_url }}" alt="{{ auth()->user()->name }} Profile Image" class="img-fluid rounded-circle my-3 width-150 height-150">
                    @endif
                </div>

                <div class="image-actionBtns text-center mb-3">
                    <a href="/upload" class="mx-4"><i class="fa fa-upload"></i></a>
                    <a href="/remove" class="mx-4 confirmMe"><i class="fa fa-trash"></i></a>
                </div>

                <div class="edit-info my-10">
                    <a href="/edit">
                        <button class="btn btn-sm btn-block btn-secondary my-2">Edit &nbsp; <i class="fa fa-edit"></i></button>
                    </a>
                    <a href="/change-password">
                        <button class="btn btn-sm btn-block btn-secondary my-2">Change Password &nbsp; <i class="fa fa-unlock-alt"></i></button>
                    </a>
                </div>
                <hr class="hr-2">

                <div class="user-info">
                    <h4>{{ auth()->user()->name }}</h4>
                    <p><a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a></p>
                </div>

                <hr class="hr-2">

                <div class="login-details">
                    <table class="my-10">
                        <tr>
                            <th style="width: 30%" class="text-left"><p>Current Login</p></th>
                            <th style="width: 30%" class="text-right"><p>{{ auth()->user()->current_sign_in_at->diffForHumans() }}</p></th>
                        </tr>

                        <tr>
                            <th style="width: 30%" class="text-left"><p>Last Sign in</p></th>
                            <th style="width: 30%" class="text-right"><p>{{ auth()->user()->last_sign_in_at->diffForHumans() }}</p></th>
                        </tr>
                    </table>
                </div>

                <hr class="hr-2">
           </div>
        </div>
    </div>
</div>
@endsection
