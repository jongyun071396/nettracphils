<footer>
                {{-- DESKTOP --}}
<div class="visible-md visible-lg">
    <div class="footer">
        <hr>
        <div class="pull-left ft">
            <a href="{{ url('/') }}"><img id="footer-logo" src="../img/footer.png"></a>
            <span id="footer-nci">© 2017 NetTrac Philippines Inc. A Canadian company serving the world.</span>
        </div>
        <ul class="nav navbar-nav pull-right" id="menu-footer">
            <li class=" inline-menus {{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
        </ul>
    </div>
</div>
        {{-- MOBILE --}}
<div class="visible-sm">
    <div class="footer">
        <hr>
        <div class="pull-left">
            <a href="{{ url('/') }}"><img id="footer-logo" src="../img/footer.png"></a>
            <span id="footer-nci">© 2017 NetTrac Philippines Inc. A Canadian company serving the world.</span>
        </div>
        <ul class="nav navbar-nav pull-right" id="menu-footer">
            <li class=" inline-menus {{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
        </ul>
    </div>
</div>
<div class=" visible-xs">    
    <div class="container">
        <ul class="nav navbar-nav "><hr>
            <li class="inline-menus {{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
        </ul>
        <span id="footer-nci"> 
            <div class="text-center" style="margin-right: 84px;">
                <a href="{{ url('home') }}"><img id="footer-logo" src="../img/footer.png" style="margin-right: 10px;"></a>
			    © 2017 NetTrac Philippines Inc.
            </div>
            <div class="text-center mtop">A Canadian company serving the world.</div>
		</span>
    </div>   
</div>
</footer>