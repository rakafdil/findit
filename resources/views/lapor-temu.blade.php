<x-layout.main-form header="Lapor Temu">
    <x-common.alert type="success"/>
    <x-common.alert type="alert"/>

    <x-layout.form action="{{ route('lapor-temu.submit') }}">
        <div class="flex flex-col justify-center items-center self-center gap-4">
            <h1 class="text-4xl text-center">FORM LAPOR BARANG HILANG</h1>
            <p class="text-base text-center">Pastikan barangmu belum ada di daftar barang temuan sebelum melapor!</p>
        </div>
        <div class="flex flex-col gap-5 w-full py-8">
            <x-common.form-input title="Nama" id="nama"></x-common.form-input>
            <x-common.form-input title="NIM" id="nim" type="number"></x-common.form-input>
            <x-common.form-input title="Email" id="email" type="email"></x-common.form-input>
            <x-common.form-input title="No. Telepon" id="no-telepon" type="number"></x-common.form-input>
            <x-common.form-input title="Nama Barang" id="nama-barang"></x-common.form-input>
            <x-common.form-input title="Kategori" id="kategori"></x-common.form-input>
            <x-common.form-input title="Waktu Kehilangan" id="waktu-kehilangan"
                type="datetime-local"></x-common.form-input>
            <x-common.form-input title="Lokasi Kehilangan" id="lokasi-kehilangan"></x-common.form-input>
            <x-common.form-input title="Deskripsi" id="deskripsi" type="textarea"></x-common.form-input>
            <x-common.form-input title="Bukti Pendukung" id="bukti-pendukung" type="file"
                accept=".jpg,.jpeg,.png,.webp"></x-common.form-input>
            <img id="preview" width="200" />
            <p id="error" style="color:red;"></p>

            <script>
                function previewImage(event) {
                    const file = event.target.files[0];
                    const errorText = document.getElementById('error');
                    const preview = document.getElementById('preview');

                    if (!file) return;

                    const allowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/webp'];

                    if (!allowedTypes.includes(file.type)) {
                        errorText.textContent = 'Format harus JPG, PNG, atau WEBP!';
                        preview.src = '';
                        event.target.value = '';
                        return;
                    }

                    errorText.textContent = '';
                    preview.src = URL.createObjectURL(file);
                }
            </script>
        </div>
        <div class="flex flex-row w-full gap-2 justify-end text-base">
            <button type="button"
                class="text-royal border-royal border-2 bg-white rounded-full py-2 px-8 hover:bg-royal hover:text-white"
                onclick="if (window.history.length > 1) { window.location.href='{{ route('dashboard') }}'; }">Cancel</button>
            <button type="submit"
                class="text-white bg-royal hover:bg-white hover:text-royal hover:border-2 hover:border-royal rounded-full py-2 px-10">Submit</button>
        </div>
    </x-layout.form>
</x-layout.main-form>