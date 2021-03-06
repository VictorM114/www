<?php
//3.1.1 - NotwwwDir
//3.1.3 - VirtualHostPortNone'
//3.1.4 - txtTLDdev
$langues = array(
	'langue' => 'Español',
	'locale' => 'español',
	'addVirtual' => 'Añadir un VirtualHost',
	'backHome' => 'Volver a la página de inicio',
	'VirtualSubMenuOn' => 'El elemento <code>VirtualHost sub-menu</code> debe configurarse en (Activado) en el menú del botón derecho de <code>Wamp Settings</code>. Luego vuelve a cargar esta página',
	'UncommentInclude' => 'Descomentar <small>(Suppress #)</small> en la línea <code>#Include conf/extra/httpd-vhosts.conf</code><br>en el archivo %s',
	'FileNotExists' => 'El archivo <code>%s</code> no existe',
	'txtTLDdev' => 'El ServerName %s usa TLD %s, que está monopolizado por los navegadores web. Utilice otro TLD (.test por ejemplo)',
	'FileNotWritable' => 'El archivo <code>%s</code> es de solo lectura',
	'DirNotExists' => '<code>%s</code> no existe o no es un directorio',
	'NotwwwDir' => 'La carpeta <code>%s</code> está reservada para "localhost". Por favor use otra carpeta.',
	'NotCleaned' => 'El archivo <code>%s</code> no se ha limpiado.<br>Quedan ejemplos de VirtualHost como: dummy-host.example.com',
	'NoVirtualHost' => 'No hay VirtualHost definido en <code>%s</code><br>Debe tener al menos el VirtualHost para localhost.',
	'NoFirst' => 'El primer VirtualHost debe ser <code>localhost</code> en el archivo <code>%s</code>',
	'ServerNameInvalid' => 'El ServerName <code>%s</code> no es válido.',
	'LocalIpInvalid' => 'La IP local <code>%s</code> no es válida.',
	'VirtualHostName' => 'Nombre del <code>Virtual Host</code> Sin espacio - Sin guión bajo (_)',
	'VirtualHostFolder' => 'Complete absoluta <code>ruta</code> de la carpeta <code>VirtualHost</code> <i>Ejemplos: C:/wamp/www/projet/ o E:/www/site1/</i> ',
	'VirtualHostIP' => '<code class="option">Si</code> desea utilizar VirtualHost por IP: <code class="option">IP local</code> 127.x.y.z ',
	'VirtualHostPort' => '<code class="option">Si</code> desea utilizar "Puerto de escucha" que no sea el predeterminado <code class="option">Puertos aceptados</code> %s',
	'VirtualHostPortNone' => 'Si desea utilizar un "puerto de escucha" que no sea el predeterminado, debe agregar un puerto de escucha a Apache haciendo clic con el botón derecho en las herramientas ',
	'VirtualAlreadyExist' => 'El ServerName <code>%s</code> ya existe',
	'VirtualIpAlreadyUsed' => 'La IP local <code>%s</code> ya existe',
	'VirtualPortNotExist' => 'El puerto <code>%s</code> no es un "Puerto de escucha" Apache',
	'VirtualPortExist' => 'El puerto <code>%s</code> es el "Puerto de escucha" predeterminado de Apache y no debe mencionarse',
	'VirtualHostExists' => 'VirtualHost ya definido:',
	'Start' => 'Iniciar la creación de VirtualHost (puede tardar un rato...)',
	'GreenErrors' => 'Los errores enmarcados en verde se pueden corregir automáticamente.',
	'Correct' => 'Inicia la corrección automática de errores dentro del panel de bordes verdes.',
	'NoModify' => 'No es posible modificar los archivos <code>httpd-vhosts.conf</code> o <code>hosts</code>',
	'VirtualCreated' => 'Los archivos han sido modificados. Se creó el host virtual <code>%s</code>',
	'CommandMessage' => 'Mensajes desde la consola para actualizar DNS:',
	'However' => 'Puede agregar otro VirtualHost mediante la validación "Añadir un VirtualHost". Sin embargo, para que estos nuevos VirtualHost sean tenidos en cuenta por Apache, debe ejecutar el elemento<br><code>Reiniciar DNS</code><br> haciendo clic con el botón derecho en el icono del menú Herramientas de Wampmanager. <i>(Desgraciadamente, esto no se puede hacer automáticamente)</i>',
	'suppForm' => 'Suprimir el formulario VirtualHost',
	'suppVhost' => 'Suprimir VirtualHost',
	'Required' => 'Obligatorio',
	'Optional' => 'Opcional',
	);
?>