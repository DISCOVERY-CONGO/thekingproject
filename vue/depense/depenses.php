<?php 
include __DIR__."/../navs/header.php"; 
include __DIR__."/../../sanitalizer/depense.php";
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
            <button
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              type="button" data-modal-toggle="defaultModal"
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
                <span>creér une depense</span>
              </div>
              <span>+</span>
            </button>






<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                              ajouter une depense
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
            <!-- Modal body -->
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
                                <form method="POST">
                                      <label class="block text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">nom de la dépense</span>
                                        <input
                                          class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                          placeholder="ex: transport" name="name"
                                        />
                                      </label>



                                      <!-- You should use a button here, as the anchor is only used for the example  -->
                                      <button
                                        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                      name="save"
                                      >
                                        Ajouter une dépense
                                      </button>
                                  </form>
                              <hr class="my-8" />      
                        </div>
                      </div>
          </div>
            
            <!-- Modal footer -->

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
            
           
            </div>

            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">numero</th>
                      <th class="px-4 py-3">nom</th>
                      
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  <?php foreach($data as $depense){ ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                     
                      <td class="px-4 py-3 text-sm">
                        <?= $depense['id'] + 1?>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        <?= $depense['name']?>
                        </span>
                      </td>
                      
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Previous"
                        >
                          <svg
                            aria-hidden="true"
                            class="w-4 h-4 fill-current"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          1
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          2
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          3
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          4
                        </button>
                      </li>
                      <li>
                        <span class="px-3 py-1">...</span>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          8
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          9
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Next"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
            </div>

            <!-- Charts -->
         
          </div>
        </main>
      </div>
    </div>
    <?php include __DIR__."/../navs/footer.php"; ?>