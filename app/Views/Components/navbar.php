<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0D0D0D;">
<a class="navbar-brand" href="/">
    <img src="/Images/logos/dojo-icon.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    <?= lang("titles.Home")?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item <?= !get_first_segment() ? 'active' : ''?>">
        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
      </li>
      <?php
        foreach(lang("titles.navBarList") as $section => $longName){
      ?>
          <li class="nav-item <?= ($section == get_first_segment()) ? 'active' : ''?>">
            <a class="nav-link" href="<?=$section?>" title="<?=$longName?>"><?=$section?></a>
          </li>
      <?php
        }
      ?>
    </ul>
  </div>
</nav>