<x-app-layouts title="Create partnership" page="Create partnership">
    <form  
        action="{{ route('partnership.store') }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
    >
        @csrf
        @include('backend.partnership.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>