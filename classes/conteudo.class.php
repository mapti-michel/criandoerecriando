<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conteudo
 *
 * @author Debug
 */
class conteudo {

    public function telaTop(){
        echo "<div class='navbar navbar-default navbar-static-top'>";
        echo "  <div class='container'>";
        echo "      <div class='navbar-header'>";
        echo "          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "          </button>";
        echo "          <a class='navbar-brand' href='http://www.criandoerecriando.com.br/' style='margin-top: 0px;'>";
        echo "              <img src='img/logoRosto.png' title='' alt='' width='150' height='150'>&nbsp;";
        echo "          </a>";
        echo "          <a class='navbar-brand' href='index.php' style='padding-left: 5%; color: #e5e619;'>";
        echo "              <span style='color: rgba(255, 38, 255, 0.7);'>Crian</span>do</span><br>";//rgba(255, 255, 0, 0.7);
        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>E</span><br>";
        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>Recr</span>iando ";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>P</span>sicopedagogia";
        echo "          </a>";
        echo "          <a class='navbar-brand' href='http://www.criandoerecriando.com.br/' style='padding-left: 38%; font-size: 10px; padding-top: 5%;'>";
        echo "              <p style='color: rgba(0, 0, 0, 0.9);'>";
        echo "                  Consultório de Psicologia e Psicopedagogia";
        echo "              </p>";
        echo "          </a>";
//        echo "          <a class='navbar-brand' href='index.php' style='padding-left: 0px;'>";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>C</span>onsultório<br>";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>D</span>e<br>";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>P</span>sicologia e ";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>P</span>sicopedagogia";
//        echo "          </a>";
        echo "      </div>";
        echo "      <div class='navbar-collapse collapse'>";
        echo "      <ul class='nav navbar-nav'>";
        echo "          <li class='active'><a href='http://www.criandoerecriando.com.br/'>Home</a></li>";
//        echo "          <li class='dropdown'>";
//        echo "              <a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='0' data-close-others='false'>Institucional <span class='icon-angle-down'></span></a>";
//        echo "                  <ul class='dropdown-menu'>";
//        echo "                      <li><a href='projeto/'>Sobre o projeto</a></li>";
//        echo "                      <li><a href='servicos/'>Nossos Serviços</a></li>";
//        echo "                      <li><a href='dicas/'>Dicas de saúde</a></li>";
//        echo "                  </ul>";
//        echo "          </li>";
        echo "          <li><a href='consultorio/'>Consultório</a></li>";
        echo "          <li><a href='especialidades/'>Especialidades</a></li>";
        echo "          <li><a href='profissionais/'>Profissionais</a></li>";
        echo "          <li><a href='contato/'>Contato</a></li>";
        echo "      </ul>";
        echo "      </div>";
        echo "  </div>";
        echo "</div>";
        
        
    }

