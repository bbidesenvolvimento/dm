<?php
/**
 * ImportCSV Module
 *
 * @author Artem Demchenkov <lunoxot@mail.ru>
 * @version 0.0.3
 *
 * module form
 */

$this->breadcrumbs=array(Yii::t('importcsvModule.importcsv', 'Import')." CSV",);
    ?>
    <div id="importCsvSteps">
        <h1><?php echo Yii::t('importcsvModule.importcsv', 'Importar'); ?> CSV</h1>

        <strong><?php echo Yii::t('importcsvModule.importcsv', 'Arquivo'); ?> :</strong> <span id="importCsvForFile">&nbsp;</span><br/>
        <strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Campos'); ?> :</strong> <span id="importCsvForDelimiter">&nbsp;</span><br/>
        <strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Textos'); ?> :</strong> <span id="importCsvForTextDelimiter">&nbsp;</span><br/>
        <strong><?php echo Yii::t('importcsvModule.importcsv', 'Table'); ?> :</strong> <span id="importCsvForTable">&nbsp;</span><br/><br/>

        <?php echo CHtml::beginForm('','post',array('enctype'=>'multipart/form-data')); ?>
        <?php echo CHtml::hiddenField("fileName", ""); ?>
        <?php echo CHtml::hiddenField("thirdStep", "0"); ?>

        <div id="importCsvFirstStep">
            <div id="importCsvFirstStepResult">
                <div id="loader" style="display:none">Carregando ... <br><img src="images/ajax-loader.gif"></div>
            </div>
        </div>

        <div id="importCsvSelBase">
            <div id="importCsvCamposBase">
            </div>
            <strong><?php echo Yii::t('importcsvModule.importcsv', 'Cliente'); ?></strong> <span class="require">*</span><br/>
            <?php echo CHtml::textField("Cliente", $clientes); ?>
            <br/><br/>

            <strong><?php echo Yii::t('importcsvModule.importcsv', 'Base de Dados'); ?></strong><br/>
            <?php echo CHtml::textField("Base", $bases); ?>
            <br/><br/>

            <strong><?php echo Yii::t('importcsvModule.importcsv', 'Tabela'); ?></strong> <span class="require">*</span><br/>
            <?php echo CHtml::dropDownList('table', '', $tablesArray);?><br/><br/>

            <?php  echo CHtml::button(Yii::t('importcsvModule.importcsv', 'Arquivo CSV'), array("id"=>"importStep1")); ?>
        </div>



        <div id="importCsvSecondStep">
            <div id="importCsvSecondStepResult">
            </div>
            <strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Campos'); ?></strong> <span class="require">*</span><br/>
            <?php echo CHtml::textField("delimiter", $delimiter); ?>
            <br/><br/>

            <strong><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Textos'); ?></strong><br/>
            <?php echo CHtml::textField("textDelimiter", $textDelimiter); ?>
            <br/><br/>

            <strong><?php echo Yii::t('importcsvModule.importcsv', 'Tabela'); ?></strong> <span class="require">*</span><br/>
            <?php echo CHtml::dropDownList('table', '', $tablesArray);?><br/><br/>

            <?php
            echo CHtml::ajaxSubmitButton(Yii::t('importcsvModule.importcsv', 'Próximo'), '', array(
                'update' => '#importCsvSecondStepResult',
                ));
                ?>
            </div>
            <?php echo CHtml::endForm(); ?>

            <div id="importCsvThirdStep">
                <?php echo CHtml::beginForm('','post'); ?>
                <?php echo CHtml::hiddenField("thirdStep", "1"); ?>
                <?php echo CHtml::hiddenField("thirdDelimiter", ""); ?>
                <?php echo CHtml::hiddenField("thirdTextDelimiter", ""); ?>
                <?php echo CHtml::hiddenField("thirdTable", ""); ?>
                <?php echo CHtml::hiddenField("thirdFile", ""); ?>
                <div id="importCsvThirdStepResult">
                    &nbsp;
                </div>
                <div id="importCsvThirdStepColumnsAndForm">
                    <div id="importCsvThirdStepColumns">&nbsp;</div><br/>
                    <?php
                    echo CHtml::ajaxSubmitButton(Yii::t('importcsvModule.importcsv', 'Importar'), '', array(
                        'update' => '#importCsvThirdStepResult',
                        ));
                        ?>
                    </div>
                    <?php echo CHtml::endForm(); ?>
                </div>
                <br/>
                <span id="importCsvBread1">&laquo; <?php echo CHtml::link(Yii::t('importcsvModule.importcsv', 'Voltar'), array("/importcsv"));?></span>
                <span id="importCsvBread2"> &laquo; <a href="javascript:void(0)" id="importCsvA2"><?php echo Yii::t('importcsvModule.importcsv', 'Delimitador de Campos').", ".Yii::t('importcsvModule.importcsv', 'Text Delimiter')." ".Yii::t('importcsvModule.importcsv', 'and')." ".Yii::t('importcsvModule.importcsv', 'Table');?></a></span>
            </div>