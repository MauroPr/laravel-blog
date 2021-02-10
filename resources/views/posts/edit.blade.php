@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Article
                </div>
                    

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title*</label>
                            <input type="text" name="title" class="form-control" value="{{ old('tilte', $post->title) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label>Body</label>
                            <textarea name="body" cols="6" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Embed</label>
                            <textarea name="iframe" class="form-control">{{ old('iframe', $post->iframe) }}</textarea>
                        </div>

                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Update" class="btn btn-primary btn-md">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