    public function telaTopClass($op){

        switch ($op) {
            case '':
                $home   = "";
                $cons   = "";
                $espec  = "";
                $profis = "";
                $cont   = "";
                break;
            
            case 'consult':
                $home   = "";
                $cons   = " class='active'";
                $espec  = "";
                $profis = "";
                $cont   = "";
                break;
            
            case 'espec':
                $home   = "";
                $cons   = "";
                $espec  = " class='active'";
                $profis = "";
                $cont   = "";
                break;
            
            case 'profis':
                $home   = "";
                $cons   = "";
                $espec  = "";
                $profis = " class='active'";
                $cont   = "";
                break;
            
            case 'cont':
                $home   = "";
                $cons   = "";
                $espec  = "";
                $profis = "";
                $cont   = " class='active'";
                break;
            
            default:
                $home   = " class='active'";
                $cons   = "";
                $espec  = "";
                $profis = "";
                $cont   = "";
                break;
        }

        echo "<div class='navbar navbar-default navbar-static-top'>";
        echo "  <div class='container'>";
        echo "      <div class='navbar-header'>";
        echo "          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "          </button>";
        echo "          <a class='navbar-brand' href='index.php' style='margin-top: 0px;'>";
        echo "              <img src='../img/logoRosto.png' title='' alt='' width='150' height='150'>&nbsp;";
        echo "          </a>";
        echo "          <a class='navbar-brand' href='index.php' style='padding-left: 5%; color: #e5e619;'>";
        echo "              <span style='color: rgba(255, 38, 255, 0.7);'>Crian</span>do</span><br>";//rgba(255, 255, 0, 0.7);
        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>E</span><br>";
        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>Recr</span>iando ";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>P</span>sicopedagogia";
        echo "          </a>";
        echo "          <a class='navbar-brand' href='index.php' style='padding-left: 38%; font-size: 10px; padding-top: 5%;'>";
        echo "              <p style='color: rgba(0, 0, 0, 0.9);'>";
        echo "                  Consultório de Psicologia e Psicopedagogia";
        echo "              </p>";
        echo "          </a>";
//        echo "          <a class='navbar-brand' href='index.php' style='padding-left: 0px;'>";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>C</span>onsultório<br>";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>D</span>e<br>";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>P</span>sicologia e ";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>P</span>sicopedagogia";
//        echo "          </a>";
        echo "      </div>";
        echo "      <div class='navbar-collapse collapse'>";
        echo "      <ul class='nav navbar-nav'>";
        echo "          <li $home><a href='../index.php'>Home</a></li>";
//        echo "          <li class='dropdown' $inst>";
//        echo "              <a href='#' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='0' data-close-others='false'>Institucional <span class='icon-angle-down'></span></a>";
//        echo "                  <ul class='dropdown-menu'>";
//        echo "                      <li><a href='../projeto/'>Sobre o projeto</a></li>";
//        echo "                      <li><a href='../servicos/'>Nossos Serviços</a></li>";
//        echo "                      <li><a href='../dicas/'>Dicas de saúde</a></li>";
//        echo "                  </ul>";
//        echo "          </li>";
        echo "          <li $cons><a href='../consultorio/'>Consultório</a></li>";
        echo "          <li $espec><a href='../especialidades/'>Especialidades</a></li>";
        echo "          <li $profis><a href='../profissionais/'>Profissionais</a></li>";
        echo "          <li $cont><a href='../contato/'>Contato</a></li>";
        echo "      </ul>";
        echo "      </div>";
        echo "  </div>";
        echo "</div>";
        
        
    }

    public function telaTopManutencao(){
        echo "<div class='navbar navbar-default navbar-static-top'>";
        echo "  <div class='container'>";
        echo "      <div class='navbar-header'>";
        echo "          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "          </button>";
        echo "          <a class='navbar-brand' href='index.php' style='margin-top: 0px;'>";
        echo "              <img src='img/logoRosto.png' title='' alt='' width='150' height='150'>&nbsp;";
        echo "          </a>";
        echo "          <a class='navbar-brand' href='index.php' style='padding-left: 5%;'>";
        echo "              <span style='color: rgba(255, 38, 255, 0.7);'>Crian</span>do</span><br>";//rgba(255, 255, 0, 0.7);
        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>E</span><br>";
        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>Re</span>criando ";
//        echo "              <span style='color: rgba(9, 133, 238, 0.9);'>P</span>sicopedagogia";
        echo "          </a>";
        echo "          <a class='navbar-brand' href='index.php' style='padding-left: 41%; font-size: 10px; padding-top: 5%;'>";
        echo "              <p style='color: rgba(0, 0, 0, 0.9);'>";
        echo "                  Consultório de Psicologia e Psicopedagogia";
        echo "              </p>";
        echo "          </a>";
        echo "      </div>";
        echo "      <div class='navbar-collapse collapse'>";
        echo "      <ul class='nav navbar-nav'>";
        echo "          <li class='active'><a href='index.php'>Home</a></li>";
        echo "          <li><a href='contato/'>Contato</a></li>";
        echo "      </ul>";
        echo "      </div>";
        echo "  </div>";
        echo "</div>";
    }


