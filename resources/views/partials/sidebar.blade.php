<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         @auth
            @if (auth()->user()->role=="admin2")
               <a class="nav-link collapsed {{ ($active === "home") ? 'active' : '' }}" href="/home/admin"> <i class="bi bi-grid"></i><span>Home</span> </a>
               <a class="nav-link collapsed {{ ($active === "log activity") ? 'active' : '' }}" href="/home/admin/logActivity"> <i class="bi bi-eye"></i><span>Log Activity</span></a>
            @elseif (auth()->user()->role=="user")
               <a class="nav-link collapsed {{ ($active === "home") ? 'active' : '' }}" href="/home"> <i class="bi bi-grid"></i><span>Home</span> </a>
               <span class="nav-link collapsed">Market</span>
               <a class="nav-link collapsed {{ ($active === "pesanan") ? 'active' : '' }}" href="/pesananSaya"> <i class="bi bi-list-ul"></i><span>Omegamon</span> </a> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href="https://wa.me/6281818180551"> <i class="bi bi-whatsapp"></i><span>Alphamon</span></a>
               <span class="nav-link collapsed">Party</span>
               <a class="nav-link collapsed {{ ($active === "pesanan") ? 'active' : '' }}" href="/pesananSaya"> <i class="bi bi-list-ul"></i><span>Omegamon</span> </a> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href="https://wa.me/6281818180551"> <i class="bi bi-whatsapp"></i><span>Alphamon</span></a> 
               <span class="nav-link collapsed">Chat</span> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href=""> <i class="bi bi-whatsapp"></i><span>All</span> </a> 
               <a class="nav-link collapsed {{ ($active === "pesanan") ? 'active' : '' }}" href="/pesananSaya"> <i class="bi bi-list-ul"></i><span>Omegamon</span> </a> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href="https://wa.me/6281818180551"> <i class="bi bi-whatsapp"></i><span>Alphamon</span></a> 
               @elseif (auth()->user()->role=="admin")
               <a class="nav-link collapsed {{ ($active === "home") ? 'active' : '' }}" href="/home"> <i class="bi bi-grid"></i><span>Home</span> </a>
               <span class="nav-link collapsed">Market</span>
               <a class="nav-link collapsed {{ ($active === "pesanan") ? 'active' : '' }}" href="/pesananSaya"> <i class="bi bi-list-ul"></i><span>Omegamon</span> </a> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href="https://wa.me/6281818180551"> <i class="bi bi-whatsapp"></i><span>Alphamon</span></a>
               <span class="nav-link collapsed">Party</span>
               <a class="nav-link collapsed {{ ($active === "pesanan") ? 'active' : '' }}" href="/pesananSaya"> <i class="bi bi-list-ul"></i><span>Omegamon</span> </a> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href="https://wa.me/6281818180551"> <i class="bi bi-whatsapp"></i><span>Alphamon</span></a> 
               <span class="nav-link collapsed">Chat</span> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href=""> <i class="bi bi-whatsapp"></i><span>All</span> </a> 
               <a class="nav-link collapsed {{ ($active === "pesanan") ? 'active' : '' }}" href="/pesananSaya"> <i class="bi bi-list-ul"></i><span>Omegamon</span> </a> 
               <a class="nav-link collapsed {{ ($active === "hubungi") ? 'active' : '' }}" href="https://wa.me/6281818180551"> <i class="bi bi-whatsapp"></i><span>Alphamon</span></a> 
            @endif        
         @endauth    
      </li>
      @auth
         <li class="nav-item">
            <form action="/logout" method="post" class="nav-link collapsed">
               @csrf
                  <button type="submit">
                     <i class="bi bi-box-arrow-in-left"></i><span>Logout</span>
                  </button>
            </form>
         </li>
      @endauth 
   </ul>
</aside>