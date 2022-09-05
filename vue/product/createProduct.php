<?php 
include __DIR__."/../navs/header.php"; 
include __DIR__."/../../sanitalizer/produit.php";
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
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIinkk11RM0A_TARGmJndddavBw4oTLLs2QA&usqp=CAU"
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
                Ajouter un produit
              </h1>
          <form method="POST">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">nom du produit</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="ex: simba" name="nom"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">quantité</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="ex: 5" name="quantite"
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">prix</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="ex: 50" name="prix"
                />
              </label>
              <br>
            
  <div class="flex justify-center">
  <div class="mb-3 xl:w-96">
              <select name="categorie" class="form-select form-select-sm
    appearance-none
    block
    w-full
    px-2
    py-1
    text-sm
    font-normal
    text-gray-700
    bg-white bg-clip-padding bg-no-repeat
    border border-solid border-gray-300
    rounded
    transition
    ease-in-out
    m-0
    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example">
      <option selected>choisissez une cat...</option>
  <?php foreach($data as $categorie) { ?>
      <option value="<?= $categorie['nom'] ?>"><?= $categorie['nom'] ?></option>
  <?php } ?>   
    </select>
  </div>
</div>

              <!-- You should use a button here, as the anchor is only used for the example  -->
              <button name="produit" type="submit"
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                
              >
                Ajouter un produit
              </button>

              <hr class="my-8" />

       
          </form>         
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  </body>
</html>
