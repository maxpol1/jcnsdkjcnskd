@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contacts
                        <span class="float-lg-end">
                            <a href="{{ route('contact.index') }}"> Create Contact</a>
                        </span>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <tn>Edit/View</tn>
                            <tn>Delete</tn>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td> {{ $contact->name }}</td>
                                    <td> {{ $contact->phone }}</td>
                                    <td> {{ $contact->address }}</td>
                                    <td>
                                        <a href="{{ route('contact.edit', [ $contact->id ]) }}">
                                            <button class="btn btn-success">Edit</button>
                                        </a>
                                        <a href="{{ route('contact.show', [$contact->id]) }}">
                                            <button class="btn btn-primary">View</button>
                                        </a>
                                    </td>
                                    <td>
                                    <form action="{{ route('contact.destroy', [$contact->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
