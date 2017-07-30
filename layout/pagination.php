<div class="container-fluid">
               <div class="row">
                  <div class="col-xs-12">
                    <center>
                    <nav>
                    <ul class="pagination pagination-lg">
                    <?php

                      $query = mysqli_query($connect, "SELECT * FROM barang");
                      $jmlbaris = mysqli_num_rows($query);
                      $halaman = ceil($jmlbaris/$perpage);
                      for($i = 1; $i <=$halaman; $i++){
                        echo "<li><a href='?page=$i'>$i </a></li>";
                      }
                     ?>
                    </ul>
                  </nav>
                  </center>
                  </div>
               </div>
              </div>