<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pets') }}
        </h2>
    </x-slot>

    <article class="container">
        <section class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">{{$pet->pet_name }} {{$pet->pet_breed }}</h1>
            </div>
        </section>
        <section class="row my-4">
            <div class="col-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.gravatar.com/avatar/{{md5($pet->email_hashed)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$pet->pet_name }} - {{$pet->pet_breed }} <span class="badge rounded-pill bg-success">{{$pet->pet_code}}</span></h5>
                                <p class="card-text"><b>Color: </b> {{$pet->pet_color}}</p>
                                <p class="card-text"><b>Age: </b> {{$pet->pet_age}}</p>
                                <p class="card-text"><b>Category: </b> {{$pet->category_id}}</p>
                                <p class="card-text"><small class="text-muted">{{$pet->pet_status}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</x-app-layout>
