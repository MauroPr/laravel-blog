@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Create New Article
                </div>
                    

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title*</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="file" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Embed</label>
                            <textarea name="iframe" rows="6" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Submit" class="btn btn-primary btn-md">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
