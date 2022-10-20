<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td><a href="/users/{{$user->id}}" class="btn btn-primary">Show</a></td>
                            <td><a href="/users/{{$user->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>
                                <form action="/users/{{$user->id}}" method="POST">
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
                    <a href="/users/create" class="btn btn-success text-center">Create New User</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
