

<div class="container-fluid">
    <?php 

        class cardDeck{
            public function __construct($gambar,$hreftag,$tag,$judul,$keterangan,$hrefbutton,$buttontag,$author,$tanggal){
                
                
                echo '
                    <div class="card m-2 shadow" >
                        <img class="card-img-top shadow-sm" src="'.$gambar.'"/>
                            <div class="card-body">
                                <a href="'.BASEURL.'Nav/index/'.$hreftag.'"><small class="text-primary">'.$tag.'</small></a>
                                <h4 class="card-title font-weight-bold">'.$judul.'</h5>
                                <p>'.$keterangan.'</p>
                                <button class="btn bg-primary text-white shadow-sm"><a href="'.BASEURL.'Postingan/index/'.$hrefbutton.'/'.$buttontag.'" class="text-white">check out!</a></button>
                            </div>
                        <div class="card-footer">
                            <p class="blockquote-footer">Author <a href="#About" class="card-link">'.$author.'</a> '.$tanggal.'</p>
                        </div>
                    </div>
                ';
            }
        
        
        }
    
    ?>
        

        <div class="card-deck mt-2">
            <?php $counter1 = 1;?>
            
            <?php foreach($data['postinganHome1'] as $pos):?>
                <?php new cardDeck($pos['gambar'],$pos['tag'],$pos['tag'],$pos['judul'],$pos['keterangan'],$pos['id'],$pos['tag'],$pos['author'],$pos['tanggal']); ?>
                <?php if ($counter1 == 3) :?>
                <?php break; ?>
                <?php endif;?>
                
                <?php $counter1++; ?>
                
            <?php endforeach; ?>
            
        </div>
        <div class="card-deck mt-2">
            <?php $counter2=1?>
            <?php foreach($a = array_reverse($data['postinganHome1']) as $pos):?>
                <?php new cardDeck($pos['gambar'],$pos['tag'],$pos['tag'],$pos['judul'],$pos['keterangan'],$pos['id'],$pos['tag'],$pos['author'],$pos['tanggal']); ?>
                <?php if ($counter2 == 3): ?>
                <?php break;?>
                <?php endif;?>
                <?php $counter2++; ?>
                <?php endforeach; ?>
                
        </div>
</div>