    function topoSlides(){
    echo "<section id='featured' style='background-color: #ffffff;'>";
    echo "<!-- start slider -->";
    echo "  <div class='container'>";
    echo "      <div class='row'>";
    echo "          <div class='col-lg-12'>";
    echo "          <!-- Slider -->";
    echo "              <div id='main-slider' class='flexslider'>";
    echo "                  <ul class='slides'>";
    echo "                      <li>";
    echo "                          <img src='img/slides/slide1CR.jpg' alt='' style='border: 2px; border-color: #58ACFA;' />";
    echo "                          <div class='flex-caption' style='width: 70%; background-color: rgba(9, 133, 238, 0.7);'>";
    echo "                              <!--<h3>Criando e Recriando</h3> -->";
    echo "                              <i>";
    echo "                                  <p style='font-weight: bold;'>";
    echo "                                      ''Crianças são como borboletas ao vento... algumas voam rápido... algumas voam pausadamente, mas todas voam do seu melhor jeito... cada uma é diferente, cada uma é linda e cada uma é especial''";
    echo "                                  </p>";
    echo "                                  <div align='right'><p><b>Alexandre Lemos - APAE</b></p></div>";
    echo "                              </i>";
    echo "                          </div>";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          <img src='img/slides/slide2CR.jpg' alt='' />";
    echo "                          <div class='flex-caption' style='width: 70%; background-color: rgba(9, 133, 238, 0.7);'>";
    echo "                              <i>";
    echo "                                  <p style='font-weight: bold;'>";
    echo "''Eu faço as minhas coisas, e você faz as suas. Eu não estou neste mundo para viver suas expectativas, e você não está neste mundo para viver as minhas, você é você, e eu sou eu, e se por acaso nos encontrarmos será ótimo. Se não, nada se pode fazer.'";
    echo "                                  </p>"; 
    echo "                                  <div align='right'><p><b>Fritz Perls</b></p></div>";
    echo "                              </i>";
    echo "                          </div>";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          <img src='img/slides/slide3CR.jpg' alt='' />";
    echo "                          <div class='flex-caption' style='width: 70%; background-color: rgba(9, 133, 238, 0.7);'>";
    echo "                              <i>";
    echo "                                  <p style='font-weight: bold;'>";
    echo "                                      ''Minha função como terapeuta é ajudar vocês a tomarem coinsciência do aqui e do agora, e frustrar vocês em qualquer tentativa de fugir disto.''";
    echo "                                  </p>"; 
    echo "                                  <div align='right'><p><b>Fritz Perls</b></p></div>";
    echo "                              </i>";
    echo "                          </div>";
    echo "                      </li>";
    echo "                  </ul>";
    echo "              </div>";
    echo "<!-- end slider -->";
    echo "          </div>";
    echo "      </div>";
    echo "  </div>";
    echo "</section>";

    }

    function contentEspecialidades(){

//    echo "<section id='content'>";
//    echo "<div class='container'>";
    echo "    <div class='row'>";
    echo "        <div class='col-lg-6'>";
    echo "          <div class='pricing-box-alt special'>";
    echo "              <div class='pricing-heading'>";
    echo "                  <h4 style='color: rgba(255, 255, 255, 1);'>Atendimentos</h4>";
    echo "              </div>";
    echo "              <div class='pricing-content'>";
    echo "                  <ul style='text-align: justify; font-size: 16px;'>";
    echo "                      <li>";
    echo "                          - Atendimento individual sob orientação em gestalt-terapia";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Psicoterapia com crianças, adolescentes e adultos";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Avaliação psicológica";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Psicodiagnóstico";
    echo "                      </li>";
    echo "                  </ul>";
    echo "              </div>";
    echo "          </div>";
    echo "        </div>";// fecha col-lg-6
    echo "        <div class='col-lg-6'>";
    echo "          <div class='pricing-box-alt special'>";
    echo "              <div class='pricing-heading'>";
    echo "                  <h4 style='color: rgba(255, 255, 255, 1);'>Especialidades em Psicopedagogia</h4>";
    echo "              </div>";
    echo "              <div class='pricing-content'>";
    echo "                  <ul style='text-align: justify; font-size: 16px;'>";
    echo "                      <li>";
    echo "                          - Avaliação Psicopedagógica";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Dificuldades de aprendizagem";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Déficit de Atenção e Hiperatividade (TDAH), Dislexia, Altas habilidades etc";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Habilidades cognitivas (Memória, Atenção, Concentração e Raciocínio Lógico)";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Orientação ao aluno, aos pais e professores";
    echo "                      </li>";
    echo "                  </ul>";
    echo "          </div>";
    echo "        </div>";//fecha o col-lg-5
//    echo "        <div class='col-lg-1'>";
//    echo "          &nbsp;";
//    echo "        </div>";//fecha o col-lg-4
    echo "    </div>";//fecha o row
//    echo "</div>";
//    echo "</section>";


    }

    function contentProf(){

//    echo "<section id='content'>";
    echo "<div class='container'>";
    echo "      <div class='row'>";
    echo "        <div class='col-lg-1'>";
    echo "            &nbsp;";
    echo "        </div>";
    echo "          <div class='col-lg-3' style='text-align: center;'>";
    echo "            <img src='../img/perfil_renata.jpg' alt='Renata Neumann' title='Renata Neumann' width='70%' height='70%'/>";// class='align-left'
    echo "              <h4>Renata Neumann<br>CRP 05/41518</h4>";
    echo "              <h5>Psicóloga e Psicopedagoga</h5>";
    echo "              <p style='text-align: justify;'>";
    echo "                  <b>Formada em Psicologia na Estácio de Sá e pós-graduada em Psicopedagogia</b>, elaborou longos anos de estudo de transtornos baseado aos públicos infantil, infanto-juvenil, juvenil e adultos.";
    echo "              </p>";
    echo "        </div>";
    echo "        <div class='col-lg-1'>";
    echo "            &nbsp;";
    echo "        </div>";
    echo "        <div class='col-lg-1'>";
    echo "            &nbsp;";
    echo "        </div>";
    echo "        <div class='col-lg-3'>";
    echo "            &nbsp;";
//    echo "            <h4>Bruna Tavares - CRP 05/46571</h4>";
//    echo "            <img src='../img/avatar.png' alt='Perfil 2' class='align-left' width='320' height='250' />";
//    echo "            <p style='text-align: justify;'>";
//    echo "              <strong>Psicóloga clínica</strong> formada na UVA, atendendo online e presencial na Psicologia Viva. Estudou Terapia Floral de Bach na instituição de ensino Espaço Flor de Menta & Ibrape TR.";
//    echo "            </p>";
    echo "        </div>";
//    echo "        <div class='col-lg-4'>";
//    echo "            <h4>Perfil 3</h4>";
//    echo "            <img src='../img/avatar.png' alt='Perfil 3' class='align-left' width='320' height='320' />";
//    echo "            <p style='text-align: justify;'>";
//    echo "              <strong>Título</strong>, informações.";
//    echo "            </p>";
 //   echo "        </div>";
    echo "    </div>";
    echo "</div>";
//    echo "</section>";


    }


    function content_dicas(){

        $assunto = filter_input(INPUT_GET, "a");

//    echo "<section id='content'>";
    echo "<div class='container'>";
    echo "  <div class='row'>";
    echo "      <div class='col-md-12'>";
    echo "          <div class='col-md-10' style='font-weight: bold; font-size: 30px;  padding-left: 40px;'>";
    echo "             <i class='fa fa-medkit fa-3x' style='font-size: 40px;'></i>&nbsp;DICAS DE SAÚDE";

    switch ($assunto) {
        case 'covid':
            # code...
            break;
        
        default:
            # code...
            break;
    }



    echo "          </div>";
    echo "          <div class='col-md-2'>";
    echo "              <a href='?a=covid'>";
    echo "                  COVID-19  -  CUIDADOS";
    echo "              </a>";
    echo "          </div>";
    echo "      </div>"; //fecha a div col-md-12
    echo "  </div>";
    echo "</div>";
//    echo "</section>";
    }


    function contentHome(){

//    echo "<section id='content'>";
//    echo "<div class='container'>";
    echo "    <div class='row'>";
    echo "        <div class='col-lg-6'>";
    echo "          <div class='pricing-box-alt special'>";
    echo "              <div class='pricing-heading'>";
    echo "                  <h4 style='color: rgba(255, 255, 255, 1);'>Atendimentos</h4>";
    echo "              </div>";
    echo "              <div class='pricing-content'>";
    echo "                  <ul style='text-align: justify; font-size: 16px;'>";
    echo "                      <li>";
    echo "                          - Atendimento individual sob orientação em gestalt-terapia";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Psicoterapia com crianças, adolescentes e adultos";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Avaliação psicológica";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Psicodiagnóstico";
    echo "                      </li>";
    echo "                  </ul>";
    echo "              </div>";
    echo "          </div>";
    echo "        </div>";// fecha col-lg-6
    echo "        <div class='col-lg-6'>";
    echo "          <div class='pricing-box-alt special'>";
    echo "              <div class='pricing-heading'>";
    echo "                  <h4 style='color: rgba(255, 255, 255, 1);'>Especialidades em Psicopedagogia</h4>";
    echo "              </div>";
    echo "              <div class='pricing-content'>";
    echo "                  <ul style='text-align: justify; font-size: 16px;'>";
    echo "                      <li>";
    echo "                          - Avaliação Psicopedagógica";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Dificuldades de aprendizagem";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Déficit de Atenção e Hiperatividade (TDAH), Dislexia, Altas habilidades etc";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Habilidades cognitivas (Memória, Atenção, Concentração e Raciocínio Lógico)";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          - Orientação ao aluno, aos pais e professores";
    echo "                      </li>";
    echo "                  </ul>";
    echo "          </div>";
    echo "        </div>";//fecha o col-lg-5
//    echo "        <div class='col-lg-1'>";
//    echo "          &nbsp;";
//    echo "        </div>";//fecha o col-lg-4
    echo "    </div>";//fecha o row
//    echo "</div>";
//    echo "</section>";


    }


    function pageFooter($page){

        if($page == "home"){
            $link = " ";
        }else{
            $link = "../";
        }

    echo "<footer style='background-color: rgba(9, 133, 238, 0.9);'>";
    echo "  <div class='container'>";
    echo "      <div class='row'>";
    echo "          <div class='col-lg-3'>";
    echo "              <div class='widget'>";
    echo "                  <h5 class='widgetheading'>Contatos</h5>";
    echo "                  <address>";
    echo "                      <strong>Criando e Recriando - Consultório de Psicologia e Psicopedagogia</strong><br>";
    echo "                      Av. Boulevard 28 de setembro, 44, sala 609 - Vila Isabel<br>";
    echo "                      Rio de Janeiro/RJ <br>";
    echo "                  </address>";
    echo "                  <a href='mailto:contato@criandoerecriando.com.br' alt='Será necessário usar o Microsoft Outlook para enviar.  Ou copie o e-mail para enviar.' title='Será necessário usar o Microsoft Outlook para enviar.  Ou copie o e-mail para enviar.'>";
    echo "                      <i class='fa fa-envelope'></i>&nbsp;&nbsp;&nbsp;contato@criandoerecriando.com.br";
    echo "                  </a>";
    echo "              </div>"; // fecha o widget
    echo "          </div>";// fecha o col-lg-3
    echo "          <div class='col-lg-3'>";
    echo "                <div class='widget'>";
    echo "                    <h5 class='widgetheading'>Páginas</h5>";
    echo "                    <ul class='link-list'>";
    echo "                      <li>";
    echo "                          <a href='".$link."consultorio/'>";
    echo "                              Consultório";
    echo "                          </a>";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          <a href='".$link."especialidades/'>";
    echo "                              Especialidades";
    echo "                          </a>";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          <a href='".$link."profissionais/'>";
    echo "                              Profissionais";
    echo "                          </a>";
    echo "                      </li>";
    echo "                      <li>";
    echo "                          <a href='".$link."contato/'>";
    echo "                              Fale com a gente";
    echo "                          </a>";
    echo "                      </li>";
    echo "                    </ul>";
    echo "                </div>";// fecha widget
    echo "            </div>";// fecha col-lg-3
    echo "            <!--<div class='col-lg-3'>";
    echo "                <div class='widget'>";
    echo "                  <h5 class='widgetheading'>Latest posts</h5>";
    echo "                  <ul class='link-list'>";
    echo "                      <li><a href='#'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>";
    echo "                      <li><a href='#'>Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>";
    echo "                      <li><a href='#'>Natus error sit voluptatem accusantium doloremque</a></li>";
    echo "                  </ul>";
    echo "                </div>";
    echo "            </div>-->";
    echo "            <!--<div class='col-lg-3'>";
    echo "                <div class='widget'>";
    echo "                  <h5 class='widgetheading'>Flickr photostream</h5>";
    echo "                  <div class=flickr_badge'>";
    echo "                      <script type='text/javascript' src='http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03'></script>";
    echo "                  </div>";
    echo "                  <div class='clear'>";
    echo "                  </div>";
    echo "                </div>";
    echo "            </div>-->";
    echo "      </div>"; // fecha a div row
    echo "   </div>";// fecha a div container
    echo "   <div id='sub-footer' style='background-color: rgba(9, 133, 238, 0.9);'>";
    echo "      <div class='container'>";
    echo "        <div class='row'>";
    echo "          <div class='col-lg-6'>";
    echo "              <div class='copyright'>";
    echo "                  <p>";
    echo "                      <span>&copy; Criando e Recriando 2019 All right reserved. By </span><a href='http://www.mapti.com.br' target='_blank'>MAP TI</a>";
    echo "                  </p>";
    echo "              </div>";
    echo "          </div>"; // fecha o col-lg-6
    echo "          <div class='col-lg-6'>";
    echo "              <ul class='social-network'>";
    echo "                  <li>";
    echo "                      <a href='#' data-placement='top' title='Facebook'>";
    echo "                          <i class='fa fa-facebook'>";
    echo "                          </i>";
    echo "                      </a>";
    echo "                  </li>";
    echo "                  <li>";
    echo "                      <a href='#' data-placement='top' title='Twitter'>";
    echo "                          <i class='fa fa-twitter'>";
    echo "                          </i>";
    echo "                      </a>";
    echo "                  </li>";

    echo "                  <li>";
    echo "                      <a href='#' data-placement='top' title='Linkedin'>";
    echo "                          <i class='fa fa-linkedin'>";
    echo "                          </i>";
    echo "                      </a>";
    echo "                  </li>";

    echo "                  <li>";
    echo "                      <a href='#' data-placement='top' title='Pinterest'>";
    echo "                          <i class='fa fa-pinterest'>";
    echo "                          </i>";
    echo "                      </a>";
    echo "                  </li>";

//    echo "                  <li>";
//    echo "                      <a href='#' data-placement='top' title='Google plus'>";
//    echo "                          <i class='fa fa-google-plus'>";
//    echo "                          </i>";
    echo "                      </a>";
    echo "                  </li>";
    echo "              </ul>";
    echo "          </div>"; // fecha o col-lg-6
    echo "        </div>"; // fecha o row
    echo "      </div>"; // fecha o container
    echo "   </div>"; // fecha a div sub-footer
    echo "</footer>";
    echo "</div>";
    echo "<a href='#' class='scrollup'>";
    echo "  <i class='fa fa-angle-up active'></i>";
    echo "</a>";

    }
    
    function pageDownSlides($page){

        if($page == "home"){
            $link = " ";
        }else{
            $link = "../";
        }

//        echo "Link é ".$link;

    echo "<div class='container' style='margin-top: 40px;'>";
    echo "  <div class='row'>";
    echo "      <div class='col-lg-12'>";
    echo "          <div class='row'>";
    echo "              <div class='col-lg-3'>";
    echo "                  <div class='box'>";
    echo "                      <div class='box-gray aligncenter'>";
    echo "                          <h4>Consultório</h4>";
    echo "                          <div class='icon'>";
    echo "                              <i class='fa fa-list-alt fa-3x'></i>";
    echo "                          </div>";
    echo "                          <p>";
    echo "                              Conheça o nosso consultório (Endereço e imagens).";
    echo "                          </p>";
    echo "                      </div>"; // fecha box-gray aligncenter
    echo "                      <div class='box-bottom' style='background-color: rgba(9, 133, 238, 0.7);'>";
    echo "                          <a href='".$link."consultorio/'>Clique aqui</a>";
    echo "                      </div>"; // fecha box-bottom
    echo "                  </div>"; // fecha o box
    echo "              </div>"; // fecha o col-lg-3
    echo "              <div class='col-lg-3'>";
    echo "                  <!-- &nbsp; -->";
    echo "                  <div class='box'>";
    echo "                      <div class='box-gray aligncenter'>";
    echo "                          <h4>Especialidades</h4>";
    echo "                          <div class='icon'>";
    echo "                              <i class='fa fa-user fa-3x'></i>";
    echo "                          </div>";
    echo "                          <p>";
    echo "                              Conheça as nossas especialidades e atendimentos.";
    echo "                          </p>";
    echo "                      </div>"; // fecha o box-gray
    echo "                      <div class='box-bottom' style='background-color: rgba(9, 133, 238, 0.7); div:hover: rgba(9, 133, 238, 0.7)'>";
    echo "                          <a href='".$link."especialidades/'>Clique aqui</a>";
    echo "                      </div>"; // fecha o box-bottom
    echo "                  </div>"; // fecha o box
    echo "              </div>";// fecha o col-lg-3
    echo "              <div class='col-lg-3'>";
    echo "                  <div class='box'>";
    echo "                      <div class='box-gray aligncenter'>";
    echo "                          <h4>Profissionais</h4>";
    echo "                          <div class='icon'>";
    echo "                              <i class='fa fa-edit fa-3x'></i>";
    echo "                          </div>";
    echo "                          <p>";
    echo "                              Conheça os nossos profissionais de saúde e suas especialidades.";
    echo "                          </p>";
    echo "                      </div>"; // fecha o box-gray
    echo "                      <div class='box-bottom' style='background-color: rgba(9, 133, 238, 0.7);'>";
    echo "                          <a href='".$link."profissionais/'>Clique aqui</a>";
    echo "                      </div>"; // fecha o box-bottom
    echo "                  </div>"; // fecha o box
    echo "              </div>"; // fecha o col-lg-3
    echo "              <div class='col-lg-3'>";
    echo "                  <div class='box'>";
    echo "                      <div class='box-gray aligncenter'>";
    echo "                          <h4>Dicas de saúde</h4>";
    echo "                          <div class='icon'>";
    echo "                              <i class='fa fa-medkit fa-3x'></i>";
    echo "                          </div>";
    echo "                          <p>";
    echo "                              Conheça as nossas dicas para a sua saúde.";
    echo "                          </p>";
    echo "                      </div>"; // fecha o box-gray
    echo "                      <div class='box-bottom' style='background-color: rgba(9, 133, 238, 0.7);'>";
    echo "                          <a href='".$link."dicas/'>Clique aqui</a>";
    echo "                      </div>"; // fecha o box-bottom
    echo "                  </div>"; // fecha o box
    echo "              </div>"; // fecha o col-lg-3
    echo "          </div>"; // fecha o row
    echo "      </div>"; // fecha o col-lg-12
    echo "  </div>"; // fecha o row
    echo "</div>"; // fecha o container

    }

    public static function gallery(){

//        echo "<div class='container gal-container'>";
//        echo "  <div class='col-md-3 galitem'>";
//        echo "      <div class='boxitem'>";// style='width: 100px; height: 100px;'

//        for ($i=1; $i<= 14;$i++){
        for ($i=1; $i<= 13;$i++){


        echo "          <a href='#' data-toggle='modal' data-target='#foto".$i."' id='foto'>";
        echo "              <img src='img_cons/img".$i.".jpg' width='15%' height='15%'>"; 
        echo "          </a>";
        echo "          &nbsp;&nbsp;";
        if($i == 6 || $i ==12){
            echo "<br><br>";
        }

        echo "<div class='modal fade' id='foto".$i."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>";
        echo "  <div class='modal-dialog' role='document'>";
        echo "      <div class='modal-content'>";
        echo "          <div class='modal-header'>";
        echo "              <h5 class='modal-title' id='exampleModalLongTitle'>";
        echo "                  Foto ".$i;
        echo "              </h5>";
        echo "              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        echo "                  <span aria-hidden='true'>&times;</span>";
        echo "              </button>";
        echo "          </div>";
        echo "          <div class='modal-body'>";
        echo "              <img src='img_cons/img".$i.".jpg' class='img-thumbnail'>";// width='15%' height='15%'
        echo "          </div>";
        echo "          <div class='modal-footer'>";
        echo "              <button type='button' class='btn btn-secondary' data-dismiss='modal'>";
        echo "                  Fechar";
        echo "              </button>";
//        echo "              <button type='button' class='btn btn-primary'>";
//        echo "                  Save changes";
//        echo "              </button>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
        echo "</div>";

        }

/*
        echo "          <div class='modal fade' id='foto1' tabindex='-1' role='dialog'>";

        echo "              <div class='modal-dialog' role='document'>";

        echo "                  <div class='modal-content'>";

        echo "                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        echo "                          <span aria-hidden='true'>×</span>";
        echo "                      </button>";

        echo "                      <div class='modal-body'>";
        echo "                          <img class='img-responsive' src='img_cons/img1.jpg'>";
        echo "                      </div>";

        echo "                      <div class='col-md-12 description'>";
        echo "                          <h4>";
        echo "                              Sala principal";
        echo "                          </h4>";
        echo "                      </div>";

        echo "                  </div>"; //fecha a tag div content

        echo "              </div>";//fecha a tag div modal-dialog

        echo "         </div>";//fecha a tag div modal-fade

*/

//        echo "      </div>"; // fecha a div box

//        echo "  </div>"; //fecha a div col-md-8 col-sm-12 co-xs-12 gal-item
//        echo "</div>"; // fecha a tag container gal-container



/*
        echo "<div style='margin-top:40px;'>";
        echo "  <h3>";
        echo "      Fotos do nosso consultório. Ambiente agradável econfortável.";
        echo "  </h3>";
        echo "  <div class='demo-gallery'>";
        echo "      <ul id='lightgallery' class='list-unstyled row>";
        echo "          <li class='col-xs-6 col-sm-4 col-md-2 col-lg-2' data-responsive='img_cons/img1.jpg' data-src='img_cons/img1.jpg' data-sub-html='<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>'>";
        echo "              <a href='img_cons/img1.jpg' target='_blank'>";
        echo "                  <img class='img-responsive' src='img_cons/img1.jpg' width='15%' height='15%'>";
        echo "              </a>";
        echo "          </li>";
        echo "      </ul>";
        echo "  </div>";
        echo "</div>";
*/

    }

    function page_covid(){

        echo "";


    }

}
