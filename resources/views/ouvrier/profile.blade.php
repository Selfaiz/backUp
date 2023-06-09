@extends('layouts.master') @section('title','MAALAM LIK - All Categories')
@section('style') 
<link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

<link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
/>
@endsection @section('content')
<div class="row ">
    <div class="col "  > 
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3">
                        <img
                            src="{{ $ouvrier->profile_url ? asset('assets/profiles/'.$ouvrier->profile_url):asset('assets/profiles/ouvrier.jpg') }}"
                            alt="..."
                            width="130"
                            class="rounded mb-2 img-thumbnail"
                        />
                        @if (Auth::check() && auth()->id == $ouvrier->id)
                        <a href="{{route('ouvrier.edit',$ouvrier->id)}}" class="btn btn-outline-dark btn-sm btn-block" >Edit profile</a >  
                        @else
                        <a href="#" class="btn btn-outline-primary btn-sm btn-block" >Send Message</a >
                        @endif
                        
                           
                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">{{$ouvrier->prenom . ' ' . $ouvrier->nom}}</h4>
                        <p class="small mb-4">
                            <i class="fas fa-map-marker-alt mr-2"></i>{{$ouvrier->ville}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">{{$ouvrier->posts->count( )}}</h5>
                        <small class="text-muted">
                            <i class="fas fa-image mr-1"></i>Posts</small
                        >
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">{{$ouvrier->orders->count()}}</h5>
                        <small class="text-muted">
                            <i class="fas fa-user mr-1"></i>Orders</small
                        >
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">3.2</h5>
                        <small class="text-muted">
                            <i class="fas fa-user mr-1"></i>Rating</small
                        >
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Address: {{$ouvrier->address}}</p>
                    <p class="font-italic mb-0">Phone: {{$ouvrier->phone}}</p>
                    <p class="font-italic mb-0">Bio: {{$ouvrier->bio}}</p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div
                    class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5>
                    <a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1">
                        <img
                            src="https://images.unsplash.com/photo-1469594292607-7bd90f8d3ba4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                    <div class="col-lg-6 mb-2 pl-lg-1">
                        <img
                            src="https://images.unsplash.com/photo-1493571716545-b559a19edd14?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                    <div class="col-lg-6 pr-lg-1 mb-2">
                        <img
                            src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                    <div class="col-lg-6 pl-lg-1">
                        <img
                            src="https://images.unsplash.com/photo-1475724017904-b712052c192a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                            alt=""
                            class="img-fluid rounded shadow-sm"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script') 
    <!--=============== MAIN JS ===============-->
    <script defer src="{{asset('assets/js/script.js')}}"></script> 
    @endsection