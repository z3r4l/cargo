<x-app-layouts title="Edit Post" page="Edit Post">
    <form  
        action="{{ route('post.update', $post->slug) }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
        onkeypress="return event.keyCode != 13"
    >
        @csrf
        @method('put')
       @include('backend.post.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>