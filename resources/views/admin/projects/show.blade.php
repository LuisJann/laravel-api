@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <p class="text-center">{{ $project->type ? $project->type->name : 'Nessuna tipologia' }}</p>
        <p class="mt-3">
            @forelse ($project->technologies as $technology)
                <span class="text-danger">#{{ $technology->name }}</span>
            @empty
                <span>Nessuna tecnologia specificata</span>
            @endforelse
        </p>
        <div class="d-flex justify-content-between mt-3">
            <h5>{{ $project->created_at }}</h5>
            <p>{{ $project->slug }}</p>
        </div>
        <p class="mt-3">{{ $project->content }}</p>
    </div>
@endsection
