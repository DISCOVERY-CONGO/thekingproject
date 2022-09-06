<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Windmill Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../public/assets/tailwind.output.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="data:image/jpeg;base64,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"
               alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="data:image/jpeg;base64,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"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Ajouter un libellé
              </h1>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">titre</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="" name="title"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">montant</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="100" name="montant"
                />
              </label>
             

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <a
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                href=""
              >
                créér un client
              </a>

              <hr class="my-8" />

             
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
