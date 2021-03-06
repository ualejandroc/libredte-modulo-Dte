<ul class="nav nav-pills pull-right">
    <li>
        <a href="<?=$_base?>/dte/documentos/emitir_masivo" title="Emitir DTE de manera masiva">
            Emitir DTE masivo
        </a>
    </li>
</ul>
<div class="page-header"><h1>Buscar DTE masivo <small><?=$Emisor->getNombre()?></small></h1></div>
<p>Aquí puede buscar documentos emitidos (temporales o reales) emitidos de manera masiva usando el mismo formato del archivo de emisión masiva.</p>
<?php
$f = new \sowerphp\general\View_Helper_Form();
echo $f->begin(['onsubmit'=>'Form.check()']);
echo $f->input([
    'type' => 'file',
    'name' => 'archivo',
    'label' => 'Documentos',
    'check' => 'notempty',
    'help' => 'Archivo CSV, codificación UTF-8, con los documentos que se deben buscar masivamente. <a href="'.$_base.'/dte/archivos/emision_masiva.csv">Ejemplo formato</a>',
]);
echo $f->input([
    'type' => 'select',
    'name' => 'buscar',
    'label' => 'Buscar en',
    'options' => ['Todos (documentos temporales y reales)', 'Sólo documentos temporales', 'Sólo documentos reales'],
]);
echo $f->end('Buscar DTE masivamente');
