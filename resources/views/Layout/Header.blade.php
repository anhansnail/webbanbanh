    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="HomeMA">Minh Anh Laravel</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="About">About Us</a>
                    </li>
                    <li>
                        <a href="Contact">Contact</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    @if(Auth::check()==false)
                    <li>
                        <a href="SignUp">Sign Up</a>
                    </li>
                    <li>
                        <a href="LogIn">Log In</a>
                    </li>
                    @else
                    <li>
                    	<a href="Account">
                    		<span class ="glyphicon glyphicon-user" ></span>
                    		{{Auth::user()->full_name}}
                    	</a>
                    </li>

                    <li>
                    	<a href="LogOut">Log Out</a>
                    </li>
                    @endif
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
