<?php
/* @var $this FotosController */
/* @var $dataProvider CActiveDataProvider */
$usuario = Usuarios::model()->findByPk(Yii::app()->user->id_usuario);
//$categoria = $usuario->edad > 17 ? 'Adultos' : 'Jóvenes';
//$edad = Usuarios::dame_edad($usuario->fecha_nac);
$categoria = Usuarios::dameEdad($usuario->fecha_nac) > 17 ? 'Adultos' : 'Jóvenes';
?>

<?php 
	if (isset($_GET['msj']) && !empty($_GET['msj'])) 
	{
		echo $_GET['msj'];
	} 
?>

				</p>
				<h1>Tus fotograf&iacute;as en la categor&iacute;a "<?php echo $categoria; ?>"</h1>
				<i><b>NOTA:</b> Recuerda que es importante que tus fotografías tengan una ubicación y descripción</i><br><br>
				<?php echo CHtml::link('Subir', Yii::app()->baseUrl."/index.php/fotos/create", array('style'=>"color:#BD5D28;")); ?> m&aacute;s fotograf&iacute;as

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
				)); ?>













