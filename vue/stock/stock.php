<?php include __DIR__."/../navs/header.php"; ?>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >

              <!-- ASIDE FOR DESKTOP -->
            
              <?php include __DIR__."/../navs/sidebar.php"; ?>

        <!-- END ASIDE FOR DESKTOP -->

        <!-- Backdrop -->




        <div class="flex flex-col flex-1 w-full">

        <!-- NAVBAR HEADER -->
        <?php include __DIR__."/../navs/navbar.php"; ?>
        <!-- END NAVBAR HEADER -->

        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              vos rapports du stock
            </h2>
            <!-- CTA -->
       
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
             
            
            
              <!-- Card -->
              <div
                class="flex items-center p-4  rounded-lg shadow-xs dark:bg-gray-800 bg-orange-300 "
              >
                <div
                  class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                   rapport journalier
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    <a href="daily">voir plus</a><span class=" text-cool-gray-700 p-2">+</span>
                  </p>
                </div>
              </div>
              <div
                class="flex items-center p-4  rounded-lg shadow-xs dark:bg-gray-800 bg-green-400"
              >
                <div
                  class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                   rapport hebdomadaire
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    <a href="hebdo">voir plus</a><span class=" text-cool-gray-700 p-2">+</span>
                  </p>
                </div>
              </div>
              <div
                class="flex items-center p-4  rounded-lg shadow-xs dark:bg-gray-800 bg-green-200"
              >
                <div
                  class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                   rapports mensuel
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    <a href="mensuel"  rel="noopener noreferrer">voir plus</a><span class=" text-cool-gray-700 p-2">+</span>
                  </p>
                </div>
              </div>
            </div>

      
          </div>


        </main>
      </div>
    </div>

    <?php include __DIR__."/../navs/footer.php"; ?>
