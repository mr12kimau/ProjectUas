<x-app-layout>
    <div class="space-y-8">
        <div>
          <x-breadcrumb :page-title="$pageTitle" />
        </div>

        <div class="card xl:col-span-2">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">Tambahkan Produk Baru</div>
                    </div>
                </header>

                <div class="card-text h-full">
                    <!-- Pastikan action mengarah ke route yang benar dan tambahkan @csrf untuk keamanan -->
                    <form class="space-y-4" action="{{ route('product.update', $product->id) }}" method="POST" id="multipleValidation" enctype="multipart/form-data">
                        @csrf <!-- CSRF Token untuk keamanan -->
                        @method('PUT') <!-- Method spoofing untuk Update -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="input-area">
                                <label for="name" class="form-label">Nama Produk</label>
                                <div class="relative">
                                    <input id="name" type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="Nama Produk" required="required">
                                </div>
                            </div>
                            <div>
                                <label for="suhu" class="form-label">Suhu</label>
                                <select name="suhu" id="suhu" class="select2 form-control w-full mt-2 py-2">
                                    <option value="hot" @if ($product->suhu === 'hot') selected @endif>Panas</option>
                                    <option value="cold" @if ($product->suhu === 'cold') selected @endif>Dingin</option>
                                </select>
                            </div>
                            <div>
                                <label for="category" class="form-label">Kategori</label>
                                <select name="category" id="category" class="select2 form-control w-full mt-2 py-2">
                                    <option value="coffee" @if ($product->category === 'coffee') selected @endif>Kopi</option>
                                    <option value="tea" @if ($product->category === 'tea') selected @endif>Teh</option>
                                    <option value="juice" @if ($product->category === 'juice') selected @endif>Jus</option>
                                    <option value="soft drink" @if ($product->category === 'soft drink') selected @endif>Soft drink</option>
                                </select>
                            </div>
                            <div class="input-area">
                                <label for="price" class="form-label">Harga</label>
                                <div class="relative">
                                    <input id="price" type="text" name="price" class="form-control" value="{{ $product->price }}" placeholder="Harga" required="required">
                                </div>
                            </div>
                            <div class="card-text h-full space-y-6">
                                <div class="input-area">
                                    <div class="filePreview">
                                        <label class="form-label"> Foto
                                            <input type="file" class=" w-full hidden" name="foto">
                                            <span class="w-full h-[40px] file-control flex items-center custom-class">
                                            <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                <span id="placeholder" class="text-slate-400">Choose a file or drop it here...</span>
                                            </span>
                                            <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                            </span>
                                        </label>
                                        <div id="file-preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn flex justify-center btn-dark ml-auto" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@push('scripts')
        @vite(['resources/js/plugins/dropzone.min.js'])
        <script type="module">
            Dropzone.autoDiscover = false;
            $("#myUploader").dropzone({
                url: "/",
                dictDefaultMessage: "",
                addRemoveLinks: true,
            });
        </script>
    @endpush