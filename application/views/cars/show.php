<!DOCTYPE html>
<html>
    <head>
        <title><?php $title;?></title>
        <link rel="stylesheet" type=text/css href="<?php echo base_url()?>assets/css/myStyle.css"> 
    </head>
    <body>
        <table class="header">
            <tr>
                <th><?=lang('car')?></th>
            </tr>
        </table>
        <table class="table-cars">
            <tr><th class="head-title"colspan="2"><?=$title?></th></tr>
            <tr><td><b><?=lang('desc')?></b><?=$item['text']?></td></tr>
            <tr><td><b><?=lang('company')?></b><?=$item['company']?></td></tr>
            <tr><td><b><?=lang('engine')?></b><?=$item['car_engine']?></td></tr>
            <tr><td><b><?=lang('img')?></b></td></tr>
            <tr><td><img class="car-big" src="<?php echo base_url();?>assets/image/<?=$item['title']?>.jpg"></td></tr>
            <tr><td><a href="<?= site_url('cars')?>"><?=lang('back')?></a></td></tr>
        </table>
    </body>
</html>

