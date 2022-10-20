<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <!--
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Categories</h1>
        </section>
    </article>
    -->

    <article class="container">
        <section class="row">
            <div class="col">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Category Tamaño</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category_id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_tamaño}}</td>
                            <td><a href="/categories/{{$category->id}}" class="btn btn-primary">Show</a></td>
                            <td><a href="/categories/{{$category->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>
                                <form action="/categories/{{$category->id}}" method="POST">
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
                    <a href="/categories/create" class="btn btn-success text-center">Create New Category</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
