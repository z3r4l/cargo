<x-app-layouts title="Edit Struktur" page="Edit Struktur">
    <form  
        action="{{ route('struktur.update', $struktur->id) }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
    >
        @csrf
        @method('put')
       @include('backend.struktur.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>