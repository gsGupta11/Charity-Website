<?php
  require_once "header1.php";
 ?>
<style type="text/css">
     html,body {
          background-color: RGB(52, 73, 94);
        }
        .hide{
          display:none;
        }
        #check{
          border-radius:5px;
          padding:5px;
          color: #333;
          box-shadow: -3px 3px blue, -2px 2px blue, -1px 1px blue;
          border: 1px solid blue;
        }
</style>

         <div style="margin-left: 60px;" class="col-md-11 content">
             <div>
             <form class="form-inline" method="post" action="admin.php" >
               <div class="form-group">
                <input type="date" name="sdate" required>
              </div>
              <span> To </span>
              <div class="form-group">
               <input type="date" name="edate" required>
              </div>
              <input type="submit1" class="btn btn-primary btn-md" value="Search By Date">
              </input>
              <!-- error above -->
             </form>
             <table  id="example" class="table table-striped">
                 <thead>
                   <tr>
                     <th>Doner Name</th>
                     <th>Amount</th>
                     <th>Purpose</th>
                     <th>Address</th>
                     <th>Cell No.</th>
                     <th>Date</th>
                     <th>Payment Status</th>
                     <th>Payment Type</th>
                     <th>Download Invoice</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
              <p id="error">
              </p>
              <?php
              if( isset($_POST['sdate']) && !empty ($_POST['sdate'])
                  && isset($_POST['edate']) && !empty ($_POST['edate']) ) {
                    $sdate = $_POST['sdate'];
                    $edate = $_POST['edate'];
                    $query = " SELECT * FROM `doner` WHERE doner.d_date BETWEEN
                              '$sdate' AND '$edate' ";
                    $result = mysqli_query($link, $query);
                  }
              else {
                $query="SELECT * FROM `doner`";
                $result=mysqli_query($link, $query);
              }
                      $total = 0;
                      while($row=mysqli_fetch_array($result)){
                        if($_SESSION['user1']==$row['d_name'])
                        {
                        $total += $row['d_amount'];
                       ?>
                               <tr>
                                       <td><?php echo $row['d_name']?></td>
                                       <td><?php echo $row['d_amount']?></td>
                                       <td><?php echo $row['d_purpose']?></td>
                                       <td><?php echo $row['d_addr']?></td>
                                       <td><?php echo $row['d_cell']?></td>
                                       <td><?php echo $row['d_date']?></td>
                                       <td><?php echo $row['d_pay']?></td>
                                       <td><?php echo $row['d_paytype']?></td>
                                       <form class="Form" method="POST" action="invoice.php">
                                          <input type="text" class="hide" id="cust" name="customerid" placeholder="Enter Customer Id..">
                                          <input type="text" id="comp" class="hide" name="comptype" placeholder="Enter Complaint Type..">
                                          <textarea id="des" class="hide" name="description" placeholder="Describe your problem.."></textarea>
                                          <td><?php echo '<button type="submit" name="submit" id="check" class="Submit">Download</button>'?></td>
                                        </form>
                               </tr>
                           <?php
                           }
                         }
                           ?>
               </tbody>
               </table>
               <p>
                 Total Amount = <b><?php echo $total; ?></b>
               </p>
             </div>
         </div>
     <script>
     $(document).ready(function(){
         $('.navbar ul li.active').removeClass("active");
         $('.navbar ul li:nth-child(2)').addClass("active");
         //check two dates
         $("form").submit(function(e){
           $sdate = new  Date( $("input:first").val() );
           $edate = new Date( $("input:odd").val() );
           if($sdate > $edate) {
             e.preventDefault();
             $('p#error').text("Date range is invalid").show().fadeOut(2101);
           }
         });
     });
     </script>
   </body>
</html>
