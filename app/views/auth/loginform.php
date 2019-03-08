<div class="col-md-4 col-md-offset-4" style="margin-top:10%">
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="text text-center">
        <strong class="text text-primary">ADMINISTRATOR </strong>
        <br>KUISIONER ONLINE STIKOM PI
    </h4>
  </div>
  <div class="panel-body">
          <?php $this->flashSession->Output(); ?>
          <form action="loginproses" method="post">
              <div class="form-group">
                  <input class="form-control" type="text" placeholder="Username" name="username" autofocus>
              </div>
              <div class="form-group">
              <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                </div>
              <div class="btn-group">
                  <button class="btn btn-success signup" type="submit" >Login</button>
                  <button class="btn btn-danger signup" type="reset" >Reset</button>
              </div>
          </form>
      </div>
  </div>
</div>
