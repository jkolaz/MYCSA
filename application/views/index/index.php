<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="formCorreo" id="formCorreo" method="post" action="../home/enviar_email">
            <table>
                <thead>
                    <tr>
                        <th>Formulario de envio de correo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>nombre</td>
                        <td><input type="text" name="name" id="name" value=""/></td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td><input type="text" name="correo" id="correo" value=""/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="enviar" id="enviar" value="enviar"/></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>