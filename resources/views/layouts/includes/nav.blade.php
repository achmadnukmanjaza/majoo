<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <img src="{{asset('/assets/images/majoo.png')}}" alt="" class="rounded float-left" style="height:60px;width:60px;">
  <a class="navbar-brand" href="#">Majoo Teknologi Indonesia</a>
  
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
         
      @if(auth()->user()) 
      <li class="nav-item">
        <a class="nav-link" href="/master_catalog">Master Catalog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pesanan">Order Data</a>
      </li>
      @endif
      @if(!auth()->user())    
      <li class="nav-item active">
        <a class="nav-link" href="/catalog">Catalog Product<span class="sr-only">(current)</span></a>
      </li>   
      @endif    
    </ul>
    @if(!auth()->user())   
      <a href="/login"><button class="btn btn-success"><b>Login (Admin)</b></button></a>
    @endif    
    @if(auth()->user())    
      <a href="/logout"><button class="btn btn-success">Logout</button></a>
    @endif    
  </div>
</nav>
