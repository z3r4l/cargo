<x-app-layouts title="Edit Category" page="Edit Category">
    <form  
        action="{{ route('category.update', $category->id) }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
        onkeypress="return event.keyCode != 13"
    >
        @csrf
        @method('put')
       @include('backend.category.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>