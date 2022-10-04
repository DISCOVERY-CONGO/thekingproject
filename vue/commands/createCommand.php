<?php 
include __DIR__."/../navs/head.php";
include __DIR__."/../../sanitalizer/command.php";
global $item_total;
 ?>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include __DIR__."/../navs/nav.php"; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>


      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    <?php include __DIR__."/../navs/leftBar.php"; ?>
      <!-- p artial -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

      <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Produits</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>nom</th>
                          <th>prix</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            if(isset($data['produits'])):
                            foreach($data['produits'] as $product) :?>
                      <form   method="post" >
                      <input type="hidden" id="action" name="action" value="add">
                        <input type="hidden" id="produit_id" name="produit_id" value="<?= $product['id'] ?>">
                        <input type="hidden" id="command_id" name="command_id" value="<?= $data['command_id'] ?>">        
                        <tr>
                          <td><?= $product['nom'] ?></td>
                          <td><?= $product['prix'] ?></td>
                          <td> <input type="text" name="quantite" id="quantite" value="1" size="2" />
                                           <input type="submit" value="ajouter"   class="btn btn-success" />
                                       </td>
                        </tr>
                      </form>
                        <?php 
                        endforeach;
                        endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">commande</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>produit</th>
                          <th>quantite</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
              <?php
                  if(!empty($data['commandes'])) :
                                    
                      foreach($data['commandes'] as $commande) : ?>
                                      
                          <form method="post">
                              <input type="hidden" name="action" value="remove" id="action">
                        <tr>
                          <td>
                          <input type="hidden" name="command_id" id="command_id" value="<?= $commande['comId'] ?>">
                          <?= $commande['nom'] ?>
                        </td>               
                          <!-- </td>
                          <td>
                            
                          <a href="#">
                              <p class="mb-2 md:ml-4"></p>
                          </a>
                          </td> -->
                          <td>
                          <input type="number" value="<?= $commande['quantite'] ?>" 
                                                class="w-full font-semibold text-center text-gray-700 bg-gray-200 outline-none focus:outline-none hover:text-black focus:text-black" />
                                             
                          </td>
                          <td class="text-danger"><input  type="submit" value="X " class="btn btn-danger"/></td>
                      
                        </tr>
                        </form>
               <?php
                   $item_total += ($commande["prix"] * $commande["quantite"]);
                      endforeach;
                    endif; ?>
                                
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                <button id="basic" class="btn btn-default"><i class="fas fa-print"></i> </button>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> confirmer la commande
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> imprimer la facture
                  </button>
                </div>
                </div>
              </div>
            </div>



          </div>
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

<script src="script.js"></script>
    
    <?php include __DIR__."/../navs/footer.php"; ?>