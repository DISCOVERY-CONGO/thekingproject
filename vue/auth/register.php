<?php 
include __DIR__."/inc.php";
include __DIR__."/../../sanitalizer/user.php";
?>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="public/assets/img/login-office.jpeg"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="<?= $this->asset('img/login-office-dark.jpeg') ?>"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-5xl font-semibold text-gray-700 dark:text-gray-200"
              >
                s'enregistrer
              </h1>
            <form method="post">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">nom</span>
                <input
                name="name"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="kabwe"
                />
              </label>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">prenom</span>
                <input
                name="secondName"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="joel"
                  type="text"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                name="email"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane@gmail.com"
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">mot de passe</span>
                <input
                name="password"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************"
                  type="password"
                />
              </label>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                name="register"
              >
                s'enregistrer
              </button>
              <p
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-red-700 transition-colors duration-150  focus:outline-none focus:shadow-outline-purple"
                name="login"
              >
              <?php if (isset($_SESSION['error'])){
                echo  $_SESSION['error'] ;
                
              }  
               ?>
              </p>
              <hr class="my-8" />

              
              </button>
              
              <p class="mt-1">
                <a
                  class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                  href="login"
                >
                 se connecter
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
