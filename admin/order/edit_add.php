<?php
require_once('../db/dbhelper.php');
session_start();
if(isset($_SESSION['username']) and isset($_SESSION['password'])){
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $sql = "select * from accountad where username = '$username' and password = '$password' ";
    $num_rows=numrows($sql);
    if(numrows($sql)==0){
        session_unset();
        header('Location: ../login/login.php');
    }

}else header('Location: ../login/login.php');
if(isset($_GET['id'])) $id=$_GET['id'];
else header('Location:index.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to dash  </title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
    integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <style>
      .circle {
        line-height: 0;		/* remove line-height */ 
        display: inline-block;	/* circle wraps image */
        margin: 5px;
        border: 2px solid rgba(255,255,255,0.4);
        border-radius: 50%;	/* relative value */
        /*box-shadow: 0px 0px 5px rgba(0,0,0,0.4);*/
        transition: linear 0.25s;
        height: 32px;
        width: 32px;
      }
      .circle img {
        border-radius: 50%;	/* relative value for
                adjustable image size */
      }
      .circle:hover {
        transition: ease-out 0.2s;
        border: 2px solid rgba(255,255,255,0.8);
        -webkit-transition: ease-out 0.2s;
      }
      a.circle {
        color: transparent;
      } /* IE fix: removes blue border */	
      body {
        background-color: lightblue;
        }
      .top-space{
        margin-top: 5% !important;
    }
    </style>
  </head>
  <body>
    <head>
      <nav class="navbar navbar-dark bg-dark">
        <!-- <div class="container-fluid"> -->
          <a class="navbar-brand" href="#">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sideBar" aria-controls="sideBar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <img src="../images/logo.png" alt="" width="80" height="50" class="d-inline-block align-text-top">
          </a>
          <ul class="nav justify-item-end">
            <div class="btn-group dropdown nav-item text-nowrap">
              <button type="button" class="btn btn-secondary dropdown-toggle bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../images/admin.png" alt="Avatar" class="circle d-inline">
              </button>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg-end" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="../profile.php">Th??ng tin c?? nh??n</a></li>
                <li><a class="dropdown-item" href="../login/logout.php">????ng xu???t</a></li>
              </ul>
              </ul>
            </div>
          </ul>
        <!-- </div> -->
      </nav>
    </head>
    <div class="container-fluid">
      <div class="row">
        <nav id="sideBar" class="col-md-5 col-lg-2 bg-light sidebar d-md-block collapse show">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <div class="list-group">
                <a href="../dashboard/" class="list-group-item list-group-item-action " aria-current="true">
                  Dashboard
                </a>
                <a href="../order/" class="list-group-item list-group-item-action active" aria-current="true">
                  ????n h??ng
                </a>
                <a href="../brand/" class="list-group-item list-group-item-action ">
                  Nh??n hi???u
                </a>
                <a href="../product/index.php" class="list-group-item list-group-item-action ">
                  S???n Ph???m
                </a>
                <a href="../banner/" class="list-group-item list-group-item-action">
                  Banner qu???ng c??o
                </a>
                <a href="../comment/" class="list-group-item list-group-item-action ">
                  ????nh gi?? kh??ch h??ng
                </a>
              </div>
            </ul>
          </div>        
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 top-space">
        <div class="album py-5 bg-light">
          <div class="container">
            <div id="orderpage" class="container">
            <div class="text-primary text-center top-space" style="width: 100%;">
              <p class="fs-1">H??a ????n kh??ch h??ng</p>
            </div>
<?php
$sql='select IDcus,ID,status,created_at from ordertable where ID='.$id;
$tmp=executeSingleResult($sql);
if(empty($tmp)) echo '<script> location.href = "index.php"; </script>';
else {
  $sql2="SELECT a.*, b.fullname, b.phonenumber\n"

  . "FROM address1 a, accountcus b\n"

  . "WHERE a.idCus=b.ID AND b.ID=".$tmp['IDcus'];
;
  $tmp2=executeSingleResult($sql2);
  if(empty($tmp2))  echo '<script> location.href = "index.php"; </script>';
  else {
          echo '<div class=" text-end top-space" >
          <p class="fs-5"><b>T??n kh??ch h??ng :</b>'.$tmp2['fullname'].' </p>
        </div>
        <div class=" text-end" >
          <p class="fs-5"><b>S??? ??i???n tho???i :</b>'.$tmp2['phonenumber'].' </p>
        </div>
        <div class=" text-end" >
        <p class="fs-5"><b>?????a ch??? :</b><i>'.$tmp2['street1'].', '.$tmp2['district'].', '.$tmp2['province'].'</i></p>';
        if(isset($tmp2['street2']) and $tmp2['street2']!='') echo '<p class="fs-5"><b>?????a ch??? 2 :</b><i>'.$tmp2['street2'].', '.$tmp2['district'].', '.$tmp2['province'].'</i></p>';
        echo '</div>
        <div class=" text-end" >
          <p class="fs-5"><b>M?? ????n h??ng :</b>'.$tmp['ID'].' </p>
          <p class="fs-5"><b>th???i gian t???o ????n :</b>'.$tmp['created_at'].' </p>
        </div>';

  }
}
?>
            <table class="table top-space">
                <thead>
                    <tr>
                        <th scope="col">T??n s???n ph???m </th>
                        <th scope="col">????n gi??</th>
                        <th scope="col">S??? l?????ng</th>
                        <th scope="coll">????p ???ng</th>
                        <th scope="coll">Th??nh ti???n</th>
                    </tr>
                </thead>
                <tbody>
 <?php
 $sql = "SELECT b.name, b.price, a.quality, b.amount, ( b.price *a.quality ) total, a.Idodertable, a.idproduct\n"

 . "FROM orderdetail a, product b\n"

 . "WHERE a.Idodertable=\"".$id."\" AND a.idproduct=b.id";
 $list=executeResult($sql);
 $totalall=0;
 $noenough="Kh??ng ?????: ";
 if(!empty($list)){
  foreach ($list as $item) {
    echo '  <tr>
    <td>'.$item['name'].'</td>
    <td>'.$item['price'].'</td>
    <td>'.$item['quality'].'</td>
';
    if($item['quality']<=$item['amount'] or $tmp['status']=1){
    echo '<td> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></td>';
      $totalall=$totalall + $item['total'];
    echo '<td>'.$item['total'].'</td>';
    }else {echo '<td><a onclick="deleteitem('.$item['Idodertable'].','.$item['idproduct'].')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>';
      $noenough=$noenough.$item['name']." ";
      }
    }
 }
 ?>  
  <script>
                function deleteitem(Idodertable, idproduct){
                    var option = confirm('B???n c?? ch???c ch???n mu???n xo?? danh m???c n??y kh??ng?')
                    if(!option) {
                    return;
                    }
                    console.log(Idodertable, idproduct)
                    //ajax - lenh post
                    $.post('ajax.php',{'method':'deleteitem', 'idodertable' : Idodertable , 'idproduct': idproduct},
                    function(data) {
                    location.reload();
                    });
                }
                function deleteorder(id){
                    var option = confirm('B???n c?? ch???c ch???n mu???n xo?? danh m???c n??y kh??ng?')
                    if(!option) {
                    return;
                    }
                    console.log(id)
                    //ajax - lenh post
                    $.post('ajax.php',{'method':'deleteorder','id' : id},
                    function(data) {
                    location.href='index.php'; 
                    });
                }
  </script>               
                <tr>
                  <td colspan="4" class="table-active"><b>T???ng c???ng:</b></td>
                  <td><b><?php echo $totalall;?></b></td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="d-grid gap-2 d-md-block top-space">
            <?php
            if($tmp['status']==0) echo '<button class="btn btn-primary" type="button" id="confirm">X??c nh???n</button>';
            ?>
            <button class="btn btn-primary" type="button" id="saveorder">L??u h??a ????n</button>
              <button class="btn btn-primary" type="button" onclick="deleteorder(<?=$id?>)">X??a</button>
            </div>
<script>
$('#saveorder').click(function(){
  domtoimage.toPng(document.getElementById('orderpage'))
        .then(function (blob) {
            var pdf = new jsPDF('l', 'pt', [$('#orderpage').width(), $('#orderpage').height()]);

            pdf.addImage(blob, 'PNG', 0, 0, $('#orderpage').width(), $('#orderpage').height());
            pdf.save("<?=$tmp['ID']?>_<?=$tmp2['fullname']?>.pdf");

            that.options.api.optionsChanged();
        });
  alert("???? t???i xu???ng h??a ????n");
});
$('#confirm').click(function () {
  if("<?=$noenough?>"=="Kh??ng ?????: "){
    $.post('ajax.php',{'method':'setstatus','idodertable' : <?=$id?>},
                    function(data) {
                    location.reload(); 
                    });  
  } 
    else alert("<?=$noenough?>");
});

</script>
          <?php
          
          ?>
            <!-- n??i dung trong ?????y 
          m??nh c???n 4 page
          page 1( dashboard): c???n 3 ?? t???ng quan c?? title: t???ng s???n ph???m, t???ng ????n h??ng, h??ng c??n l???i
          page 2(????n h??ng): ?? t??m ki???m, danh s??ch ????n h??ng l?? b???n c?? c??c c???t: tr???ng th??i, m?? ????n h??ng, t??n kh??ch h??ng, ?????a ch???, t???ng ti???n, ng??y ?????t h??ng, ng??y ho??n th??nh, 4 n??t : , chi ti???t ,x??a ,ho??n th??nh
             page nh???( l??m popup n???u c?? th???): chi ti???t ????n h??ng: m?? ????n h??ng, t??n kh??ch h??ng, ?????a ch???, b???n s???n ph???m c??( danh s??ch s???n ph???m ,s??? l?????ng, ????n gi??) , ph?? v???n chuy???n, gi???m gi??, t???ng c???ng, ng??y ?????t, ng??y ho??n th??nh, tr???ng th??i, n??t s???a
          page 3(????nh gi?? kh??ch h??nh): t??n kh??ch h??ng, ?? h??nh ???nh, ?? hi???n ????nh gi??, ?? hi???n vote, n??t li??n h??? kh??ch h??ng
          page 4(khuy???n m???i): n??t th??m, form hi???n m?? gi???m ,hi???n s??? ti???n gi???m, hi???n ph???n tr??m gi???m
          -->
            </div>
          
          </div>
        </div>
        </main>
      </div>
    </div> 
  </body>
</html>