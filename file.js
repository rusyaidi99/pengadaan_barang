function konfirmasi_reset() {
    // Mendefinisikan perintah confirm untuk mereset form
    var konfirmasi = confirm('Apakah anda yakin ingin mereset data ini?');
    
    // Mengecek apakah tombol yang diklik OK ata Cancel
    if (konfirmasi == true) {
        // Bila OK, maka nilai true akan dikembalikan sehingga form akan direset
        return true;
    } else {
        // Bila Cancel, maka nilai false akan dikembalikan sehingga form tidak akan direset
        return false;
    }
}

function konfirmasi_hapus() {
    // Mendefinisikan perintah confirm untuk menghapus form
    var konfirmasi = confirm('Apakah anda yakin ingin menghapus data ini?');
    
    // Mengecek apakah tombol yang diklik OK ata Cancel
    if (konfirmasi == true) {
        // Bila OK, maka nilai true akan dikembalikan sehingga form akan dihapus
        return true;
    } else {
        // Bila Cancel, maka nilai false akan dikembalikan sehingga form tidak akan dihapus
        return false;
    }
}

function konfirmasi_nama(){
    document.getElementById('nama').innerHTML = 'Isi Nama dengan Benar';
}
function konfirmasi_kategori(){
    document.getElementById('kategori').innerHTML = 'Pilih salah satu kategorinya';
}
function konfirmasi_tanggal(){
    document.getElementById('tanggal').innerHTML = 'Silahkan Pilih tanggal';
}

function konfirmasi_bulan(){
    document.getElementById('bulan').innerHTML = 'Silahkan Pilih bulan';
}

function konfirmasi_tahun(){
    document.getElementById('tahun').innerHTML = 'Silahkan Pilih tahun';
}


function daftar_barang() {
    // Definisikan name dari form
    form = document.form_barang;
    var sukses = true;

    // Validasi input nama, jika kosong keluarkan alert
    if (form.kelompok.value == '') {
        alert('Pilih Salah Satu Kelompok!');
        sukses = false;
        return false;
    }

    // Validasi input username, jika kosong keluarkan alert
    if (form.spesifikasi.value == '') {
        alert('spesifikasi harus Diisi!');
        sukses = false;
        return false;
    }

     // Validasi input username, jika kosong keluarkan alert
    if (form.jumlah.value == '') {
        alert('Jumlah harus Diisi !');
        sukses = false;
        return false;
    }

    if (form.nama.value == '') {
        alert('Pilih Salah Satu!');
        sukses = false;
        return false;
    }

    if (form.jenis.value == '') {
        alert('Pilih Salah Satu!');
        sukses = false;
        return false;
    }

    if (form.penerima.value == '') {
        alert('Isi nama penerima !');
        sukses = false;
        return false;
    }

    if (form.tanggal.value == '') {
        alert('Isi tanggal !');
        sukses = false;
        return false;
    }

    // Validasi sukses, maka data akan ditampilkan
    if (sukses == true) {
        // Menampilkan yang sudah diinputkan di dalam halaman HTML
        document.getElementById('kelompok').innerHTML = 'Kelompok Barang : ' + form.kelompok.value;
        document.getElementById('spesifikasi').innerHTML = 'Spesifikasi : ' + form.spesifikasi.value;
        document.getElementById('jumlah').innerHTML = 'Jumlah : ' + form.jumlah.value;
        document.getElementById('nama').innerHTML = 'Nama Pengadaan : ' + form.nama.value;
        document.getElementById('jenis').innerHTML = 'Jenis Aset : ' + form.jenis.value;
        document.getElementById('penerima').innerHTML = 'Pejabat Penerima Hasil Pekerjaan (PPHP) : ' + form.penerima.value;
        document.getElementById('tanggal').innerHTML = 'Tanggal : ' + form.tanggal.value;
        
        // Return false digunakan agar tidak berganti halaman
        return false;
    }
}