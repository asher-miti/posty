@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            @guest
            <p>Please log in to create posts</p>
            @endguest

            @auth
            <form action="{{route('posts')}}" method="POST" class="mb-6">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea class="bg-gray-100 border-2 w-full p-4 rounded-lg" name="body" id="body" cols="30" rows="4" @error('email') border-red-500 @enderror" placeholder="Post something!"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button class="font-medium bg-blue-500 text-white px-4 py-2">Post</button>
                </div>
            </form>
            @endauth

            <div>
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <a href="" class="font-bold">{{$post->user->name}}</a> <span class="text-gray-600 text-sm ml-2"> {{$post->created_at->diffForHumans()}}</span>
                            </div>

                            <p class="mb-2">{{$post->body}}</p>
                        </div>
                        @endforeach

                        {{$posts->links()}}
                @else
                <p>There are no posts</p>
                @endif
            </div>
        </div>
    </div>
@endsection