<div class="top-bar bg-gradient-12" style="color:white !important">
      <div class="container">
            <div class="float-left">
                <span><strong>Portafolio de Productos</strong></span>
            </div>
            <div class="float-right">
                <span><strong><?php echo $this->session->username;?></strong></span>
                <span></span>
                <a href="<?php echo base_url()."index.php"?>/Login/logout/" class="btn btn-top btn-sm btn-warning">Cerrar Sesión</a>
            </div>
            <div class="float-right dropdown">
            </div>
              <div class="float-right user-account-btn dropdown">
                  <div class="dropdown-menu pad0B float-right">
                      <div class="box-sm">
                          <div class="login-box clearfix">
                              <div class="user-img">
                                  <a href="#" title="" class="change-img">Cambiar foto</a>
                                  <img src="assets/image-resources/gravatar.jpg" alt="">
                              </div>
                              <div class="user-info">
                                  <span>
                                      Maria Solis
                                      <i>
                                          Dasarrollador
                                      </i>
                                  </span>
                                  <a href="index.php/perfil/" title="">Perfil</a>
                                  <!-- <a href="#" title="">View notifications</a> -->
                              </div>
                          </div>
                          <div class="divider"></div>
                          <ul class="reset-ul mrg5B">
                              <li>
                                  <a href="" target="_blank">
                                      Ver mi Curriculum VItae
                                      <i class="glyph-icon float-right icon-caret-right"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="index.php/postulacion/">
                                      Mis postulaciones
                                      <i class="glyph-icon float-right icon-caret-right"></i>
                                  </a>
                              </li>
                          </ul>
                          <div class="pad5A button-pane button-pane-alt text-center">
                              <a href="index.php/logout/?outOption=2" class="btn display-block font-normal btn-danger">
                                  <i class="glyph-icon icon-power-off"></i>
                                  Salir
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <!-- .container -->
    </div>