<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-1 md:grid-cols-2  gap-6 lg:gap-8">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Inventaris / Detail Barang') }}
                </h2>
                <p>Management Inventaris Barang</p>
            </div>
            <div class="text-right">
                <a href="/inventaris/kategori" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <div class="ms-2">Kategori Barang</div>
                </a>
                <a href="/inventaris/barang" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150 mt-2" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <div class="ms-2">Barang</div>
                </a>
                <a href="/inventaris/detail_barang" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                    <div class="ms-2">Detail Barang</div>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5 relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @endif
            <div class="grid grid-cols-1 md:grid-cols-3  gap-6 lg:gap-8 ">
            <!-- Form Tambah/Edit Detail Barang -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @if(isset($detailBarangEdit))
                        <form action="{{ route('detail_barang.update', $detailBarangEdit->id) }}" method="POST" class="p-6">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="id_barang" class="block text-gray-700 text-sm font-bold mb-2">Barang:</label>
                                <select name="id_barang" id="id_barang" class="form-input rounded-md shadow-sm mt-1 block w-full" disabled>
                                    @foreach($barang as $b)
                                        <option value="{{ $b->id }}" {{ $detailBarangEdit->id_barang == $b->id ? 'selected' : '' }}>{{ $b->kategori->nama_kategori . ' - ' . $b->merk . ' - ' . $b->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="kode_barang" class="block text-gray-700 text-sm font-bold mb-2">Kode Barang:</label>
                                <input type="text" name="kode_barang" id="kode_barang" value="{{ $detailBarangEdit->kode_barang }}" class="form-input rounded-md shadow-sm mt-1 block w-full" disabled />
                            </div>
                            <div class="mb-4">
                                <label for="status_barang" class="block text-gray-700 text-sm font-bold mb-2">Status Barang:</label>
                                <select name="status_barang" id="status_barang" class="form-input rounded-md shadow-sm mt-1 block w-full">
                                    <option value="B" {{ $detailBarangEdit->status_barang == 'B' ? 'selected' : '' }}>Bagus</option>
                                    <option value="R" {{ $detailBarangEdit->status_barang == 'R' ? 'selected' : '' }}>Rusak</option>
                                    <option value="P" {{ $detailBarangEdit->status_barang == 'P' ? 'selected' : '' }}>Perlu Perbaikan</option>
                                    <option value="D" {{ $detailBarangEdit->status_barang == 'D' ? 'selected' : '' }}>Dalam Perbaikan</option>
                                </select>
                            </div>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                        </form>
                    @else
                        <form action="{{ route('detail_barang.store') }}" method="POST" class="p-6">
                            @csrf
                            <div class="mb-4">
                                <label for="id_barang" class="block text-gray-700 text-sm font-bold mb-2">Barang:</label>
                                <select name="id_barang" id="id_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    @foreach($barang as $b)
                                        <option value="{{ $b->id }}">{{ $b->kategori->nama_kategori . ' - ' . $b->merk . ' - ' . $b->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="status_barang" class="block text-gray-700 text-sm font-bold mb-2">Status Barang:</label>
                                <select name="status_barang" id="status_barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6 ">
                                    <option value="B">Bagus</option>
                                    <option value="R">Rusak</option>
                                    <option value="P">Perlu Perbaikan</option>
                                    <option value="D">Dalam Perbaikan</option>
                                </select>
                            </div>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah</button>
                        </form>
                        <p class="p-5 text-sm text-gray-500">* Kode barang akan tersimpan otomatis dengan format "Kategori/nama barang/tanggal dan timstamp".</p>
                    @endif
                </div>
                
                <!-- Daftar Detail Barang -->
                
                <div class="md:col-span-2 bg-white overflow-y-auto max-h-screen shadow-xl sm:rounded-lg">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Barang</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Barang</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php $i = 0 @endphp
                            @foreach ($detail_barang as $d)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ ++$i }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $d->kode_barang }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $d->barang->nama_barang }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($d->status_barang == 'B')
                                        <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10">
                                        Baru
                                        </span>
                                        @elseif ($d->status_barang == 'R')
                                        <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-700/10">
                                        Rusak
                                        </span>
                                        @elseif ($d->status_barang == 'P')
                                        <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-700/10">
                                        Perlu Perbaikan
                                        </span>
                                        @elseif ($d->status_barang == 'D')
                                        <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                                        Dalam Perbaikan
                                        </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('detail_barang.edit', $d->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-2">Edit</a>
                                        <form action="{{ route('detail_barang.destroy', $d->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
