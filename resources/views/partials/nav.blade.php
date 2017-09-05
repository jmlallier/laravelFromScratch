<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="text-white">I'm John-Michael</h4>
                <p class="text-muted">A full-stack web developer and a passionate learner with an entrepreneurial mindset. I constantly iterate on personal and professional processes, workflows, and methods. I’m proficient in PHP, MySQL, JavaScript, AJAX, HTML, CSS, and various APIs. And I’m familiar with MVC frameworks (Laravel and Rails), WordPress, Git, Node, React, and Ruby on Rails.</p>
            </div>
            <div class="col-sm-4 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="mailto:jmlallier@me.com" class="text-white">Email me</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
        @if (Auth::check())
        <a href="/" class="navbar-brand">{{Auth::user()->name}}</a>
        @else
            <a href='/register'>Sign up</a>&nbsp;
            or
            <a href='/login'>Sign in</a>
            @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>