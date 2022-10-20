<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Edit {{$category->category_id}} {{$category->category_name}}</h1>
        </section>
    </article>

    <article class="container">
        <section>
            <form action="/categories/{{$category->id}}" class="row" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 col-6">
                    <label for="category_id" class="form-label">Category Id</label>
                    <input type="text" class="form-control" id="category_id" name="category_id" value="{{old('category_id',$category->category_id)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="category_name" class="form-label">Category  Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{old('category_name',$category->category_name)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="category_tamaño" class="form-label">Category Tamaño</label>
                    <input type="text" class="form-control" id="category_tamaño" name="category_tamaño" value="{{old('category_tamaño',$category->category_tamaño)}}">
                </div>
                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Update" class="btn btn-success text-center" value="{{$category->center}}">
                </div>
            </form>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <section>
                <section class="row">
                    <div class="col d-grid">
                        <a href="/categories" class="btn btn-success text-center">Home</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>
