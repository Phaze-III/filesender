<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
Asunto: Un invitado comienza a subir archivos

{alternative:plain}

Hola,

la siguiente persona comenzó a cargar ficheros desde tu invitación:

Invitado: {guest.email}
Enlace: {cfg:site_url}?s=upload&vid={guest.token}

La invitación está disponible hasta el {date:guest.expires}. Después de esta fecha será automáticamente eliminada.

Saludos,
{cfg:site_name}

{alternative:html}

<p>
    Hola,
</p>

<p>
    la siguiente persona comenzó a cargar ficheros desde tu invitación:
</p>

<table rules="rows">
    <thead>
        <tr>
            <th colspan="2">Detalles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Invitado</td>
            <td><a href="mailto:{guest.email}">{guest.email}</a></td>
        </tr>
        <tr>
            <td>Enlace</td>
            <td><a href="{cfg:site_url}?s=upload&vid={guest.token}">{cfg:site_url}?s=upload&vid={guest.token}</a></td>
        </tr>
        <tr>
            <td>Váido hasta el</td>
            <td>{date:guest.expires}</td>
        </tr>
    </tbody>
</table>

<p>
    Saludos,<br />
    {cfg:site_name}
</p>