<x-app-layouts title="post" page="post">
    <div class="card">
           <div class="card-body">
             <div class="py-3">
               <a href="{{ route('post.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle-dotted me-2"></i>Tambah Data</a>
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
             <table class="table datatable text-center">
               <thead>
                 <tr>
                   <th class="text-center">#</th>
                   <th class="text-center">title</th>
                   <th class="text-center">Category</th>
                   <th class="text-center">body</th>
                   <th class="text-center">Action</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($post as $item)
                   <tr>
                       <th scope="row">{{ $loop->iteration }}</th>
                       <td>{{ Str::limit($item->title,50) }}</td>
                       <td>{{ $item->category->name }}</td>
                       <td>{{ Str::limit($item->body,60) }}</td>
                       <td>
                         <div class="d-flex">
                          <a href="{{ route('post.edit', $item->slug) }}" class="btn btn-sm btn-info text-uppercase">Edit</a>


                         <form action="{{ route('post.destroy', $item->slug) }}" method="post" class="d-inline">
                           @method('delete')
                           @csrf
                           <button class="btn btn-sm btn-danger ms-2  text-uppercase"
                               onclick="return confirm('Yakin Anda Ingin Menghapus')">Hapus</button>
                       </form>
                         </div>
                       </td>
                   </tr>
                 @endforeach
               </tbody>
             </table>
             <!-- End Table with stripped rows -->

           </div>
         </div>
</x-app-layouts>