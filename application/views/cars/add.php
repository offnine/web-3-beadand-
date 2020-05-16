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
            <tr><th class="head-title" colspan="2"><?=lang('add_head')?></th></tr>
            <tr><td style="text-align: center;width: 60%;">
                <?=form_open('cars/add')?>
                    <?= validation_errors()?>
                    <label><?=lang('add_title')?></label><br>
                    <input type="text" name="title"><br>
                    <label><?=lang('desc')?></label><br>
                    <textarea name="text"></textarea><br>
                    <label><?=lang('engine')?></label><br>
                    <input type="text" name="car_engine"><br>
                    <label><?=lang('company')?></label><br>
                    <input type="text" name="company"><br>
                    <input type="submit" name="submit" value="<?=lang('submit')?>"/>
                <?=form_close()?>
                </td>
            </tr>
            <tr><td><a href="<?= site_url('cars')?>"><?=lang('back')?></a></td></tr>
        </table>
    </body>
</html>
