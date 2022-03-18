<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="{{url('/')}}">게시판</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">                
                <a class="nav-link" href="{{url('/')}}/category">카테고리</a>
                <a class="nav-link" href="{{url('/')}}/login">로그인</a>
                <a class="nav-link" href="{{url('/')}}/register">가입</a>
            </div>
        </div>
    </div>
</nav>