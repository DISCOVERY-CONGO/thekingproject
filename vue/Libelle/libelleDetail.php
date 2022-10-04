<?php include __DIR__."/../navs/header.php"; ?>
    <?php if($data != null) { ?>
        <div class="  w-3/4 center flex items-center justify-center min-h-screen" id="text">
          
            <div class="  pr-12 bg-white shadow-lg">
                <div class="flex  justify-between p-4">
                    <div>
                        <h1 class="text-3xl italic font-extrabold tracking-widest text-indigo-500">The king pro</h1>
                        <p class="text-base"></p>
                    </div>
                 
                </div>
                <div class="  h-0.5 bg-indigo-500"></div>
                <div class="flex justify-between p-4">
                    <div>
                        <h6 class="font-bold">Date: <span class="text-sm font-medium"> <?= $data[0]['created_at'] ?></span></h6>
                         </div>
                    <div class=" w-2">
                        <address class="text-sm">
                            <span class="font-bold"> facturé à: </span>
                           
                            
                        </address>
                    </div>
                    <div class="w-2">
                        <address class="text-sm">
                            <span class="font-bold">Table : </span>
                            <?= $data[0]['tname'] ?>
                        </address>
                    </div>
                    <div></div>
                </div>
                <div class=" flex justify-center p-4">
                    <div class="border-b border-gray-200 shadow w-5/6">
                        <table class=" w-3/4 h-auto">
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
                                    <?= $data['qty'] * $data['prix']?>
                                    </td>
                                   
                                </tr>
                              <?php } ?> 
  
                             
                                <!--end tr-->
                                <tr class="text-white bg-gray-800">
                                    <th colspan="3"></th>
                                    <td class="text-sm font-bold"><b>Total</b></td>
                                    <td class="text-sm font-bold"><b></b></td>
                                </tr>
                                <!--end tr-->

                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="w-full h-0.5 bg-indigo-500"></div>
            </div>
        
        </div>

        <div class=" w-4/6 ">
   
                    <div class="flex items-end justify-center space-x-3 mb-auto ">
                        <button class="px-4 py-2 text-sm text-green-600 bg-green-100" onclick="generatePDF()">Print</button>
                        <button class="px-4 py-2 text-sm text-blue-600 bg-blue-100">Save</button>
                        <button class="px-4 py-2 text-sm text-red-600 bg-red-100">Cancel</button>
                    </div>
                </div>
 <?php } else { ?>
    <p class=" text-4xl text-red-600 items-center ml-56 mt-48 mr-56">vous n'avez pas encore des produits à cette commande</p>
<?php } ?>
                <script>
function generatePDF(){
    //nom du fichier | file name
    var nom_fichier = prompt("Nom du fichier PDF :");
    //generer le pdf
    var element = document.getElementById('text');
    var opt = {
            margin:  0.5,
            filename:     `${nom_fichier}.pdf`,
            image:        { type: 'jpeg', quality: 1 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'A8', orientation: 'portrait' }
        };
    if(nom_fichier != null){
        html2pdf().set(opt).from(element).save()
    }else {
        alert("Veuillez choisir un nom ")
    }
}
</script>
    </body>

</html>