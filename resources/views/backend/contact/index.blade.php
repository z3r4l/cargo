<x-app-layouts title="Kontak" page="Kontak">
    <div class="card">
             <!-- Table with stripped rows -->
             <table class="table datatable text-center" >
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">name</th>
                   <th scope="col">phone</th>
                   <th scope="col">email</th>
                   <th scope="col">Message</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($contact as $item)
                   <tr>
                       <th scope="row">{{ $loop->iteration }}</th>
                       <td>{{ $item->name }}</td>
                       <td>{{ $item->phone }}</td>
                       <td>{{ $item->email }}</td>
                       <td>{{ Str::limit($item->message,40) }}</td>
                       <td>
                         <form action="{{ route('contact.destroy', $item->id) }}" method="post" class="d-inline">
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