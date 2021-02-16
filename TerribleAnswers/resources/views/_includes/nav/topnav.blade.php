<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Terrible Answers</a>
                <a href="https://nlovell.dev/laravel_udemy">
                    <i class="fa fa-github fa-2x" aria-hidden="true" style="margin-top:11px; margin-right:15px;"></i>
                </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Popular</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @include('_includes/nav/lognav')

                    <a href="{{route('questions.create')}}" class="btn btn-primary" style="margin-top:5px;">Ask A
                        Question</a>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
