<x-app-layouts title="Create Tarif" page="Create Tarif">
    <form  
        action="{{ route('tarif.store') }}"
        method="post"
        enctype="multipart/form-data"
        class="row g-3"
    >
        @csrf
        @include('backend.tarif.__form')
    </form><!-- Vertical Form -->
</x-app-layouts>