<x-app-layout>
    <div class="p-6 max-w-2xl mx-auto bg-white rounded-xl shadow-md my-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Edit Meja</h2>

        <form method="POST" action="{{ route('meja.update', $meja) }}" class="space-y-6">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-md mb-4" role="alert">
                    <p class="font-bold">Terjadi kesalahan!</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <label for="nomor_meja" class="block mb-2 text-sm font-medium text-gray-700">Nomor Meja</label>
                <input type="text" id="nomor_meja" name="nomor_meja"
                    value="{{ old('nomor_meja', $meja->nomor_meja) }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('nomor_meja') border-red-500 @enderror"
                    required>
                @error('nomor_meja')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="kapasitas" class="block mb-2 text-sm font-medium text-gray-700">Kapasitas</label>
                <input type="number" id="kapasitas" name="kapasitas" value="{{ old('kapasitas', $meja->kapasitas) }}"
                    min="1"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('kapasitas') border-red-500 @enderror"
                    required>
                @error('kapasitas')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-700">Status</label>
                <select id="status" name="status"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('status') border-red-500 @enderror"
                    required>
                    <option value="Kosong" {{ old('status', $meja->status) == 'Kosong' ? 'selected' : '' }}>Kosong
                    </option>
                    <option value="Digunakan" {{ old('status', $meja->status) == 'Digunakan' ? 'selected' : '' }}>
                        Digunakan
                    </option>
                </select>
                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end pt-4">
                <a href="{{ route('meja.index') }}"
                    class="px-6 py-2 mr-3 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Batal</a>
                <button type="submit"
                    class="px-6 py-2 font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
