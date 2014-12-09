<nav class="navbar navbar-default" role="navigation">
   <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            @if(Request::path() === "/")
               <li class="active"><a href="{{URL::action('TestResultController@showDashboard')}}">Dashboard</a></li>
            @else
               <li><a href="{{URL::action('TestResultController@showDashboard')}}">Dashboard</a></li> 
            @endif
         </ul>
         <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
               <input type="date" class="form-control" id="get-datefrom-js">
            </div>
            <div class="form-group">
               <input type="date" class="form-control" id="get-dateto-js">
            </div>
              <button type="submit" class="btn btn-default">View Results</button>
         </form>
         <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome, Administrator! <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Logout</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Settings</a></li>
               </ul>
            </li>
         </ul>
      </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
</nav>