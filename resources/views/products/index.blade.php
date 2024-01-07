<x-app-layout>

@if(session('success'))
<div class="alert alert-success light-mode">
    <div class="flex items-center space-x-3 rtl:space-x-reverse">
        <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
        <p class="flex-1 font-Inter">{{ session('success') }}</p>
        <div class="flex-0 text-xl cursor-pointer">
            <button>
                <iconify-icon icon="line-md:close" class="relative top-[2px] " id="close">
                </iconify-icon>
            </button>
        </div>
    </div>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger light-mode">
    <div class="flex items-center space-x-3 rtl:space-x-reverse">
        <iconify-icon class="text-2xl flex-0" icon="system-uicons:target"></iconify-icon>
        <p class="flex-1 font-Inter">{{ session('error') }}</p>
        <div class="flex-0 text-xl cursor-pointer">
            <button>
                <iconify-icon icon="line-md:close" class="relative top-[2px] " id="close">
                </iconify-icon>
            </button>
        </div>
    </div>
</div>
@endif

    <div class="space-y-8">
        <div class="flex justify-between items-center">
          <x-breadcrumb :page-title="$pageTitle" :icon="$icon"/>
          <button class="btn inline-flex justify-center btn-dark rounded-[25px]">
                <span class="flex items-center">
                    <iconify-icon icon="mingcute:plus-fill"></iconify-icon> 
                <span><a href="{{ route('product.create') }}">Tambah</a></span> </span>
            </button>
        </div>

        <div class=" space-y-5">
            <div class="card">
              <header class=" card-header noborder">
                <h4 class="card-title">Tabel Produk
                </h4>
              </header>
              <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                  <span class=" col-span-8  hidden"></span>
                  <span class="  col-span-4 hidden"></span>
                  <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                      <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                        <thead class=" border-t border-slate-100 dark:border-slate-800">
                          <tr>
                              <th scope="col" class=" table-th ">
                                No
                              </th>
                              <th scope="col" class=" table-th ">
                                Nama Produk
                              </th>
                              <th scope="col" class=" table-th ">
                                Kategori
                              </th>
                              <th scope="col" class=" table-th ">
                                Suhu
                              </th>
                              <th scope="col" class=" table-th ">
                                Harga
                              </th>
                              <th scope="col" class=" table-th ">
                                Foto
                              </th>
                              <th scope="col" class=" table-th ">
                                Aksi
                              </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                            @foreach($product as $item)
                            <tr>
                              <td class="table-td">{{ $loop->iteration }}</td>
                              <td class="table-td ">{{ $item['name'] }}</td>
                              <td class="table-td ">{{ $item['category'] }}</td>
                              <td class="table-td ">
                                <div>
                                  {{ $item['suhu'] }}
                                </div>
                              </td>
                              <td class="table-td ">{{ $item['price'] }}</td>
                              <td class="table-td "><img src="{{Storage::url('images/produk/'.$item->foto)}}"style="width:150px" class="img-thumbnail">
                               </td>
                             <td class="table-td ">
                                <div>
                                  <div class="relative">
                                    <div class="dropdown relative">
                                      <button
                                        class="text-xl text-center block w-full "
                                        type="button"
                                        id="tableDropdownMenuButton{{$item['id']}}"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                      </button>
                                      <ul class=" dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                          shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                        <li>
                                          <a
                                            href="#"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                              dark:hover:text-white">
                                            View</a>
                                        </li>
                                        <li>
                                          <a
                                            href="{{ route('product.edit', $item->id) }}"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                              dark:hover:text-white">
                                            Edit</a>
                                        </li>
                                        <li>
                                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();"
                                            class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('product.destroy', $item->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    @push('scripts')
        <script type="module">
            // data table validation
            $("#data-table, .data-table").DataTable({
                dom: "<'grid grid-cols-12 gap-5 px-6 mt-6'<'col-span-4'l><'col-span-8 flex justify-end'f><'#pagination.flex items-center'>><'min-w-full't><'flex justify-end items-center'p>",
                paging: true,
                ordering: true,
                info: false,
                searching: true,
                lengthChange: true,
                lengthMenu: [10, 25, 50, 100],
                language: {
                    lengthMenu: "Show _MENU_ entries",
                    paginate: {
                        previous: `<iconify-icon icon="ic:round-keyboard-arrow-left"></iconify-icon>`,
                        next: `<iconify-icon icon="ic:round-keyboard-arrow-right"></iconify-icon>`,
                    },
                    search: "Search:",
                },
            });
        </script>
    @endpush
</x-app-layout>
