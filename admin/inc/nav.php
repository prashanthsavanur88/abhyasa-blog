<div id="sidebar">
  <div id="toggle_sidebar" class="open">
    <div class="sidebar_container">
      <div class="profile">
        <div class="avatar">
          <img src="assets/img/logo.png" alt="" />
        </div>
        <div class="username">
          <p>
            blog
          </p>
        </div>
      </div>
      <ul class="nav_sidebar">
        <li><a href="dashboard.php">dashboard</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">media
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="media.php?type=add">add media</a></li>
            <li><a href="list.php?type=media">all media</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">post
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="post.php?type=add">add post</a></li>
            <li><a href="list.php?type=posts">all posts</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">authors
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="users.php">add authors</a></li>
            <li><a href="list_users.php">all authors</a></li>
          </ul>
        </li>
        <li><a href="categories.php">categories</a></li>
        <li><a href="comments.php">comments</a></li>
        <li><a href="messages.php">messages</a></li>
        <li><a href="index.php?logout">log out</a></li>
      </ul>
    </div>
    <div onclick="toggle_sidebar()" class="toggle">
      <span class="arrow"></span>
      <span class="arrow"></span>
      <span class="arrow"></span>
    </div>
  </div>
</div>
