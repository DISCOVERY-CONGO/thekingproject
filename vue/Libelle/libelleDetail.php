<?php include __DIR__."/../navs/header.php"; ?>
        <div class="flex items-center justify-center min-h-screen bg-gray-100" id="libelle">
            <div class="w-3/5 bg-white shadow-lg">
                <div class="flex justify-between p-4">
                    <div>
                        <h1 class="text-3xl italic font-extrabold tracking-widest text-indigo-500">The king pro</h1>
                        <p class="text-base"></p>
                    </div>
                 
                </div>
                <div class="w-full h-0.5 bg-indigo-500"></div>
                <div class="flex justify-between p-4">
                    <div>
                        <h6 class="font-bold">Date: <span class="text-sm font-medium"> <?= $data[0]['created_at'] ?></span></h6>
                         </div>
                    <div class="w-40">
                        <address class="text-sm">
                            <span class="font-bold"> facturé à: </span>
                             <?= $data[0]['client'] ?>
                            
                        </address>
                    </div>
                    <div class="w-40">
                        <address class="text-sm">
                            <span class="font-bold">Table : </span>
                            <?= $data[0]['tname'] ?>
                        </address>
                    </div>
                    <div></div>
                </div>
                <div class="flex justify-center p-4">
                    <div class="border-b border-gray-200 shadow">
                        <table class="">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        #
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        produit
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        Quantités
                                    </th>
                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                        prix
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                            
                            <?php foreach($data as $data){ ?>
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                        <?= $data['nom'] ?>    
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500"><?= $data['qty'] ?></div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                    <?= $data['prix'] ?>
                                    </td>
                                   
                                </tr>
                              <?php } ?> 
  
                             
                                <!--end tr-->
                                <tr class="text-white bg-gray-800">
                                    <th colspan="3"></th>
                                    <td class="text-sm font-bold"><b>Total</b></td>
                                    <td class="text-sm font-bold"><b><?= $data['prix_total'] ?></b></td>
                                </tr>
                                <!--end tr-->

                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="w-full h-0.5 bg-indigo-500"></div>

                

            </div>
        </div>

        <div class="w-full ">
                    <div class="flex items-center justify-center">
                        Thank you very much for doing business with us.
                    </div>
                    <div class="flex items-end justify-end space-x-3">
                        <button class="px-4 py-2 text-sm text-green-600 bg-green-100" onclick="printFunction()">Print</button>
                        <button class="px-4 py-2 text-sm text-blue-600 bg-blue-100">Save</button>
                        <button class="px-4 py-2 text-sm text-red-600 bg-red-100">Cancel</button>
                    </div>
                </div>
        <script>
      function printFunction() {
            var divContents = document.getElementById("libelle").innerHTML;
            var prnt = window.open('', '', '');
             prnt .document.write(divContents);
            prnt .document.close();
            prnt .print();
}
    </script>
    </body>

</html>