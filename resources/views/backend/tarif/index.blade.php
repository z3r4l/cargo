<x-app-layouts title="Tarif" page="Tarif">
    <div class="card">
           <div class="card-body">
             <div class="py-3">
               <a href="{{ route('tarif.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle-dotted me-2"></i>Tambah Data</a>
             </div>
             <div>
               @if (session()->has('success'))
                 <div class="alert alert-success" role="alert">
                     {{ session('success') }}
                     <button type="button" class="btn btn-sm btn-transparent float-end" data-bs-dismiss="alert" aria-label="Close">X</button>
                 </div>
               @endif

             </div>
             <!-- Table with stripped rows -->
             <table class="table datatable text-center" >
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Asal</th>
                   <th scope="col">Tujuan</th>
                   <th scope="col">Tarif</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($tarif as $item)
                   <tr>
                       <th scope="row">{{ $loop->iteration }}</th>
                       <td>{{ $item->asal }}</td>
                       <td>{{ $item->tujuan }}</td>
                       <td>{{ number_format($item->tarif) }}</td>
                       <td>
                         <a href="{{ route('tarif.edit', $item->id) }}" class="btn btn-info text-uppercase">Edit</a>


                         <form action="{{ route('tarif.destroy', $item->id) }}" method="post" class="d-inline">
                           @method('delete')
                           @csrf
                           <button class="btn btn-danger ms-2  text-uppercase"
                               onclick="return confirm('Yakin Anda Ingin Menghapus')">Hapus</button>
                       </form>
                       </td>
                   </tr>
                 @endforeach
               </tbody>
             </table>
             <!-- End Table with stripped rows -->

           </div>
         </div>
</x-app-layouts>