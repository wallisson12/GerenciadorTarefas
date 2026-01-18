<html lang="en" class="h-full bg-gray-700">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuarios</title>
    <script src="http://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <h3 class="text-red text-white">Lista Usuarios</h3>

<div class="p-6">
  <div class="overflow-x-auto rounded-lg shadow-lg">
        <table id="tabela_usuarios" class="min-w-full bg-gray-800 text-gray-200 text-sm">
        <thead class="bg-gray-900 text-gray-300 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">Usuário</th>
                    <th class="px-6 py-3 text-left">Tipo</th>
                    <th class="px-6 py-3 text-center">Editar</th>
                    <th class="px-6 py-3 text-center">Excluir</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/src/public/view/usuario/js/Usuario.js"></script>
</body>

</html>