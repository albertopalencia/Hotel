<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Item
            </th>
        </tr>
        <tbody>
            <?php foreach ($data as $song){ ?>
                <tr>
                    <td><?php if (isset($song->Id)) echo $song->Id; ?></td>
                    <td><?php if (isset($song->Nombre)) echo $song->Nombre; ?></td>
                   
                </tr>
            <?php } ?>
            </tbody>
    </table>
</body>
</html>
