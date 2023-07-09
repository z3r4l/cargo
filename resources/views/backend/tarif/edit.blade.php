<x-app-layouts title="Edit Tarif" page="Edit Tarif">
    <form  
        action="{{ route('tarif.update', $tarif->id) }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
    >
        @csrf
        @method('put')
       @include('backend.tarif.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>