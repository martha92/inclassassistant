<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Load css Files -->
    <link href="./metro/css/metro-bootstrap.css" rel="stylesheet">
    <!--<link href="./metro/css/metro-bootstrap-responsive.css" rel="stylesheet">-->
    <link href="./metro/min/iconFont.min.css" rel="stylesheet">
    <link href="./metro/js/prettify/prettify.css" rel="stylesheet">
    <link href="./css/styleMenu.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="./metro/js/jquery/jquery.min.js"></script>
    <script src="./metro/js/jquery/jquery.widget.min.js"></script>
    <script src="./metro/js/jquery/jquery.mousewheel.js"></script>
    <script src="./metro/js/prettify/prettify.js"></script>

    <title>InClass Assistant</title>
    <script src="./metro/min/metro.min.js"></script>
    <script>
    function changeContent( menuNumber ){
      var elementChanging = $(".ic-main-container__container");
      var content = "";
      switch ( menuNumber ){
        case 1:
        //Llamada a ajax con servicio para enlistar grupos con su id
          content = '<legend>Mis Grupos</legend>'+
                    '<table class="table striped bordered hovered">'+
                      '<tbody>'+
                      '<tr class=""><td><a href="groupSelection.php">Programación y Estructura de Datos</a></td></tr>'+
                      '<tr class=""><td><a href="groupSelection.php">Fundamentos de programación</a></td></tr>'+
                      '<tr class=""><td><a href="groupSelection.php">Programación para dispositivos móviles</a></td></tr>'+
                      '<tr class=""><td><a href="groupSelection.php">Programación avanzada</a></td></tr>'+
                      '</tbody>'+
                    '</table>';
          elementChanging.html(content);
        break;
        case 2:
        break;
        case 3:
          //Llamada a ajax con servicio para enlistar grupos con su id
          content = '<legend>Grupo</legend>'+
                    '<div class="input-control select">'+
                      '<select class="ic-main-container__container__select">'+
                          '<option value="1">-Elegir-</option>'+
                          '<option value="1">Programación y Estructura de Datos</option>'+
                          '<option value="1">Fundamentos de programación</option>'+
                          '<option value="1">Programación para dispositivos móviles</option>'+
                          '<option value="1">Programación avanzada</option>'+
                      '</select>'+
                    '</div>'+
                    '<div class="ic-main-container__container__second-container"></div>'
          elementChanging.html(content);
          $(".ic-main-container__container__select").change(function(){
            //Llamada a ajax que traiga el id de las actividades y su nombre
            //$( this ).val()  así se saca el valor del option del select al que cambió
            content = '<legend style="margin-top: 30px;">Actividades</legend>'+
                    '<table class="table striped bordered hovered">'+
                      '<tbody>'+
                        '<tr class="">'+
                          '<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>'+
                          '<td class="text-center"><a href="#">Modificar</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__open">Abrir Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__close">Cerrar Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__delete">Eliminar</a></td>'+
                        '</tr>'+
                        '<tr class="">'+
                          '<td>Tipos de datos</td>'+
                          '<td class="text-center"><a href="#">Modificar</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__open">Abrir Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__close">Cerrar Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__delete">Eliminar</a></td>'+
                        '</tr>'+
                        '<tr class="">'+
                          '<td>Condicionales</td>'+
                          '<td class="text-center"><a href="#">Modificar</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__open">Abrir Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__close">Cerrar Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__delete">Eliminar</a></td>'+
                        '</tr>'+
                        '<tr class="">'+
                          '<td>Ciclos</td>'+
                          '<td class="text-center"><a href="#">Modificar</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__open">Abrir Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__close">Cerrar Actividad</a></td>'+
                          '<td class="text-center"><a href="#" class="ic-main-container__container__delete">Eliminar</a></td>'+
                        '</tr>'+
                      '</tbody>'+
                    '</table>';
            $(".ic-main-container__container__second-container").html(content);
            $(".ic-main-container__container__open").on('click', function(){
              console.log('sip');
                $.Dialog({
                    overlay: true,
                    shadow: true,
                    flat: true,
                    //icon: '<img src="images/excel2013icon.png">',
                    title: 'Flat window',
                    content: '',
                    padding: 10,
                    onShow: function(_dialog){
                        var content = '<div class="text-center padding20">' +
                            '¿Estás seguro de abrir esta actvidad?' +
                            '</div>' +
                            '<div class="padding20">' +
                            '<button class="place-left button primary">ACEPTAR</button> '+
                            '<button class="place-right button" type="button" onclick="$.Dialog.close()">CANCELAR</button> '+
                            '</div>';
             
                        $.Dialog.title("Confirmación");
                        $.Dialog.content(content);
                        $.Metro.initInputs();
                    }
                });
            });
            $(".ic-main-container__container__close").on('click', function(){
                $.Dialog({
                    overlay: true,
                    shadow: true,
                    flat: true,
                    //icon: '<img src="images/excel2013icon.png">',
                    title: 'Flat window',
                    content: '',
                    padding: 10,
                    onShow: function(_dialog){
                        var content = '<div class="text-center padding20">' +
                            '¿Estás seguro de cerrar esta actvidad?' +
                            '</div>' +
                            '<div class="padding20">' +
                            '<button class="place-left button primary">ACEPTAR</button> '+
                            '<button class="place-right button" type="button" onclick="$.Dialog.close()">CANCELAR</button> '+
                            '</div>';
             
                        $.Dialog.title("Confirmación");
                        $.Dialog.content(content);
                        $.Metro.initInputs();
                    }
                });
            });
            $(".ic-main-container__container__delete").on('click', function(){
                $.Dialog({
                    overlay: true,
                    shadow: true,
                    flat: true,
                    //icon: '<img src="images/excel2013icon.png">',
                    title: 'Flat window',
                    content: '',
                    padding: 10,
                    onShow: function(_dialog){
                        var content = '<div class="text-center padding20">' +
                            '¿Estás seguro de eliminar esta actvidad?' +
                            '</div>' +
                            '<div class="padding20">' +
                            '<button class="place-left button primary">ACEPTAR</button> '+
                            '<button class="place-right button" type="button" onclick="$.Dialog.close()">CANCELAR</button> '+
                            '</div>';
             
                        $.Dialog.title("Confirmación");
                        $.Dialog.content(content);
                        $.Metro.initInputs();
                    }
                });
            });
          });
        break;
        case 4:
        break;
        case 5:
        break;
        case 6:
        break;
        default:

      }
    }
    </script>
