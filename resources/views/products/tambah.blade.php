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
                    <form class="space-y-4" action="{{ route('product.store') }}" method="POST" id="multipleValidation">
                        @csrf <!-- CSRF Token untuk keamanan -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="input-area">
                                <label for="name" class="form-label">Nama Produk</label>
                                <div class="relative">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Nama Produk" required="required">
                                </div>
                            </div>
                            <div>
                                <label for="suhu" class="form-label">Suhu</label>
                                <select name="suhu" id="suhu" class="select2 form-control w-full mt-2 py-2">
                                    <option value="">Pilih opsi</option>
                                    <option value="hot">Panas</option>
                                    <option value="cold">Dingin</option>
                                </select>
                            </div>
                            <div>
                                <label for="category" class="form-label">Kategory</label>
                                <select name="category" id="category" class="select2 form-control w-full mt-2 py-2">
                                    <option value="">Pilih opsi</option>
                                    <option value="coffee">Kopi</option>
                                    <option value="tea">Teh</option>
                                    <option value="juice">Jus</option>
                                    <option value="soft drink">Soft drink</option>
                                </select>
                            </div>
                            <div class="input-area">
                                <label for="price" class="form-label">Harga</label>
                                <div class="relative">
                                    <input id="price" type="text" name="price" class="form-control" placeholder="Harga" required="required">
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
