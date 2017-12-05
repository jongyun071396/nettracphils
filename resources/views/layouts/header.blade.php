<nav class="navbar navbar-default" style="height:50px; background-attachment: fixed; ">
    <div class="container-fluid">     
        <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ url('img/logo.png') }}"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="border: none;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             </div>
             <div class="collapse navbar-collapse k align-middle">
            <ul class="nav navbar-nav" id="menu-header">
                <li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="{{ url('/') }}" class="sliding-middle-out">Home</a></li>
                <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="sliding-middle-out">About Us</a></li>
                <li class="{{ request()->segment(1) == 'support' ? 'active' : '' }}"><a href="{{ url('support') }}" class="sliding-middle-out">Support</a></li>
                <li class="{{ request()->segment(1) == 'contact-us' ? 'active' : '' }}"><a href="{{ url('contact-us') }}" class="sliding-middle-out">Contact Us</a></li>
                <li class="{{ request()->segment(1) == 'payroll' ? 'active' : '' }}"><a href="{{ url('payroll') }}" class="sliding-middle-out">Payroll System</a></li>
                <li class="{{ request()->segment(1) == 'control-panel' ? 'active' : '' }}"><a href="{{ url('control-panel') }}" class="sliding-middle-out">Control Panel</a></li>
            </ul>
        </div>
    </div>
</nav>