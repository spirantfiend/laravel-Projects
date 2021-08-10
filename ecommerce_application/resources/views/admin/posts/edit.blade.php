@extends('admin.app')

@section('title') {{ 'Post Manage' }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{ 'Post Manage' }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row user">

        <div class="col-md-12">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <div class="tile">
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <h3 class="tile-title">Post Edit</h3>
                            <hr>
                            <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label" for="title">Title</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="title"
                                        name="title"
                                        value="{{ $post->title }}"
                                    />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="description">Description</label>
                                    <textarea
                                        class="form-control"
                                        type="text"
                                        id="description"
                                        name="description"
                                    >{{ $post->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="image">Image</label>
                                    <input
                                        class="form-control mb-2"
                                        type="file"
                                        id="image"
                                        name="image"
                                        />
                                    <img width="70px" src="{{ url($post->image)}}" alt="">
                                </div>
                            </div>
                            <div class="tile-footer">
                                <div class="row d-print-none mt-2">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
