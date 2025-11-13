<x-app-layout>
    <div class="p-6 max-w-2xl mx-auto bg-white rounded-xl shadow-md my-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Menu</h2>

        <form action="{{ route('menu.update', $menu) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="nama_menu" class="block mb-2 text-sm font-medium text-gray-700">Nama Menu</label>
                <input type="text" id="nama_menu" name="nama_menu"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    value="{{ $menu->nama_menu }}" required>
            </div>

            <div>
                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-700">Kategori</label>
                <select id="kategori" name="kategori"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
                    <option value="Makanan" {{ $menu->kategori == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="Minuman" {{ $menu->kategori == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" id="harga" name="harga"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $menu->harga }}" required>
                </div>
                <div>
                    <label for="stok" class="block mb-2 text-sm font-medium text-gray-700">Stok</label>
                    <input type="number" id="stok" name="stok"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        value="{{ $menu->stok }}" required>
                </div>
            </div>

            <div>
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700">Gambar Menu</label>
                @if ($menu->gambar)
                    <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama_menu }}"
                        class="w-24 h-24 object-cover mb-2 rounded-lg shadow-sm">
                @endif
                <input type="file" id="gambar" name="gambar"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div class="flex justify-end pt-4">
                <a href="{{ route('menu.index') }}"
                    class="px-6 py-2 mr-3 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Batal</a>
                <button type="submit"
                    class="px-6 py-2 font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
