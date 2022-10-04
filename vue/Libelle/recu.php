<?php 
include __DIR__."/../navs/header.php";
include __DIR__."/../../sanitalizer/command.php";
global $item_total;
 ?>

                    <table class=" w-1/3 items-center   ml-auto mr-auto mt-10  text-sm lg:text-base" cellspacing="0">        
                        <thead>
                            <tr class="h-12 uppercase">
                                    
                                    <th class="">produit</th>
                                    <th class="">Quantité
                                    </th>
                                    <th class="">remove</th>  
                              </tr>
                          </thead>
                          <tbody>
                             <?php foreach($data as $commande) { ?>
                                  <tr>
                                       <td class="hidden pb-4 md:table-cell"></td>
                                       <td> 
                                         <p class="mb-2 md:ml-4"><?= $commande['nom'] ?></p>
                                       </td>
                                       <td class="justify-center md:justify-end md:flex mt-6">
                                          <?= $commande['qty'] ?>
                                       </td>
                                       <td class="text-sm text-right">
                                          <?= $commande['qty'] * $commande['prix']?>
                                       </td>
                                          
                                  </tr> 
                                
                            <?php  } ?>
                                
                         </tbody>
                               
                     </table>

