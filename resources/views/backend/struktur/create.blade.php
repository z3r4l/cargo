<x-app-layouts title="Create Struktur" page="Create Struktur">
    <form  
        action="{{ route('struktur.store') }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
    >
        @csrf
        @include('backend.struktur.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>