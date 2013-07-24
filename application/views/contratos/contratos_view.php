<h1>Contratos CCGG</h1

<?php
$id = array(
              'name'        => 'idEmpleado',
              'id'          => 'idEmpleado',
              'value'       => 'id',
              'maxlength'   => '50',
              'size'        => '40',              
            );


?>

<?php echo form_open('contratos/registro'); ?>

<?php echo form_label('Id del Empleado', 'idEmpleado'); ?>
<?php echo form_input($id); ?>
<br>

<?php echo form_input('fechaContrato','Fecha Contrato');?>
<br>

<?php echo form_input('fechaFiniquito','Fecha Finiquito');?>
<br>

<?php echo form_input('tipoContrato','Tipo Contrato');?>
<br>

<?php echo form_textarea('observaciones','observaciones');?>
<br>

<?php echo form_submit('enviar', 'Registro'); ?>

<?php echo form_close(); ?>