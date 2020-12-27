@extends('home')

@section('content')
           @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">

                        <h1 class="card-title">{{ $post->title }}</h1>
                        <p class="card-text">
                            {{ $post->get_excerpt }}
                        </p>
                        <a href="{{ route('post', $post) }}"  class="btn btn-primary" >Leer Mas</a>

                        <p class="card-text text-muted mb-0 mt-2">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                                {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
           @endforeach
            {{ $posts->links("pagination::bootstrap-4") }}
@endsection

