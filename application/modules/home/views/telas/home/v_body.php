<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<div ng-controller='HomeCtrl'>
	<div class="container  text-center">
		<form class="form-horizontal">
			<fieldset>
				<legend>{{descricao}}</legend>
				<div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Descrição App</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="inputDesc" ng-model='descricao' placeholder="Descrição da Aplicação">
					</div>
				</div>
				<div class="form-group">
					<label for="textArea" class="col-lg-2 control-label">Informações da Aplicação</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="textArea" ng-model='infor'></textarea>
						<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="container">
		<h2>{{descricao}}</h2>
		<p>
			{{infor}}
		</p>
	</div>
</div>