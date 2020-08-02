@extends('layouts.master')
@section('title', 'Image Upload')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <div class="custom-card pb-3 d-flex px-4">
                <div class="row">
                    <div class="col-lg-4">
                        @if (auth()->user()->img_url == 'not.jpg')
                            <img src="storage/public/avatars/not.jpg" alt="{{ auth()->user()->name }} Profile Image" class="img-fluid rounded-circle my-3 width-150 height-150">
                    
                            @else 
                            <img src="storage/public/avatars/{{auth()->user()->id}}/{{auth()->user()->img_url }}" alt="{{ auth()->user()->name }} Profile Image" class="img-fluid rounded-circle my-3 width-150 height-150">
                        @endif
                    </div>
                    <div class="col-lg-8 text-left mt-3">
                        <div class="user-info mt-3 ml-4">
                            <h3>{{ auth()->user()->name }}</h3>

                            <form action="/profile" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group my-3">
                                    <input type="file" name="image_source" id="">
                                </div>

                               <a href="/profile"> <button type="button" class="btn btn-sm btn-warning"> Go Back </button></a>
                                <input type="submit" class="btn btn-sm btn-primary">
                            </form>
                        </div>
            
                    </div>
                </div>

           </div>
        </div>
    </div>
</div>
@endsection
