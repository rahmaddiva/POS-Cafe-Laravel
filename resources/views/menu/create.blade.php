<x-app-layout>
    <div class="p-6 max-w-2xl mx-auto bg-white rounded-xl shadow-md my-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Tambah Menu Baru</h2>

        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="nama_menu" class="block mb-2 text-sm font-medium text-gray-700">Nama Menu</label>
                <input type="text" id="nama_menu" name="nama_menu"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-700">Kategori</label>
                <select id="kategori" name="kategori"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" id="harga" name="harga"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>
                <div>
                    <label for="stok" class="block mb-2 text-sm font-medium text-gray-700">Stok</label>
                    <input type="number" id="stok" name="stok"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        required>
                </div>
            </div>

            <div>
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700">Gambar Menu</label>
                <input type="file" id="gambar" name="gambar"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div class="flex justify-end pt-4">
                <a href="{{ route('menu.index') }}"
                    class="px-6 py-2 mr-3 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Batal</a>
                <button type="submit"
                    class="px-6 py-2 font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
