<div class="container mx-auto mt-8">
    <div class="mt-10">
        <h2 class="font-bold mb-4">Comments</h2>

        <div class="mt-8">
            @foreach($post->comment as $comment)
                <div class="flex mb-4 items-start">
                    <div class="h-8 w-8 rounded-full"> <img src="{{$comment->image}}" alt="not found"></div>
                    <div class="ml-4">
                        <p class="font-semibold capitalize">{{$comment->author}}</p>
                        <p class="text-gray-500 capitalize">{{ $comment->comment }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>