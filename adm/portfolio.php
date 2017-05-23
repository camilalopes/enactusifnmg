
	<form  class="form-horizontal" enctype="multipart/form-data" method="POST">
					<?php
						require_once '../wideimage/lib/WideImage.php';					
						if(isset($_POST['inserir'])){
							$bean = R::dispense('portfolio');
							if(isset($_FILES['imagem']['tmp_name'])){
								$img = WideImage::load('imagem');
								
								if ($img->getWidth() == $img->getHeight()){
									$img = $img->resize('720', '720');
								}
								else
									$img = $img->resizeCanvas('720', '720', 'center', 'center');
								
								$endereco = '../images/portfolio/' . 'large-' . $_FILES['imagem']['name'];
								$img->saveToFile($endereco);
								$bean->imagem = 'large-' . $_FILES['imagem']['name'];
								R::store($bean);
							}
						}
						if (isset($_GET['operacao']) && $_GET['operacao'] == 'Excluir') {
							$id = $_GET['id'];
							$bean = R::findOne( 'portfolio' ,' id = ? ',[ $id ] );
							R::trash( $bean );
							header("Location: index.php#tab1");
						}		
					?>
						
						<br><h2> Imagem principal</h2>
						<div class="form-group">
						  <label class="col-md-4 control-label" for="imagem">Adicionar imagem ao portfólio</label>
						  <div class="col-md-4">
							<input id="imagem" name="imagem" class="input-file" type="file">
						  </div>
						</div>
						<button id='inserir' name='inserir' class='btn btn-success'>
							Inserir
						</button>
						<button id="cancelar" name="cancelar" class="btn btn-danger">
							Cancelar
						</button>
	</form>
	<table style="background-color: #000; color: #fff;">
		<thead>
			<tr>
				<th>Imagem</th>
				<th> Operação </th>
			</tr>
		</thead>
		<tbody>
			<?php
				$imagensportfolio  = R::findAll( 'portfolio');
				foreach($imagensportfolio as $imagemportfolio){
					echo "<tr>";
					echo "<td><img src='../images/portfolio/{$imagemportfolio->imagem}' width='300'></td>\n";
					echo "<td><a href='?id=$imagemportfolio->id&operacao=Excluir' onclick='return confirm(\"Deseja realmente excluir esta imagem? \")'> Excluir </a>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>