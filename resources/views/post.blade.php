@extends('home')

@section('content')
                <div class="card mb-4">
                    <div class="card-body">
                        <h1 class="card-title">{{ $post->title }}</h1>
                        <p class="card-text">
                            {{ $post->body }}
                        </p>

                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                                {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
@endsection

