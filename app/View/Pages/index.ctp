<div class="indexview">
    
    <div class="cheques">
        
        <?php 
            foreach ($cheques as $cheque) { 
              
                echo "<div class='alert alert-danger'>
                    <a href='".$this->Html->url('/cheques/view/'.$cheque['Cheque']['id'], false)."' class='alert-link'>".$cheque['Cheque']['favorecido']."
                                              - R$ ".$cheque['Cheque']['valor']."
                                              <span class='datacheque'>".$this->Time->format($cheque['Cheque']['data'], '%d/%m/%Y')."</span>
                                                  </a>
                    </div>";  
                
            }
            ?>
          
    </div>
 
</div>