<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../static/css/adminpage.css">
    <link rel="stylesheet" href="../static/css/adminProd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../sweetalert2/jquery-3.6.1.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>

    <script>
      function deleteStorage(){
        localStorage.clear();
      }
    </script>
</head>
<body>
<div class="container">
    <div class="side-nav">
        <div class="page-title">
            <h2>Admin Panel</h2>
        </div>
        <nav>
            <ul>
                <li  style="background: #2fccf8;"><a href="dashboard.php">Dashboard</a></li>
                <li><a href="adminProd.php">Products</a></li>
                <li><a href="adminSvc.php">Services</a></li>
                <li><a href="#">Transactions</a></li>
                <br><br><br><br><br><br><br><br><br><br>
                <li><a href="../logout.php" class="lg-btn" onclick="deleteStorage()">Log Out</a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="container2">
  <div class="small-container">
  <iframe title="Human trafficking anlaysis" width="100%" height="500" src="https://app.powerbi.com/reportEmbed?reportId=18da7229-c250-478d-b239-2736b339659c&autoAuth=true&ctid=3846e0dc-10ee-4999-9125-5ca8d87e2931" frameborder="0" allowFullScreen="true"></iframe>
  </div>
</div>
 <!-- sweet alert log out modal -->
 <script type="text/javascript">
      $('.lg-btn').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
        title: 'Are you sure',
        text: "You want to log out?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#2fccf8',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.value) {
              document.location.href = href;
          }
          else {
            result.dismiss === Swal.DismissReason.cancel
          }
    })
      })
    </script>
<!-- sweetalert script -->
<script type="text/javascript">
      var alerted = localStorage.getItem('alerted') || '';
      if (alerted != 'yes') {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Logged In!',
            showConfirmButton: false,
            timer: 1500
            })
        localStorage.setItem('alerted','yes');
      }
</script>
</body>
</html>