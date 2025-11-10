<x-app-layout>
    <div class="p-6 max-w-lg mx-auto">
        <h2 class="text-2xl font-bold mb-4">Edit Menu</h2>

        <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-3">
                <label class="block mb-1">Nama Menu</label>
                <input type="text" name="nama_menu" class="w-full border rounded p-2"
                    value="{{ $menu->nama_menu }}" required>
            </div>

            <div class="mb-3">
                <label class="block mb-1">Kategori</label>
                <select name="kategori" class="w-full border rounded p-2" required>
                    <option value="Makanan" {{ $menu->kategori == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="Minuman" {{ $menu->kategori == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="block mb-1">Harga</label>
                <input type="number" name="harga" class="w-full border rounded p-2"
                    value="{{ $menu->harga }}" required>
            </div>

            <div class="mb-3">
                <label class="block mb-1">Stok</label>
                <input type="number" name="stok" class="w-full border rounded p-2"
                    value="{{ $menu->stok }}" required>
            </div>

            <div class="mb-3">
                <label class="block mb-1">Gambar</label>
                @if($menu->gambar)
                    <img src="{{ asset('storage/'.$menu->gambar) }}" alt="" class="w-20 h-20 object-cover mb-2 rounded">
                @endif
                <input type="file" name="gambar" class="w-full border rounded p-2">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
