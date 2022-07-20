@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$category['name']}}</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{route('admin.categories.index')}}" class="btn btn-primary">Visualizza tutte le categorie</a>
            </div>
            @if (count($category['posts']) > 0)
                <div>
                    <h3>I posts associati</h3>
                    <ul>
                        @foreach ($category['posts'] as $post)
                            <li>{{$post['title']}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection