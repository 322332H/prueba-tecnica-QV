<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IzyAcademy</title>
  <link rel="icon" href="recursos/logo.png">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <?php
      include "vista/header.php";
      include "vista/bloqueInformativo.php";
      include "vista/aliados.php";
      include "vista/formulario.php";

      // include "vista/footer.php";
      ?>
    </div>
    <footer>
      <div class="ccn_footer_surround">
        <section class="footer_one">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_contact_widget">
                  <h4>Contáctanos</h4>
                  <br>E-mail : comercial@qvision.us
                  <br> WhatsApp +300 255 02 65
                  <br><a style="color: white" href="/mod/page/view.php?id=2383">Comunícate con nosotros</a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_company_widget">
                  <h4>Categorías de Cursos</h4>
                  <a style="color: white" href="/course/index.php?categoryid=15">Desarrollo</a>
                  <br><a style="color: white" href="/course/index.php?categoryid=16">Metodología de Pruebas</a>
                  <br><a style="color: white" href="/course/index.php?categoryid=19">Pruebas Funcionales</a>
                  <br><a style="color: white" href="/course/index.php?categoryid=21">Pruebas No Funcionales</a>
                  <br><a style="color: white" href="/course/index.php?categoryid=22">DevOps</a>
                  <br><a style="color: white" href="/course/index.php?categoryid=23">Cloud</a>
                  <br><a style="color: white" href="/course/index.php?categoryid=27">Automatización</a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_program_widget">
                  <h4>Certificaciones</h4>
                  <a style="color: white" href="/course/view.php?id=150">Scrum Master</a>
                  <br><a style="color: white" href="/course/view.php?id=149">Scrum Product Owner</a>
                  <br><a style="color: white" href="/course/view.php?id=151">Scrum Developer</a>
                  <br><a style="color: white" href="/course/view.php?id=159">Agile Coach</a>
                  <br><a style="color: white" href="/course/view.php?id=158">Design Thinking</a>
                  <br><a style="color: white" href="/course/view.php?id=157">Kanban</a>
                  <br><a style="color: white" href="/course/view.php?id=162">OKR</a>
                  <br><a style="color: white" href="/course/view.php?id=160">DevOps</a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                <div class="footer_support_widget">
                  <h4>Q-Vision Technologies</h4>
                  <a style="color: white" href="https://qvisiontechnologies.com/fabrica-de-software/">Desarrollo de Software</a>
                  <br><a style="color: white" href="https://qvisiontechnologies.com/aseguramiento-de-calidad/">Aseguramiento de Calidad</a>
                  <br><a style="color: white" href="https://qvisiontechnologies.com/servicios/automatizacion-robotica-inteligente-procesos/">Automatización de Procesos con RPA</a>
                  <br><a style="color: white" href="https://qvisiontechnologies.com/servicios/talento-ti/">Talento TI</a>
                  <br><a style="color: white" href="https://qvisiontechnologies.com/gestion-inteligente-datos/">Gestión Inteligente de Datos</a>

                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                <div class="footer_apps_widget">
                  <h4>Soporte</h4>
                  Si tienes inconvenientes o dudas,
                  contáctanos al correo
                  <a style="color:white" href="/mod/page/view.php?id=2383">izyacademy@qvision.us</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="footer_middle_area p0">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-1 mr25 pb15 pt15">
                <div class="logo-widget">
                  <img class="img-fluid" src="https://izyacademy.com/pluginfile.php/1/theme_edumy/footerlogo1/1706635580/izy_negativo.png" alt="¡Te enseña fácil!" style="height:50px;max-height:none!important;">

                </div>
              </div>
              <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
                <div class="footer_menu_widget">
                  <a style="color:#FFFFFF;" href="https://izyacademy.com/mod/page/view.php?id=3181">Términos y Condiciones</a> -
                  <a style="color:#FFFFFF;" href="https://izyacademy.com/mod/page/view.php?id=3682" target="_blank" rel="noreferrer noopener">Política Tratamiento de Datos</a>

                </div>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 pb15 pt15">
                <div class="footer_social_widget mt15">
                  <ul class="social-icons">
                    <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/izyacademy"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://twitter.com/izy_academy"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                        </svg></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/izy_academy/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.linkedin.com/company/izy-academy"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="footer_bottom_area pt25 pb25">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="copyright-widget text-center">
                  <p id="copyright">Copyright © 2024 IzyAcademy Marca Registrada By Qvision Technologies.</p>
                  <div class="tool_usertours-resettourcontainer"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </footer>
  </div>
</body>

</html>