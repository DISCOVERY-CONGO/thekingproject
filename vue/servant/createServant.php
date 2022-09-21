<?php
 include __DIR__."/../navs/header.php";
 include __DIR__."/../../sanitalizer/servant.php";
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
              src=""
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="<?= $this->asset('assets/img/login-office-dark.jpeg') ?>"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Ajouter une depense
              </h1>
           <form action="" method="Post">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">nom </span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="ex: Jule" name="nom"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">post nom</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="ex: Kinbangu" name="post_nom"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">telephone</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="ex: Kinbangu" name="phone"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">sexe</span>
                <select name="sexe">
                  
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
              </label>



              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" name="servant"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                
              >
                Ajouter un servant
              </button>

              <hr class="my-8" />

</form>
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <?php include __DIR__."/../navs/footer.php"; ?>
