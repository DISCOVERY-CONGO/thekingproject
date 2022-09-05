<?php 
include __DIR__."/../navs/header.php";
include __DIR__."/../../sanitalizer/client.php";
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
                créer un client
              </h1>
              <form action="" method="Post">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">nom du client</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe" name="nom"
                />
              </label>
             

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button type="submit" name="client"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                
              >
                créér un client
              </button>

              <hr class="my-8" />

             
              </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include __DIR__."/../navs/footer.php"; ?>
