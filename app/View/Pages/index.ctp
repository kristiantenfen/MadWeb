<div class="indexview">

    <div class="comprasIndex">

        <div class="dashboard-stat blue">

            <div class="details">
                <div class="desc">									
                    Compras do Mês
                </div>
                <div class="number">
                    <?php echo $this->Number->currency($compra[0]['total'], 'Br'); ?>
                </div>
            </div>
            <a class="more" href="<?php echo $this->Html->url('/compras', true) ?>">
                Ver mais <i class="m-icon-swapright m-icon-white"></i>
            </a>						
        </div>
    </div>

    <div class="vendasIndex">
        <div class="dashboard-stat purple">

            <div class="details">
                <div class="desc">									
                    Vendas do Mês
                </div>
                <div class="number">
                    <?php echo $this->Number->currency($venda[0]['total'], 'Br'); ?>
                </div>
            </div>
            <a class="more" href="<?php echo $this->Html->url('/vendas', true) ?>">
                Ver mais <i class="m-icon-swapright m-icon-white"></i>
            </a>						
        </div>

    </div>

    <div class="custosIndex">
        <div class="dashboard-stat yellow">

            <div class="details">
                <div class="desc">									
                    Custos do Mês
                </div>
                <div class="number">
                    <?php echo $this->Number->currency($custo[0]['total'], 'Br'); ?>
                </div>
            </div>
            <a class="more" href="<?php echo $this->Html->url('/custos', true) ?>">
                Ver mais <i class="m-icon-swapright m-icon-white"></i>
            </a>						
        </div>

    </div>

    <div class="resumoIndex">
        <div class="dashboard-stat green">

            <div class="details">
                <div class="desc">									
                    Resumo do Mês
                </div>
                <div class="number">
                    <?php echo $this->Number->currency($venda[0]['total'] - $compra[0]['total'] - $custo[0]['total'], 'Br'); ?>
                </div>
            </div>
            <a class="more" href="">
                Mais<i class="m-icon-swapright m-icon-white"></i>
            </a>						
        </div>

    </div>

    <div class="chequesIndex">

        <?php foreach ($cheques as $cheque) { ?>

        <a href="<?php echo $this->Html->url('/cheques/view/' . $cheque['Cheque']['id'], false)?>">
            <div class="tile selected bg-red">
                <div class="corner"></div>
                <div class="tile-body">
                    <div class="name">
                        <?php echo $cheque['Cheque']['favorecido'] ?>
                    </div>
                    <br/>
                    
                    <div class="dataas">
                        <?php echo $this->Time->format($cheque['Cheque']['data'], '%d/%m/%Y'); ?>
                    </div>
                </div>
                <div class="tile-object">

                    <div class="number">
                        <?php echo $this->Number->currency($cheque['Cheque']['valor'], 'Br'); ?>
                    </div>
                    <br/><br/>
                </div>
            </div>   
        </a>
            <?php
           
        }
        ?>

    </div>

</div>