@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="" method="post" class="mb-6">
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea class="bg-gray-100 border-2 w-full p-4 rounded-lg" name="body" id="body" cols="30" rows="4" placeholder="Post something!"></textarea>
                </div>

                <div>
                    <button class="font-medium bg-blue-500 text-white px-4 py-2">Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection