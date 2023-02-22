@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="input-group control-group initial-add-more">
                        <input type="file" name="image[]" class="form-control" id="image">
                        <div class="input-group-btn">
                            <button class="btn btn-success btn-add-more" type="button"> Add</button>
                        </div>
                    </div>

                    <div class="copy" style="display: none">
                        <div class="input-group control-group add-more" style="margin-top:11px">
                            <input type="file" name="image[]" class="form-control" id="image">
                            <div class="input-group-btn">
                                <button class="btn btn-danger remove" type="button"> Remove</button>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

                    {{--                    <form action="{{ route( 'album.store' ) }}" method="post" enctype="multipart/form-data">--}}
                    {{--                        @csrf--}}
                    {{--                        <input type="text" name="album" class="form-control" placeholder="your album name"><br>--}}

                    {{--                        <input type="file" name="image[]" class="form-control">--}}
                    {{--                        <input type="file" name="image[]" class="form-control">--}}
                    {{--                        <input type="file" name="image[]" class="form-control">--}}

                    {{--                        <button class="btn btn-primary" type="submit"> Submit</button>--}}
                    {{--                    </form>--}}
                    {{--                    @foreach($images as $image)--}}
                    {{--                        <img src="{{ asset('storage/'.$image->name ) }}" class="img-thumbnail">--}}
                    {{--                    @endforeach--}}

                    {{--                    <div class="card-body">--}}
                    {{--                        @if (session('status'))--}}
                    {{--                            <div class="alert alert-success" role="alert">--}}
                    {{--                                {{ session('status') }}--}}
                    {{--                            </div>--}}
                    {{--                        @endif--}}

                    {{--                        {{ __('You are logged in!') }}--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
        {{--       <p>{{ \Illuminate\Support\Facades\Auth::user()->name }}</p>--}}
        {{--                    <p>{{ \Illuminate\Support\Facades\Auth::user()->profile }}</p>--}}

        {{--                    @foreach($posts as $post)--}}
        {{--                        <p>{{ $post->title }}</p>--}}
        {{--                        @foreach($post->tag as $t)--}}
        {{--                            {{ $t->name }}--}}
        {{--                        @endforeach--}}
        {{--                    @endforeach--}}
    </div>
@endsection
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $(".btn-add-more").click(function (){
            // alert("ok");
            var html=$(".copy").html();
            $(".initial-add-more").after(html);
        });
        $("body").on("click",".remove",function (){
            $(this).parents(".control-group").remove();
        })
    });
</script>
