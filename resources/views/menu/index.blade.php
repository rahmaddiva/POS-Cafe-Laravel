<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <style>
            /* Style kustom untuk DataTables agar sesuai dengan Tailwind */
            .dataTables_wrapper .dataTables_length,
            .dataTables_wrapper .dataTables_filter,
            .dataTables_wrapper .dataTables_info,
            .dataTables_wrapper .dataTables_processing,
            .dataTables_wrapper .dataTables_paginate {
                color: #374151;
            }

            .dataTables_wrapper .dataTables_length select {
                border: 1px solid #D1D5DB;
                border-radius: 0.375rem;
                padding: 0.5rem;
                margin: 0 0.5rem;
            }

            .dataTables_wrapper .dataTables_filter input {
                border: 1px solid #D1D5DB;
                border-radius: 0.375rem;
                padding: 0.5rem;
                margin-left: 0.5rem;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 0.5rem 1rem;
                margin: 0 0.125rem;
                border-radius: 0.375rem;
                border: 1px solid transparent;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                background-color: #3B82F6;
                color: white !important;
                border-color: #3B82F6;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                background-color: #F3F4F6;
                border-color: #D1D5DB;
            }
        </style>
    @endpush

    <div class="p-6 lg:p-8 bg-white rounded-xl shadow-md my-10 max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Daftar Menu</h2>
            <a href="{{ route('menu.create') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                + Tambah Menu
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md mb-6" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table id="menu-table" class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Menu</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Kategori</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Gambar</th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($menus as $menu)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $menu->nama_menu }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $menu->kategori }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp
                                {{ number_format($menu->harga, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $menu->stok }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 flex justify-center">
                                @if ($menu->gambar)
                                    <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama_menu }}"
                                        class="w-16 h-16 object-cover rounded-md shadow-sm">
                                @else
                                    <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <div class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('menu.edit', $menu->id) }}"
                                        class="px-3 py-1 text-xs font-medium text-white bg-yellow-500 rounded-md hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST"
                                        class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700"
                                            onclick="return confirm('Yakin hapus menu ini?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-10 text-gray-500">Belum ada data menu.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#menu-table').DataTable();
            });
        </script>
    @endpush

</x-app-layout>
