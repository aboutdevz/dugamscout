$(function(){

    $('#delete').click(function(){
        return confirm('Yakin Mau Di Hapus?');
    });

    $('#tampilUbah').on('click',function() {

        const id = $(this).data('id');
       $.ajax({

           url: 'http://localhost/public/Admin/getUbah',
           data: {id : id},
           method: 'post',
           dataType: 'json',
           success: function(data){
               $('#judulUbah').val(data.judul);
               $('#tagUbah').val(data.tag);
               $('#keteranganUbah').val(data.keterangan);
               $('#isiUbah').val(data.isi);
               $('#idUbah').val(data.id);   
           }
       });
    });
});