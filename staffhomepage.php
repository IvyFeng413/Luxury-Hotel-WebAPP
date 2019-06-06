<?php

require('db.php');

require('header.php');
?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">3 New Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">5 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
          <div style="width:1200px; margin:0 auto; height:auto;">
<p style="text_align：center;"></p></div>
     
    <div id="butong_net_right" style="overflow:hidden;width:1000px;">
<table cellpadding="0" cellspacing="0" border="1">
<tr><td id="butong_net_right1" valign="top" align="center">
<table cellpadding="2" cellspacing="0" border="1">
<tr align="center">

    
    <td align="center" valign="middle"></td>
    <td><img width="1000" height="600"border="1" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1557211131217&di=4162d3b2d4525d6731158a94858e798f&imgtype=0&src=http%3A%2F%2F5b0988e595225.cdn.sohucs.com%2Fq_70%2Cc_zoom%2Cw_640%2Fimages%2F20190313%2F9b7791d7be7245d2ad8f699f7389dffd.jpeg"></td>
    <td align="center" valign="middle"></td>
<td><img width="1000" height="600"border="1" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1557211095742&di=e65fb0c97e4708101465e5caf6fdefd5&imgtype=0&src=http%3A%2F%2Fi3.hexunimg.cn%2F2015-08-04%2F178054306.jpg"></td>
     <td align="center" valign="middle"></td>
<td><img width="1000" height="600"border="1" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1557805862&di=d2e1316812b1187f609c55247ad8957c&imgtype=jpg&er=1&src=http%3A%2F%2Fdingyue.ws.126.net%2FJ2QDXysYnHURV%3DyDoTMOC9H4ouhqFd6wM1JH2Nj03qq5z1557135249131.jpg"></td>
     <td align="center" valign="middle"></td>
<td><img width="1000" height="600"border="1" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1557211216203&di=c1effae16045ca052436ed6d132ed831&imgtype=0&src=http%3A%2F%2Ffile.tyun.71360.com%2FUpLoadFile%2F2018%2F12%2F26%2F10%2F636814179464362613_13911968485_6067623.jpg"></td>
  
</tr>
</table>
</td>
<td id="butong_net_right2" valign="top"></td>
</tr>
</table>
</div>
<script>
var speed=30//速度数值越大速度越慢
butong_net_right2.innerHTML=butong_net_right1.innerHTML
function Marquee4(){
if(butong_net_right.scrollLeft<=0)
butong_net_right.scrollLeft+=butong_net_right2.offsetWidth
else{
butong_net_right.scrollLeft--
}
}
var MyMar4=setInterval(Marquee4,speed)
butong_net_right.onmouseover=function() {clearInterval(MyMar4)}
butong_net_right.onmouseout=function() {MyMar4=setInterval(Marquee4,speed)}
    </script>


      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>the hotel system by code captain</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>


