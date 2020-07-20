$(function(){
    $('#delete').click(function(){
        return confirm('Yakin Mau Di Hapus?');
        
    });
    $('.buttonHref').click(function(){
        val = $('#isi').val();
        $('#isi').val(val+'<a href="#"></a>');
    });
    $('.tampilUbah').on('click',function() {
        const path = window.location.origin+"/public/";
        const id = $(this).data('id');
       $.ajax({

           url: ''+path+'Admin/getUbah',
           data: {id : id},
           method: 'post',
           dataType: 'json',
           success: function(data){
               $('#judulUbah').val(data.judul);
               $('#tagUbah').val(data.tag);
               $('#keteranganUbah').val(data.keterangan);
               $('#isiUbah').val(data.isi);
               $('#idUbah').val(data.id);   
               $('#namaGambar').val(data.gambar);   
           }
       });
    });
});