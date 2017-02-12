<div class="container">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
			Görev Ekle
			</div>
			<div class="panel-body">
				<form action="<?= $this->url->get('index/create') ?>" method="POST">
					<div class="form-group">
						<label>Görev</label>
						<input type="text" name="gorev" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Kaydet</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="col-md-4"></div>
	
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NO</th>
					<th>GÖREV</th>
					<th>EYLEM</th>
				</tr>
			</thead>
			<body>
				<?php $sayac = 1; ?>
				<?php foreach ($data as $x) { ?>
				<tr>
					<td><?php echo $sayac++; ?></td>
					<td><?= $x->gorev ?></td>
					<td>
						<a href="<?= $this->url->get('index/delete/') ?><?= $x->id ?>" class="btn btn-danger">Sil</a>
					</td>
				</tr>
				<?php } ?>
			</body>
		</table>
	</div>
</div>

