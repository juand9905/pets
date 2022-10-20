<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pets') }}
        </h2>
    </x-slot>


    <!--
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Pets</h1>
        </section>
    </article>
    -->

    <article class="container">
        <section class="row">
            <div class="col">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Pet Code</th>
                        <th>Pet Name</th>
                        <th>Pet Breed</th>
                        <th>Pet Color</th>
                        <th>Pet Age</th>
                        <th>Category Id</th>
                        <th>Pet Status</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pets as $pet)
                        <tr>
                            <td>{{$pet->pet_code}}</td>
                            <td>{{$pet->pet_name}}</td>
                            <td>{{$pet->pet_breed}}</td>
                            <td>{{$pet->pet_color}}</td>
                            <td>{{$pet->pet_age}}</td>
                            <td>{{$pet->category_id}}</td>
                            <td>{{$pet->pet_status}}</td>
                            <td><a href="/pets/{{$pet->id}}" class="btn btn-primary">Show</a></td>
                            <td><a href="/pets/{{$pet->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>
                                <form action="/pets/{{$pet->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        type="submit"
                                        value="Delete"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure?')"
                                    >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/pets/create" class="btn btn-success text-center">Create New Pet</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
