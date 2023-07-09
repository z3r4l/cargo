<x-app-layouts title="partnership" page="partnership">
    <div class="card">
           <div class="card-body">
             <div class="py-3">
               <a href="{{ route('partnership.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle-dotted me-2"></i>Tambah Data</a>
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
                   <th scope="col">Name</th>
                   <th scope="col">Logo</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($partnership as $item)
                   <tr>
                       <th scope="row">{{ $loop->iteration }}</th>
                       <td>{{ $item->name }}</td>
                       <td><img src="{{ url('storage/partnership/' . $item->logo) }}" height="50" width="50"></td>
                       <td>
                         <a href="{{ route('partnership.edit', $item->id) }}" class="btn btn-info text-uppercase">Edit</a>


                         <form action="{{ route('partnership.destroy', $item->id) }}" method="post" class="d-inline">
                           @method('delete')
                           @csrf
                           <button class="btn btn-danger ms-2  text-uppercase"
                               onclick="return confirm('are you sure you want to delete')">delete</button>
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