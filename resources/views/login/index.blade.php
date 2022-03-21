@extends('layouts.login')
@section('container')
<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> LOGIN | PERPUSTAKAAN WIKRAMA</h2>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Masukan Username dan Password</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Masukan Username " name="nama" />
                                        </div>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="bi bi-file-lock-fill"></i></span>
                                            <input type="password" class="form-control"  placeholder="Masukan Password" name="pass" />
                                        </div>
                                
                                		<div class="form-group input-group">
                                            
                                            <input type="submit" class="btn btn-primary"  name="login" value="Login" />
                                        </div>
                                    </form>
                            </div>
   
                        </div>
                    </div>   
        </div>
    </div>
@endsection