<x-app-layouts title="Edit partnership" page="Edit partnership">
    <form  
        action="{{ route('partnership.update', $partnership->id) }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
    >
        @csrf
        @method('put')
       @include('backend.partnership.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>