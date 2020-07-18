@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('members')

<div class="container py-4">
    <div class="row">
        
        <div class="membro">
            <div class="text-center mx-1">
                <div style="width: 100%; padding-top: calc(100% - 0.4rem); position:relative;background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pexels.com%2Fsearch%2Fprofile%2520picture%2F&psig=AOvVaw0vhnnPyjDfdSXDIc_oDsa3&ust=1595081382873000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMDT86y71OoCFQAAAAAdAAAAABAD');background-position: center;background-size:cover;border-color: #ffcd00;border-width: 0.2rem;border-style: solid;border-radius: 50%;"></div>
                <h4 style="font-size: 1rem" class="mt-2">joao</h4>
                <p class="text-muted" style="font-size: 0.8rem">muted</p>
            </div>
        </div>
       
    </div>
</div>

@endsection


