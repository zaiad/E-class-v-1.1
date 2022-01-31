<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Payment</title>
</head>
<body>

    <div id="container" class=" d-flex">

      <input class="d-none" id="check" type="checkbox">       

          <?php  

             include ('sidebar.php')

          ?>

              <div class="container"> 

          <?php  

              include ('navbar.php')

          ?>





                <div class="payment">
                    <div class="d-flex justify-content-between">
                        <h2 class="fw-bold">Payments Details</h2>
                        <i class="bi bi-chevron-expand fs-3 text-info"></i>
                   </div>
                   <div class="table-responsive ">
                      <table class="table table-hover table-striped ">

                        <tbody class="border-top-0">
                            <tr>
                                <td scope="row" class="text-secondary">Name</td>
                                <td  class="text-secondary">Payment Schedule</td>
                                <td  class="text-secondary">Bill Number</td>
                                <td  class="text-secondary">Amount Paid</td>
                                <td  class="text-secondary">Balance amount</td>
                                <td  class="text-secondary" colspan="2">Date</td>  
                            </tr>
                          
                          <?php 
                          
                          $Data = file_get_contents('paymentlist.json');
                          $payment = json_decode($Data,true);
                          foreach ($payment as $payment){
                            echo' <tr>
                                      <td class="text-black">'.$payment['name'].'</td>
                                      <td class="text-black">'.$payment['payment_schedule'].'</td>
                                      <td class="text-black">'.$payment['bill_number'].'</td>
                                      <td class="text-black">'.$payment['amount_paid'].'</td>
                                      <td class="text-black">'.$payment['balance_amount'].'</td>
                                      <td class="text-black">'.$payment['date'].'</td>
                                      <td><i class="bi bi-eye text-info"></i></td>
                                  </tr>';
                            }
                          
                          ?>
                          
                          
                          
                          
                        </tbody>
                      </table>
                    </div>
                </div> 






            </div>

         </div>

    </div>

</body>
</html>