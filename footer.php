<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2021 || Designed By NSA || <a style="text-decoration: none; color:white" href="#" data-toggle="modal" data-target="#stuLoginModalCenter">Admin Login</a> </small>
</footer>








<!--Student Login-->

<!--Student Registration---->
<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalLongTitle">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="sloginverify.php" id="stuLoginForm">

 <div class="form-group">
   <i class="fas fa-envelope mr-3"></i><label for="stuLogemail"><b>Email</b> </label>
<input type="email" class="form-control" id="stuLogemail" name="stuLogemail" aria-describedby="emailHelp" placeholder="Enter email">

</div>

<div class="form-group">
  <i class="fas fa-key mr-3"></i><label for="stuLogpass"><b> Password</b> </label>
<input type="password" class="form-control" name="stuLogpass" id="stuLogpass" aria-describedby="emailHelp" placeholder="New Password">

</div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" id="stuLoginBtn" class="btn btn-danger">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>





<!--Student login---->


<!--Student Registration---->
<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterrTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLongTitle">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="addstudent.php" id="stuRegForm">
          <div class="form-group">
            <i class="fas fa-user mr-3"></i><label class="pl-2 font-weight-bold" for="stuname"><b>Name</b></label>
         <input type="text" class="form-control" id="stuname" name="stuname" aria-describedby="emailHelp" placeholder="Name">

         </div>
 <div class="form-group">
   <i class="fas fa-envelope mr-3"></i><label for="stuemail"><b>Email</b> </label>
<input type="email" class="form-control" id="stuemail" name="stuemail" aria-describedby="emailHelp" placeholder="Enter email">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<div class="form-group">
  <i class="fas fa-key mr-3"></i><label for="stupass"><b> New Password</b> </label>
<input type="password" class="form-control" name="stupass" id="stupass" aria-describedby="emailHelp" placeholder="New Password">

</div>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-danger">Sign Up</button>
      </div>
      </form>
    </div>
  </div>
</div>














<!--Student Registration---->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="ajaxrequest.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
