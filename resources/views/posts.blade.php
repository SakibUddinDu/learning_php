<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Edit Post 
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <div class="bg-white my-6 p-6">
            <form  action="" method="post">
                @csrf
                <div>
                    <input
                        type="text"
                        name="title"
                        class="h-14 w-60 pl-5 pr-5 rounded-lg focus:shadow focus:outline-none block"
                        value="{{old('title')}}"
                        placeholder="Post Title..."
                    />
                    
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
        </div>
    </div>
</x-app-layout>
