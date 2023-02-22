@extends('layouts.app')

@section('content')

    <div class="container">
        <!--Add image-->

        <!--end add image-->

        @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get ('message')}}</div>
        @endif
        <h1>{{ $albums->name }}({{ $albums->images->count() }})</h1>
        <div class="row">
            @foreach($albums->images as $album)
                <div class="col-sm-4">
                    <div class="item">
                        {{ $album->name }}
                        <img src="{{ asset('storage/'.$album->name) }}" alt="" class="img-thumbnail"
                             style="width: 300px;">
                    </div>
                {{--                    <form action="{{ route('image.delete') }}" method="post">--}}
                {{--                        @csrf--}}
                {{--                        <input type="hidden" name="id" value="{{ $album->id }}">--}}
                {{--                        <button class="btn btn-danger" type="submit">Delete</button>--}}
                {{--                    </form>--}}

                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"{{ $album->id }}>
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to delete?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('image.delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $album->id }}">

                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            @endforeach

        </div>
    </div>

@endsection

<style>
    .item {
        left: 0;
        top: 0;
        position: relative;
        overflow: hidden;
        margin-top: 50px;

    }

    .item img {
        -webkit-trasition: 0.6s ease;
        transition: 0.6s ease;
    }

    .item img:hover {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);

    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff3cd;
        font-size: 20px;
    }

    .img-thumbnail {
        border: 0px;
        border-radius: 0px;
    }
</style>
