  <!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li class="<?= ($barActive != 'dashboard' ? '' : 'active'); ?>">
          <a class="" href="<?php base_url() ?>/admin/dashboard">
            <i class="icon_house_alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sub-menu <?= ($barActive != 'Tasks' ? '' : 'active'); ?>">
          <a href="javascript:;" class="">
            <i class="icon_document_alt"></i>
            <span>Tasks</span>
            <span class="menu-arrow arrow_carrot-right"></span>
          </a>
          <ul class="sub">
            <li><a class="" href="<?php base_url(); ?>/admin/post">Post</a></li>
            <li><a class="" href="<?php base_url(); ?>/admin/post/viewPost">View</a></li>
          </ul>
        </li>

        <li>
          <a class="" href="widgets.html">
            <i class="icon_genius"></i>
            <span>Materi</span>
          </a>
        </li>
        <li>
          <a class="" href="chart-chartjs.html">
            <i class="icon_piechart"></i>
            <span>Link</span>

          </a>

        </li>



      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->