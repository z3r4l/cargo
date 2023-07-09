<x-app-layouts title="Create Post" page="Create Post">
    <form  
        action="{{ route('post.store') }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
        onkeypress="return event.keyCode != 13"
    >
        @csrf
        @include('backend.post.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>