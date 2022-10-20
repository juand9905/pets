<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <article class="container">
        <section class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">{{$category->category_name }} {{$category->category_tamaño }}</h1>
            </div>
        </section>
        <section class="row my-4">
            <div class="col-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.gravatar.com/avatar/{{md5($category->email_hashed)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->category_name }} - {{$category->category_tamaño }} <span class="badge rounded-pill bg-success">{{$category->category_id}}</span></h5>
                                <p class="card-text"><b>Id: </b>  {{$category->category_id}}</p>
                                <p class="card-text"><b>Name: </b> {{$category->category_name}}</p>
                                <p class="card-text"><small class="text-muted">{{$category->category_tamaño}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/categories" class="btn btn-success text-center">Home</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
