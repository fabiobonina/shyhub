      <?php

      $cod = $_GET['cod'];
      $resultado = $descricoes->findDesc($cod);


      ?>
	      <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Descrição do Servico <small>Insira os dados</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate method="post" action="" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" name="descricao" rows="10" placeholder="Descrição do Serviço"><?php echo $resultado->descricao; ?></textarea>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="hidden" name="cod" value="<?php echo $cod; ?>" class="form-control col-md-7 col-xs-12" >
                      <input type="hidden" name="oat" value="<?php echo $oatId; ?>" class="form-control col-md-7 col-xs-12">
                      </div>

		                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="javascript:window.history.go(-1)" class="btn btn-primary">Voltar</a>
                          <button type="submit" name="descEdt" class="btn btn-success">Salvar</button>
                        </div>
                      </div>
		                </form>
                  </div>
                </div>
              </div>
            </div>