</head>
<body class="metro" cz-shortcut-listen="true">
<? include 'header.php'; ?>
<div class="ic-main-container">
    <div class="ic-main-container_left-menu">
      <legend>Menú</legend>
      <ul class="dropdown-menu inverse open keep-open ic-main-container_left-menu__menu-container" data-role="dropdown">
        <li onclick="changeContent(1);"><a href="#"><span class="icon-tree-view on-left on-left-more"></span>Mis grupos</a></li>
        <li class="menu-title"><span class="icon-clipboard-2 on-left on-left-more"></span>Actividades</li>
        <li onclick="changeContent(2);"><a href="#">Registrar Actividad</a></li>
        <li onclick="changeContent(3);"><a href="#">Modificar Actividad</a></li>
        <li class="menu-title"><span class="icon-tree-view on-left on-left-more"></span>Grupos</li>
        <li onclick="changeContent(4);"><a href="#">Registrar Grupo</a></li>
        <li onclick="changeContent(5);"><a href="#">Modificar Grupo</a></li>
        <li class="menu-title"><span class="icon-user on-left on-left-more"></span>Alumno</li>
        <li onclick="changeContent(6);"><a href="#">Registrar Alumno</a></li>
        <li onclick="changeContent(7);"><a href="#">Modificar Alumno</a></li>
        <li class="menu-title"><span class="icon-user-3 on-left on-left-more"></span>Maestros</li>
        <li onclick="changeContent(8);"><a href="#">Registrar Maestro</a></li>
        <li onclick="changeContent(9);"><a href="#">Modificar Maestro</a></li>
        <li class="menu-title">Ver reportes</li>
        <li onclick="changeContent(10);"><a href="#"><span class="icon-user on-left on-left-more"></span>Alumnos</a></li>
        <li onclick="changeContent(11);"><a href="#"><span class="icon-tree-view on-left on-left-more"></span>Grupos</a></li>
    </ul>
    </div>
    <div class="ic-main-container__container">
      <div class="padding20">
        <legend>In Class Assistant</legend>
        BLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget nisi eget lectus volutpat vehicula. Sed eu molestie ex. Sed quis congue lacus, at commodo ante. Etiam eget felis gravida, condimentum lacus ut, tempus metus. Vestibulum ac ullamcorper leo. Nulla a congue nisi. Praesent efficitur bibendum tincidunt.
      </div>
    </div>
</div>
</body>
</html>