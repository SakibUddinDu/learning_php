<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <form class="ml-10" action="{{route('add-post')}} " method="post">
        @csrf
        <div class="ml-12 ">
            <input
                type="text"
                name="title"
                @error('title') @else border-gray-200 @enderror
                class="h-14 w-60 pl-5 pr-5 rounded-lg focus:shadow focus:outline-none block"
                value="{{old('title')}}"
                placeholder="Post Title..."
            />
            @error('title')
                <span class="text-red-500 text-sm">
                {{$message}}
                </span>
            @enderror
            <textarea class="my-4" name="content" id="" cols="50" rows="8"> {{old('content')}} </textarea>
            {{-- <div class="absolute top-2 right-2"> --}}
            <div class="">
                <button
                    type="submit"
                    class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                >
                    Post
                </button>
            </div>
        </div>
            
    </form>

    <div class="posts p-5">
        <h2>Posts</h2>
     
            @foreach ($postgulu as $post)
            <div class="border-2  border-indigo-600 p-4 mt-5">
                <h3 class="text-2xl">
                    <a href="">{{$post->title}}</a>
                </h3>
                <p class="text-xl font-bold mb-4">{{$post->content}}</p>
                <a href="{{route('editPost',$post->id)}}">
                    <button class="h-5 w-12 text-white rounded-full bg-red-500 hover:bg-red-600" type="submit">Edit</button>
                </a>
                <form method="post" action="{{route('deletePost',$post->id)}}">
                    @csrf
                    <button class="h-5 w-12 text-white rounded-full bg-red-500 hover:bg-red-600" type="submit">Delete</button>         
                </form>

                
            </div>
                {{-- <li>{{$post->title}}</li>   --}}
            @endforeach 
      
    </div>
</x-app-layout>
