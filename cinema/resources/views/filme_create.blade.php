<x-app-layout>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário com Tailwind CSS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Cadastro de Usuário</h2>
      
      <form action="#" method="POST">
        <!-- Nome -->
        <div class="mb-4">
          <label for="name" class="block text-gray-600 font-medium">Nome</label>
          <input type="text" id="name" name="name" required
            class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Seu nome">
        </div>
        
        <!-- E-mail -->
        <div class="mb-4">
          <label for="email" class="block text-gray-600 font-medium">E-mail</label>
          <input type="email" id="email" name="email" required
            class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Seu e-mail">
        </div>
        
        <!-- Senha -->
        <div class="mb-4">
          <label for="password" class="block text-gray-600 font-medium">Senha</label>
          <input type="password" id="password" name="password" required
            class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Sua senha">
        </div>

        <!-- Confirmar Senha -->
        <div class="mb-6">
          <label for="confirm_password" class="block text-gray-600 font-medium">Confirmar Senha</label>
          <input type="password" id="confirm_password" name="confirm_password" required
            class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirme sua senha">
        </div>

        <!-- Botão de Submissão -->
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">Cadastrar</button>
      </form>
    </div>
  </div>

</body>
</html>
</x-app-layout>