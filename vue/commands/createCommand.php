<?php 
include __DIR__."/../navs/header.php";
include __DIR__."/../../sanitalizer/command.php";
global $item_total;
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
            <h4
              class="my-6 text-base font-semibold text-gray-700 dark:text-gray-200"
            >
               
              <select>
                <option selected>filtrez par categorie ...</option>
              </select>
            </h4>
         



           
                  <div class="  grid gap-2 mb-8  md:grid-cols-6 xl:grid-cols-2">
                    <!-- Card -->
                    <div
                      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                    >
                      <table class="w-full whitespace-no-wrap mt-0" id="myProductTable">
                          <thead>
                             <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                             >
                                  <th class="px-4 py-3">nom</th> 
                                  <th class="px-4 py-3">prix</th>
                                  <th class="px-4 py-3">action</th>
                              </tr>
                          </thead>
                        <tbody>
                            <?php
                            if(isset($data['produits'])){
                            foreach($data['produits'] as $product) {?>
                                   <form  method="post">
                                      <input type="hidden" name="action" value="add">
                                      <input type="hidden" name="produit_id" value="<?= $product['id'] ?>">
                                      <input type="hidden" name="command_id" value="<?= $data['command_id'] ?>">
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3"><?= $product['nom'] ?></td>
                                         <td class="px-4 py-3"> <?= $product['prix'] ?></td>
                                        <td class="px-4 py-3"> 
                                           <input type="text" name="quantite" value="1" size="2" />
                                           <input type="submit" value="ajouter " class="btnAddAction" />
                                       </td>
                                     </tr>
                                   </form>
                            <?php  } }?>
                         </tbody>
                    </table>
                </div>
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                        >
                        
                         
                                <table class="w-full text-sm lg:text-base" cellspacing="0">
                                  <thead>
                                      <tr class="h-12 uppercase">
                                          <th class="hidden md:table-cell"></th>
                                          <th class="text-left">produit</th>
                                          <th class="lg:text-right text-left pl-5 lg:pl-0">
                                            <span class="lg:hidden" title="Quantity">Qtd</span>
                                            <span class="hidden lg:inline">Quantité</span>
                                          </th>
                                          <th class="text-right">remove</th>  
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                        if(!empty($data['commandes']))
                                    
                                           foreach($data['commandes'] as $commande) { ?>
                                      
                                      <form method="post">
                                         <input type="hidden" name="action" value="remove">
                                    <tr>
                                          <td class="hidden pb-4 md:table-cell">
                                              <input type="hidden" name="command_id" value="<?= $commande['comId'] ?>">
                                          </td>
                                          <td>
                                            <a href="#">
                                              <p class="mb-2 md:ml-4"><?= $commande['nom'] ?></p>
                                            </a>
                                              </td>
                                          <td class="justify-center md:justify-end md:flex mt-6">
                                            <div class="w-20 h-10">
                                              <div class="relative flex flex-row w-full h-8">
                                                <input type="number" value="<?= $commande['quantite'] ?>" 
                                                class="w-full font-semibold text-center text-gray-700 bg-gray-200 outline-none focus:outline-none hover:text-black focus:text-black" />
                                              </div>
                                            </div>
                                          </td>
                                          <td class="text-sm text-right text-red-600">
                                          <input  type="submit" value="X "/>
                                          </td>
                                          
                                    </tr> 
                                      </form>
                                  <?php
                                $item_total += ($commande["prix"] * $commande["quantite"]);
                                  } ?>
                                  </tbody>
                                </table>
                                <hr class="pb-6 mt-6">
                                <div class="my-4 mt-2 -mx-2 lg:flex">
                                  
                                  <div class="lg:px-2 lg:w-1/2">
                                  
                                    <div class="p-2">
                                  
                                          <div class="flex justify-between pt-4 border-b">
                                            <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                            total
                                            </div>
                                            <div class="lg:px-4 lg:py-2 m-2 lg:text-xs font-bold text-center text-gray-400">
                                            <?= $item_total?> fc
                                            </div>
                                          </div>

                                </div>
                              </div>
                            </div>
                         

                        </div>
                    
                  </div>

          
          </div>
        </main>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#search").keyup(function(){
            search_on_table($(this).val());
        });
        function search_on_table(value){
          $("#myProductTable tr").each(function(){
            var  found = 'false';
            $(this).each(function(){
              if($(this).text().toLocaleLowerCase().indexOf(value.toLocaleLowerCase()) >= 0)
              {
                found = 'true';
              }
            });
            if(found == 'true'){
              $(this).show();
            }
            else{
              $(this).hide();
            }
          });
        }
      });
    </script>
    <script src="/public/assets/js/jquery.min.js"></script>
    <?php include __DIR__."/../navs/footer.php"; ?>