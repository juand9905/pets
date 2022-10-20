<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pets') }}
        </h2>
    </x-slot>

    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Create</h1>
        </section>
    </article>

    <article class="container">
        <section>
            <form action="/pets" class="row" method="POST">
                @csrf
                <div class="mb-3 col-6">
                    <label for="pet_code" class="form-label">Pet Code</label>
                    <input type="text" class="form-control" id="pet_code" name="pet_code" value="{{old('pet_code')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="pet_name" class="form-label">Pet Name</label>
                    <input type="text" class="form-control" id="pet_name" name="pet_name" value="{{old('pet_name')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="pet_breed" class="form-label">Pet Breed</label>
                    <input type="text" class="form-control" id="pet_breed" name="pet_breed" value="{{old('pet_breed')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="pet_color" class="form-label">Pet Color</label>
                    <input type="text" class="form-control" id="pet_color" name="pet_color" value="{{old('pet_color')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="pet_age" class="form-label">Pet Age</label>
                    <input type="text" class="form-control" id="pet_age" name="pet_age" value="{{old('pet_age')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="category_id" class="form-label">Category Id</label>
                    <input type="text" class="form-control" id="category_id" name="category_id" value="{{old('category_id')}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="pet_status" class="form-label">Pet Status</label>
                    <br>
                    <input type="checkbox"  id="pet_status" name="pet_status" value="{{old('pet_status')}}">
                </div>
                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Save" class="btn btn-success text-center">
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
        </section>
    </article>
</x-app-layout>
