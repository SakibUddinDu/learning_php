{{-- <h1>Edit</h1> --}}
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1>Edit</h1>
        </h2>
    </x-slot>

    
</x-app-layout> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Edit Post {{-- {{ __('items') }} --}}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <div class="bg-white my-6 p-6">
            <form  action="{{route('updatePost', $post->id)}}" method="post">
                @csrf
                <div>
                    <input
                        type="text"
                        name="title"
                        class="h-14 w-60 pl-5 pr-5 rounded-lg focus:shadow focus:outline-none block"
                        value="{{old('title')}}"
                        placeholder="Post Title..."
                    />
                    <textarea class="my-4" name="content" id="" cols="50" rows="8"> {{old('content')}} </textarea>
                    {{-- <div class="absolute top-2 right-2"> --}}
                    <div class="mt-4">
                        <button
                            type="submit"
                            class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                        >
                            Update
                        </button>
                    </div>
                </div>
                    
            </form> 
        </div>
    </div>
    {{-- <h3>{{$post ->title}}</h3> --}}
</x-app-layout>