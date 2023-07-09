<x-app-layouts title="Create Category" page="Create Category">
    <form  
        action="{{ route('category.store') }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
        onkeypress="return event.keyCode != 13"
    >
        @csrf
        @include('backend.category.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>