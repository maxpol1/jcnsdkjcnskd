@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Contact</div>
                    <form action="{{ route('contact.update', [ $contact->id ]) }}" method="post">
                        @csrf
                        <div class="alert alert-success" role="alert">
                            <div class="card-body">
                                <div class="from-group">
                                    <lable>Name</lable>
                                    <input type="text" name="name" class="form-control" value="{{ $contact->name }}">
                                </div>
                                <div class="from-group">
                                    <lable>Address</lable>
                                    <input type="text" name="address" class="form-control" value="{{ $contact->address }}">
                                </div>
                                <div class="from-group">
                                    <lable>Phone</lable>
                                    <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
                                </div>
                                <div class="from-group mt-3" >
                                    <button type="submit" class="btn btn-primary"> Submit</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
