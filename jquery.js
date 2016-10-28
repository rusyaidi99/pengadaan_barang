$(document).ready(function(){
    $(".welcome").click(function(){
        $(".text").animate({
            height: 'toggle'
            
        });
    });

    $("#add_form").mouseenter(function(){           
        $(this).animate({'width':'250px'},1000);
    });

    $("#add_form").mouseleave(function(){
        $(this).animate({'width':'150px'},1000);
    });

    $("#add_form").click(function(){
        $("#tampil").show();
        $("#pinggir").show();
        $("#add_form").hide();
    });

    $("#isi_nama").focus(function(){
        $(this).animate({'width':'300px'},1000);
        $(this).css("background-color", "#F0F0F0");
    });

    $("#isi_nama").blur(function(){
        $(this).css("background-color", "white");
    });

    $("#isi_kategori").focus(function(){
        $(this).css("background-color", "#F0F0F0");
    });

    $("#isi_kategori").blur(function(){
        $(this).css("background-color", "white");
    });

    $("#isi_tanggal").focus(function(){
        $(this).css("background-color", "white");
    });

    $("#isi_tanggal").blur(function(){
        $(this).css("background-color", "white");
    });

    $("#isi_bulan").focus(function(){
        $(this).css("background-color", "white");
    });

    $("#isi_bulan").blur(function(){
        $(this).css("background-color", "white");
    });

    $("#isi_tahun").focus(function(){
        $(this).css("background-color", "white");
    });

    $("#isi_tahun").blur(function(){
        $(this).css("background-color", "white");
    });


    $("#isi_keterangan").focus(function(){
        $(this).animate({'width':'300px'},1000).animate({'height':'160px'}); //jquery chaining effect
        $(this).css("background-color", "#F0F0F0");
    });

    $("#isi_keterangan").blur(function(){
        $(this).css("background-color", "white");
    });

    $("button.submit").click(function(){
        kelompok=$('#isi_kelompok').val(); //mengambil nilai dari judul
        spesifikasi=$('#isi_spesifikasi').val(); //mengambil nilai dari kategori
        jumlah=$('#isi_jumlah').val(); //mengambil nilai dari judul
        nama=$('#isi_nama').val(); //mengambil nilai dari kategorijudul=$('#isi_nama').val(); //mengambil nilai dari judul
        jenis=$('#isi_jenis').val(); //mengambil nilai dari kategorijudul=$('#isi_nama').val(); //mengambil nilai dari judul
        penerima=$('#isi_penerima').val(); //mengambil nilai dari judul
        tahun=$('#isi_tahun').val(); //mengambil nilai dari kategori
        alert("kelompok barang: " + kelompok + " | Spesifikasi Barang: " + spesifikasi + " | Jumlah Barang: " + jumlah + " | Nama Barang: " + nama + " | Jenis Barang: " + jenis + " | Penerima Barang: " + penerima + " | Tahun Barang: " + tahun); //menampilkan judul & kategori
        // $('#form_artikel')[0].reset(); //untuk mereset form
    });

});
