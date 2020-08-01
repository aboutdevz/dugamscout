$(function(){
    $('#delete').click(function(){
        return confirm('Yakin Mau Di Hapus?');
        
    });
    $('.buttonHref').click(function(){
        val = $('#isi').val();
        $('#isi').val(val+'<a href="#"></a>');
    });
    $('.buttonImg').click(function(){
        val = $('#isi').val();
        $('#isi').val(val+'<div class="card mt-2 mb-2" style="width: 18rem;">       <img src="https://dugamscout.aboutdevz.xyz/public/img/#linkgambar" class="card-img-top" alt="...">      <div class="card-body">     <p class="card-text">#keterangan</p>        </div></div>');
    });
    $('.buttonQuote').click(function(){
        val = $('#isi').val();
        $('#isi').val(val+'<div class="card"><div class="card-header"><p class="text-primary">Quotes Of The Post</p></div><div class="card-body"><blockquote class="blockquote text-center mt-5 p-3" style="background-color:#f2f2f2;">     <p class="mb-0">#isi</p>        <footer class="blockquote-footer">#Author</footer>      </blockquote></div></div>');
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