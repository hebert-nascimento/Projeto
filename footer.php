
            <!-- MODAL ALTERAR DADOS -->
            <div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUsuarioModalLabel">Alterar Dados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="alterar-dados.php" method="POST" onsubmit="return confirmar()">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        <input name="NVemail" type="email" class="form-control" id="NVemail" placeholder="Seu@email.com.." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                   
                                    <div class="col-sm-10">
                                        <input name="NVnome" type="text" class="form-control" id="NVnome" placeholder="Nome completo.." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        <input name="NVsobrenome" type="text" class="form-control" id="NVsobrenome" placeholder="Sobrenome completo.." required>
                                    </div>
                                </div>
                                <a class="fa fa-link"></a>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        <input name="NVendereco" type="text" class="form-control" id="NVendereco" placeholder="Endereço.." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        <input name="NVbairro" type="text" class="form-control" id="NVbairro" placeholder="Bairro.." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        <input name="NVestado" type="text" class="form-control" id="NVestado" placeholder="Estado.." required>
                                    </div>
                                </div>
                                <a class="fa fa-link"></a>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        <input name="NVcelular" type="text" class="form-control" id="NVcelular" placeholder="Celular.." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-10">
                                        <input name="NVtelefone" type="text" class="form-control" id="NVtelefone" placeholder="Telefone.." required>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="submit" name="CadUser" id="CadUser" value="OK" class="btn btn-outline-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL ALTERAR SENHA -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Alterar Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="altera-senha.php" method="post">
                        <input type="password" name="NVsenha" id="NVsenha" class="form-control" placeholder="Digite a nova senha.." required>
                     <div class="form-group"><hr>
                        <input type="submit" value="Salvar" class="btn btn-outline-success" />
                      </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
            <!-- MODAL DE CADASTRO -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="insert_form" action="cadastrar_usuario.php" method="POST">
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-envelope-square"> Email</label>
                            <input name="email" type="email" class="form-control required" id="email" placeholder="Digite seu E-mail.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-unlock-alt"> Senha</label>
                            <input name="senha" type="password" id="senha" class="form-control required" placeholder="Defina sua Senha.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-lock"> Confirmar Senha</label>
                            <input name="csenha" type="password" class="form-control required" placeholder="Confirmar Senha.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-user"> Nome</label>
                            <input name="nome" type="text" class="form-control required" id="nome" placeholder="Seu Nome.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-address-book"> Sobronome</label>
                            <input name="sobrenome" type="text" class="form-control required" id="sobrenome" placeholder="Seu Sobrenome.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-mobile"> Celular</label>
                            <input name="celular" type="text" class="form-control required" id="celular" placeholder="Numero de Celular.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-phone-square">Telefone</label>
                            <input name="telefone" type="text" class="form-control required" id="numero" placeholder="Numero de Telefone.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-arrows-alt"> Endereço</label>
                            <input name="endereco" type="text" class="form-control required" id="endereço" placeholder="Seu Endereço.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-location-arrow"> Residencial</label>
                            <input name="numero" type="text" class="form-control required" id="residencial" placeholder="Numero Residencial.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-map-pin"> bairro</label>
                            <input name="bairro" type="text" class="form-control required" id="bairro" placeholder="Bairro Onde Mora.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only" class="fa fa-map"> Cidade</label>
                            <input name="cidade" type="text" class="form-control required" id="cidade" placeholder="Sua Cidade.." />
                        </div>
                        <div class="form-group">
                            <label for="sr-only"class="fa fa-globe"> estado</label>
                            <input name="estado" type="text" class="form-control required" id="estado" placeholder="Seu Estado.." />
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type="submit" value="Cadastrar" class="btn btn-outline-success" />
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL DE EXCLUSÃO DE DADOS ADMIN -->
            <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel"></h4>
                  </div>
                  <div class="modal-body">
                    <form action="excluir-usuario.php" method="get">
             
                     <?php echo '<a class="fa fa-exclamation-triangle" style="color: red;" href="excluir-usuario.php"?id=' . $linha['id'] .' >Deseja realmente <strong>excluir</strong> este item? </a>' ?>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" value="sim" class="btn btn-primary">sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- MODAL DE EDIÇÃO DE DADOS ADMIN -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="altera-dados_admin.php" method="POST">
                        <div class="form-group row">
                            
                            <div class="col-sm-10">
                                <input name="NVemail_admin" type="email" class="form-control" id="NVemail_admin" placeholder="Novo@email.com.." required>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-10">
                                <input name="NVnome_admin" type="text" class="form-control" id="NVnome_admin" placeholder="Novo nome.." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input name="NVsobrenome_admin" type="text" class="form-control" id="NVsobrenome_admin" placeholder="Novo sobrenome.." required>
                            </div>
                        </div><hr>
                         <div class="form-group">
                            <input type="submit" value="Salvar" class="btn btn-primary" />
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- MODAL ADMIN -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Administrador</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="verificar_login.php" method="post">
                        <div class="form-group">
                                <input name="email" type="email" class="form-control required email" id="email" placeholder="@Admin.." />
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" id="senha" class="form-control required" placeholder="Senha.." />
                            </div><hr>
                            <div class="form-group">
                                <input type="submit" value="Acessar" class="btn btn-outline-info" />
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- CDN -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    

            <!-- DATABALE -->
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

            <!-- Bootstrap JS -->
            <script src="js/bootstrap.min.js" type="text/javascript"></script> 
            <script type="text/javascript" src="js/bootstrap-notify.min.js"></script>

            <!-- JQuery Validate JS -->
            <script src="js/jquery-validate/jquery.min.js" type="text/javascript"></script>
            <script src="js/jquery-validate/jquery.validate.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/jquery.mask.min.js"></script>
            
            <!-- Page Script -->
            <script src="js/bs.js" type="text/javascript"></script>
            <script src="js/page-javascript.js" type="text/javascript"></script>
          
        </body>
    </html>