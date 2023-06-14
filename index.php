<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética</title>
</head>

<body>
    <h1>Unidades Federativas do Brasil</h1>

    <table>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade Federativa</th>
                <th>Abreviação</th>
                <th>Sede de Governo</th>
                <th>Área(km²)</th>
                <th>População(2014) </th>
                <th>Densidade(2005)</th>
                <th>PIB(2015)</th>
                <th>(%Total)(2015)</th>
                <th>PIB per capita(R$)(2015)</th>
                <th>IDH(2010)</th>
                <th>Alfabetização(2016)</th>
                <th>Mortalidade Infantil(2016)</th>
                <th>Expectativa de Vida(2016)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $UFS = array(
                'AC' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre">',
                    'unidadefederativa' => 'Acre',
                    'abreviacao' => 'AC',
                    'sededogoverno' => 'Rio Branco',
                    'area' => number_format(164122.2, 2, ',', ' '),
                    'populacao' => number_format(795145, 0, '', '. '),
                    'densidade' => number_format(4.30, 2, ','),
                    'pib' => number_format(13622000, 0, ' ', ' '),
                    'total' => number_format(0.2, 1, ','),
                    'pibpercapita' => number_format(16953.46, 2, ',', ' '),
                    'idh' => number_format(0.663, 3, ','),
                    'alfabetizacao' => number_format(86.9, 1, ',') . '%',
                    'mortalidadeinfantil' => number_format(17.0, 1, ',') . '&#8240;',
                    'expectativadvida' => number_format(73.9, 1, ',') . 'anos'

                )
            )
            ?>
        </tbody>

    </table>
</body>

</html>