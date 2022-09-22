<?php 
include __DIR__."/../navs/header.php"; 
include __DIR__."/../../sanitalizer/categorie.php";
?>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >

              <!-- ASIDE FOR DESKTOP -->
            
              <?php include __DIR__."/../navs/sidebar.php"; ?>

        <!-- END ASIDE FOR DESKTOP -->

        <!-- Backdrop -->


        <aside
          class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
          x-show="isSideMenuOpen"
          x-transition:enter="transition ease-in-out duration-150"
          x-transition:enter-start="opacity-0 transform -translate-x-20"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition ease-in-out duration-150"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0 transform -translate-x-20"
          @click.away="closeSideMenu"
          @keydown.escape="closeSideMenu"
        >
          <div class="py-4 text-gray-500 dark:text-gray-400">
            <a
              class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
              href="#"
            >
              Windmill
            </a>
            <ul class="mt-6">
              <li class="relative px-6 py-3">
                <span
                  class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"
                ></span>
                <a
                  class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                  href="index.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    ></path>
                  </svg>
                  <span class="ml-4">Dashboard</span>
                </a>
              </li>
            </ul>
            <ul>
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="forms.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                    ></path>
                  </svg>
                  <span class="ml-4">Forms</span>
                </a>
              </li>
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="cards.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                    ></path>
                  </svg>
                  <span class="ml-4">Cards</span>
                </a>
              </li>
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="charts.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                    ></path>
                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                  </svg>
                  <span class="ml-4">Charts</span>
                </a>
              </li>
              
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="modals.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                    ></path>
                  </svg>
                  <span class="ml-4">Clients</span>
                </a>
              </li>
              <li class="relative px-6 py-3">
                <a
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  href="tables.html"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                  </svg>
                  <span class="ml-4">Tables</span>
                </a>
              </li>
              <li class="relative px-6 py-3">
                <button
                  class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                  @click="togglePagesMenu"
                  aria-haspopup="true"
                >
                  <span class="inline-flex items-center">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                      ></path>
                    </svg>
                    <span class="ml-4">Pages</span>
                  </span>
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                  <ul
                    x-transition:enter="transition-all ease-in-out duration-300"
                    x-transition:enter-start="opacity-25 max-h-0"
                    x-transition:enter-end="opacity-100 max-h-xl"
                    x-transition:leave="transition-all ease-in-out duration-300"
                    x-transition:leave-start="opacity-100 max-h-xl"
                    x-transition:leave-end="opacity-0 max-h-0"
                    class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                    aria-label="submenu"
                  >
                    <li
                      class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
                      <a class="w-full" href="pages/login.html">Login</a>
                    </li>
                    <li
                      class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
                      <a class="w-full" href="pages/create-account.html">
                        Create account
                      </a>
                    </li>
                    <li
                      class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
                      <a class="w-full" href="pages/forgot-password.html">
                        Forgot password
                      </a>
                    </li>
                    <li
                      class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
                      <a class="w-full" href="pages/404.html">404</a>
                    </li>
                    <li
                      class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
                      <a class="w-full" href="pages/blank.html">Blank</a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
            <div class="px-6 my-6">
              <button
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
              >
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
              </button>
            </div>
          </div>
        </aside>

        <div class="flex flex-col flex-1 w-full">

        <!-- NAVBAR HEADER -->
        <?php include __DIR__."/../navs/navbar.php"; ?>
        <!-- END NAVBAR HEADER -->

        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Dashboard
            </h2>
            <!-- CTA -->
            <button  data-modal-toggle="defaultModal"
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>créer une categorie</span>
              </div>
              <span> &RightArrow;</span>
            </button>

  <!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                              ajouter une categorie
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
<!--               modal       body -->
<div class="flex items-center p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
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
                créer une categorie
              </h1>
              <form method="Post">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">nom de la categorie</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe" name="nom"
                />
              </label>
             

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button name="categorie" type="submit"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                
              >
                créér une categorie
              </button>

              <hr class="my-8" />

             
              
             
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
    </div>
</div>


            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total clients
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    6389
                  </p>
                </div>
              </div>
              <!-- Card -->
            
            
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
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
                    pas encore payés
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    35
                  </p>
                </div>
              </div>
            </div>

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700  bg-gray-600 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">nom</th>

                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                <?php foreach($data as $categorie){ ?>
                    <tr class="text-gray-700 dark:text-gray-400">

                      <td class="px-4 py-3 text-sm">
                        <?= $categorie['nom'] ?>
                      </td>

                    </tr>
                <?php } ?>
         
                  
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >

                <span class="col-span-2"></span>
                <!-- Pagination -->

            </div>

            <!-- Charts -->
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Charts
            </h2>
            <div class="grid gap-6 mb-8 md:grid-cols-2">
              <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  Revenue
                </h4>
                <canvas id="pie"></canvas>
                <div
                  class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                >
                  <!-- Chart legend -->
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-blue-500 rounded-full"
                    ></span>
                    <span>Shirts</span>
                  </div>
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
                    ></span>
                    <span>Shoes</span>
                  </div>
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                    ></span>
                    <span>Bags</span>
                  </div>
                </div>
              </div>
              <div
                class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                  Traffic
                </h4>
                <canvas id="line"></canvas>
                <div
                  class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                >
                  <!-- Chart legend -->
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-teal-600 rounded-full"
                    ></span>
                    <span>Organic</span>
                  </div>
                  <div class="flex items-center">
                    <span
                      class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                    ></span>
                    <span>Paid</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <?php include __DIR__."/../navs/footer.php"; ?>
