<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Document
        </title>
        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri();?>/assets/css/style2.css" rel="stylesheet"/>
        <!-- Scrollbar Custom CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img alt="" src="assets/persona.jpeg"/>
                </div>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a aria-expanded="false" data-toggle="collapse" href="#homeSubmenu">
                            ACERCA DE MI
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            EXPERIENCIA
                        </a>
                    </li>
                    <li>
                        <a aria-expanded="false" data-toggle="collapse" href="#pageSubmenu">
                            EDUCACIÓN
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            HABILIDADES
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            CONTACTO
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Page Content -->
            <div id="content">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <button class="btn btn-info" id="sidebarCollapse" type="button">
                                <i class="fas fa-align-left">
                                </i>
                                <span>
                                    Toggle Sidebar
                                </span>
                            </button>
                        </div>
                    </nav>
                    <!-- We'll fill this with dummy content -->
                    <!-- Acerca de mi -->
                    <section id="about">
                        <h1>
                            VANESSA GALLEGUILLOS
                        </h1>
                        <p>
                            CALLE SIEMPRE VIVA 1857 | +56 12345678 | vanessagalleguillos@gmail.com
                        </p>
                        <br/>
                        <br/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, in, dolores. Dolore sed, praesentium quo beatae animi porro eum est asperiores non similique explicabo quia, eligendi labore earum! Ab, veniam similique labore velit magnam neque dignissimos ipsam nostrum temporibus tempora voluptas eligendi explicabo nemo magni, ex ipsum. Vitae, possimus fugiat.
                        </p>
                        <br/>
                        <br/>
                        iconos RRSS
                        <br/>
                        <br/>
                        <br/>
                        <div id="linea">
                        </div>
                    </section>
                    <!--Experiencia -->
                    <section id="experience">
                        <br/>
                        <br/>
                        <h1>
                            EXPERIENCIA
                        </h1>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    DESAFIO LATAM.
                                </h5>
                                <p>
                                    Front-End developer
                                </p>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <p>
                                    2017-2018
                                </p>
                            </div>
                        </div>
                        <br/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, in, dolores. Dolore sed, praesentium quo beatae animi porro eum est asperiores non similique explicabo quia, eligendi labore earum! Ab, veniam similique labore velit magnam neque dignissimos ipsam nostrum temporibus tempora voluptas eligendi explicabo nemo magni, ex ipsum. Vitae, possimus fugiat.
                        </p>
                        <br/>
                        <br/>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    RETAILADD.
                                </h5>
                                <p>
                                    UX/UI Designer
                                </p>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <p>
                                    2015-2017
                                </p>
                            </div>
                        </div>
                        <br/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, in, dolores. Dolore sed, praesentium quo beatae animi porro eum est asperiores non similique explicabo quia, eligendi labore earum! Ab, veniam similique labore velit magnam neque dignissimos ipsam nostrum temporibus tempora voluptas eligendi explicabo nemo magni, ex ipsum. Vitae, possimus fugiat.
                        </p>
                        <br/>
                        <br/>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    CAFETERÍA HAIPE.
                                </h5>
                                <p>
                                    Barista
                                </p>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <p>
                                    2013-2015
                                </p>
                            </div>
                        </div>
                        <br/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, in, dolores. Dolore sed, praesentium quo beatae animi porro eum est asperiores non similique explicabo quia, eligendi labore earum! Ab, veniam similique labore velit magnam neque dignissimos ipsam nostrum temporibus tempora voluptas eligendi explicabo nemo magni, ex ipsum. Vitae, possimus fugiat.
                        </p>
                        <br/>
                        <br/>
                        <div id="linea">
                        </div>
                    </section>
                    <!--Educación -->
                    <section id="education">
                        <br/>
                        <br/>
                        <h1>
                            EDUCACIÓN
                        </h1>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    DESAFÍO LATAM
                                </h5>
                                <p>
                                    Front-End
                                </p>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <p>
                                    2017
                                </p>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    UX/UI ONLINE UNIVERSITY
                                </h5>
                                <p>
                                    UX/UI
                                </p>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <p>
                                    2015-2016
                                </p>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    UDDLA
                                </h5>
                                <p>
                                    Diseñador gráfico
                                </p>
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <p>
                                    2010-2015
                                </p>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div id="linea">
                        </div>
                    </section>
                    <!-- Habilidades -->
                    <section id="skills">
                        <br/>
                        <br/>
                        <h5>
                            LENGUAJES DE PROGRAMACIÓN
                        </h5>
                        <p>
                            JavaScript, PHP
                        </p>
                        <h5>
                            HERRAMIENTAS
                        </h5>
                        <p>
                            Wordpress,JQuery,Photoshop, Sketch, Illustrator
                        </p>
                        <br/>
                        <br/>
                        <div id="linea">
                        </div>
                    </section>
                    <!-- Contacto -->
                    <section id="contact">
                        <br/>
                        <br/>
                        <h1>
                            CONTACTO
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nulla sint quaerat rem aut neque magni, obcaecati possimus explicabo repudiandae.
                        </p>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">
                                    Nombre
                                </label>
                                <input class="form-control" id="" placeholder="nombre.." type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Correo
                                </label>
                                <input class="form-control" id="" placeholder="correo..." type="email">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="">
                                    Mensaje
                                </label>
                                <textarea class="form-control" id="" rows="3">
                                </textarea>
                            </div>
                            <button class="btn btn-info mb-2" type="submit">
                                Enviar
                            </button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
        </script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
        </script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/script.js">
        </script>
    </body>
</html>




