<!--.page -->
<div role="document" class="page">
    <div id="warnings" class="form-header"><div class="section clearfix">

        <?php if ($messages): ?>
            <div id="messages">
                <div class="section clearfix">
                  <?php print $messages; ?>
                </div>
            </div> <!-- /.section, /#messages -->
        <?php endif; ?>

    </div>
    <header id="header" role="banner">
        <div class="header-layout">
            <div class="header-inner">
              <?php if ($form_logo): ?>
                  <img src="<?php print $form_logo; ?>" />
              <?php else: ?>
                  <div class="logo"><a href="/"><img src="/sites/all/themes/surveys/images/logo-1.png"></a></div>
              <?php endif; ?>
                <div class="header-nav">
              <?php if (($is_admin)) : ?>
                  <a href="?q=admin/people">Users</a> <a href="?q=admin/content">Content</a>
              <?php else: ?>
                <?php if (($logged_in)) : ?>
                  <a href="/?q=user">My account</a> <a href="/?q=user/logout">Log out</a>
                <?php endif; ?>
              <?php endif; ?>
                </div>
            </div>
        </div> <!-- /.section, /#header -->
        <a name="survey-top-target" id="survey"></a>
    </header>

      <?php if ($breadcrumb): ?>
          <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>

      <?php if ($page['featured']): ?>
            <div id="featured">
                <div class="section clearfix">
                  <?php print render($page['featured']); ?>
                </div>
            </div> <!-- /.section, /#featured -->
      <?php endif; ?>
        <div id="content-background">
        <main role="main" class="outer-wrapper">
          <?php if (!empty($page['sidebar_first'])): ?>
              <aside id="sidebar-first" role="complementary" class="sidebar">
                <?php print render($page['sidebar_first']); ?>
              </aside>
          <?php endif; ?>

            <section id="content">
              <?php if ($title): ?>
                <?php print render($title_prefix); ?>
                  <h1 id="page-title"><?php print $title; ?></h1>
                <?php print render($title_suffix); ?>
              <?php endif; ?>

              <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
                <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
              <?php endif; ?>

              <?php if ($action_links): ?>
                  <ul class="action-links">
                    <?php print render($action_links); ?>
                  </ul>
              <?php endif; ?>

              <?php print render($page['content']); ?>
            </section>

          <?php if (!empty($page['sidebar_second'])): ?>
              <aside id="sidebar-second" role="complementary" class="sidebar">
                <?php print render($page['sidebar_second']); ?>
              </aside>
          <?php endif; ?>
        </main>
        </div>

    <footer id="site-footer" role="contentinfo">
        <section class="footer-top">

            <div class="flex-boxes flex-front">
                <div class="flex-box flex-box-big">
                    <h1 class="flex-title"></h1>
                    <div class="flex-content"></div>
                    <p></p>
                </div>
            </div>
        </section>

        <section class="footer-bottom">
            <div class="copyright">
                <p>
                    &copy; <?php print date('Y') . ' ' . $linked_site_name . ' ' . t('All rights reserved.'); ?>
                </p>
            </div>

            <div class="utility-menu">
                <ul>
                    <li><a class="scroll-on-page-link" href="#survey">Review Survey</a></li>
                </ul>
            </div>
        </section>
    </footer>
</div>
<!--/.page -->
