<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <style>
        table {
            width: 500px;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Cadastro de Disciplina - JSON</h1>
    <form name="" action="69-JSON-Processar.php" method="GET">
        <fieldset>
            <legend>Inserir</legend>

            <p>
                Código &ensp;<input type="text" name="txtCodDisciplina">
            </p>
            <p>
                Disciplina &ensp;<input type="text" name="txtDisciplina">
            </p>

            <p>
                <input type="submit" name="btnOperacao" value="Inserir" /> &nbsp;
            </p>

        </fieldset>
        <br>

        <fieldset>
            <legend>Tabela</legend>

            <table>
                <tr>
                    <th>Índice</th>
                    <th>Disciplina</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table>

        </fieldset>
    </form>
</body>

</html>