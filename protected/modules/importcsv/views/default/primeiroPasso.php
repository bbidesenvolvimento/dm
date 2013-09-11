<?php
/**
 * ImportCSV Module
 *
 * @author Artem Demchenkov <lunoxot@mail.ru>
 * @version 0.0.3
 *
 *
 *
 *
 * result of file upload
 */

if($error==1) {
    // first error: Unable to upload file
    echo("<span class='importCsvError'>".Yii::t('importcsvModule.importcsv', 'Erro').": ".Yii::t('importcsvModule.importcsv', 'Falha no UPLOAD')."</span>");
}
elseif ($error==2) {
    // second error: Download file is not a .csv
    echo("<span class='importCsvError'>".Yii::t('importcsvModule.importcsv', 'Erro').": ".Yii::t('importcsvModule.importcsv', 'Arquivo não é um  .csv')."</span>");
}
elseif ($error==0) {
    // No errors. Going to second step
    ?>
    <script type="text/javascript">
        window.parent.toSecondStep("<?php echo $uploadfile;?>", "<?php echo $delimiterFromFile;?>", "<?php echo $tableFromFile;?>", '<?php echo $textDelimiterFromFile;?>');
    </script>
    <?php } ?>