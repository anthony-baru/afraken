<div id="sidebar-wrapper">
<ul class="sidebar-nav nav-pills nav-stacked" id="menu">
 
                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
                       
                </li>
				
				
				
												
				<li>
                    <a href="{{url('/')}}"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-chevron-right fa-stack-1x "></i></span>Home</a>
                </li>
                    
                       <li>
                    <a href="{{url('/member/members')}}"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-chevron-right fa-stack-1x "></i></span>Members</a>
                </li>
				<li>
                    <a href="{{url('/member/contributions')}}"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-chevron-right fa-stack-1x"></i></span>Contributions</a>
                </li>
				<li>
                    <a href="{{url('/member/subscriptions')}}"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-chevron-right fa-stack-1x"></i></span>Subscriptions</a>
                </li>
				<li>
                    <a href="{{url('/events')}}"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-chevron-right fa-stack-1x"></i></span>Events</a>
                </li>
				<li>
                    <a href="{{url('/gallery')}}"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-chevron-right fa-stack-1x"></i></span>Gallery</a>
                </li>
				
				<li>
                    <a href="{{url('/home')}}"><span class="fa-stack fa-lg pull-left"><i class="glyphicon glyphicon-chevron-right fa-stack-1x"></i></span>Account</a>
                </li>
				
				
						
               
				
				
				
				
				
				
                
				<li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="fa-stack fa-lg pull-left"><i class="fa  fa-sign-out fa-stack-1x "></i></span> Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                
               
                
                
            </ul>
			</div>