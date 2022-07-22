<nav id="navbar">
  <div class="container">
  
      <h1  class="logo"><a href="/admin"><span class="text-primary">
          <i class="fas fa-user-graduate"></i></span> StudyBuddy  <span class="text-primary">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp User
            </span>Dashboard</a></h1>
 


  <ul>
      <li><a class="current" href="/admin"><i class="fas fa-cogs"></i> Dashboard</a></li>
      <li><a href="/adminOperations/user"><i class="fas fa-users-cog"></i> Manage Users </a></li>
      <li><a href="/manage/tutor">Manage Tutors</a></li>
      <li><a href="/adminOperations/manageListing">Manage Listing</a></li>
      <li>
          <form method="POST" action="/logout" class="inline">
              @csrf
              <button type="submit" class="dash" >
              <i class="fa-solid fa-door-closed"></i> Logout
              </button>
          </form>
      <li>
  </ul>
  </div>
</nav>
