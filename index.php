<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Election 2016 Styleguide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Bootstrap 2 CDN -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css">



  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="../ge-styles/ge-styles.css">

    <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="../ge-styles/ge-issue-tracker.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <span class="sg-logo-initials">GE 2016</span>
        <span class="sg-logo-full">General Election 2016</span> <em>STYLE GUIDE</em>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times. Add some documentation here on how to get started with your new style guide and start customizing this boilerplate to your liking.</p>
            <p>If you are looking for resources on style guides, check out <a href="http://styleguides.io">styleguides.io</a>. There are a ton of great articles, books, podcasts, talks, and other style guide tools!</p>
          </div><!--/.sg-about-->

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Party Colors</h2>
            <h3>2016 Parties</h3>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch party-FF"></div>
                <div class="sg-color-name">Fiana Fáil</div>
                <div class="sg-color-name">FF</div>
                <div class="sg-color-value">#40b34f</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch party-FG"></div>
                <div class="sg-color-name">Fine Gael</div>
                <div class="sg-color-name">FG</div>
                <div class="sg-color-value">#2f3590</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch party-LP"></div>
                <div class="sg-color-name">Labour Party</div>
                <div class="sg-color-name">LAB</div>
                <div class="sg-color-value">#c72831</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch party-SF"></div>
                <div class="sg-color-name">Sinn Féin</div>
                <div class="sg-color-name">SF</div>
                <div class="sg-color-value">#088560</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch party-RI"></div>
                <div class="sg-color-name">Renua Ireland</div>
                <div class="sg-color-name">RI</div>
                <div class="sg-color-value">#168dcd</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch party-IO"></div>
                <div class="sg-color-name">Independants & other</div>
                <div class="sg-color-name">IO</div>
                <div class="sg-color-value">#000</div>
              </div>
              <div class="sg-color">
                  <div class="sg-color-swatch party-GP"></div>
                  <div class="sg-color-name">Green Party</div>
                  <div class="sg-color-name">GP</div>
                  <div class="sg-color-value">#b4d144</div>
              </div>
              <div class="sg-color">
                  <div class="sg-color-swatch aaa-pbp"></div>
                  <div class="sg-color-name">Anti-Austerity Alliance–People Before Profit</div>
                  <div class="sg-color-name">AAA-PBP</div>
                  <div class="sg-color-value">#c4568b</div>
              </div>
              <div class="sg-color">
                  <div class="sg-color-swatch party-SD"></div>
                  <div class="sg-color-name">Social Democrats</div>
                  <div class="sg-color-name">SD</div>
                  <div class="sg-color-value">#1dafec</div>
              </div>
              
            </div><!--/.sg-color-grid-->
          </div><!--/.sg-colors-->

          <!-- Manually Add icons here -->
          <h3>Issue Tracker icons</h3>
          <div class="sg-color-grid" style="font-size: 2em;">
            <i class="issue-icon icon-main"></i>
            <i class="issue-icon icon-health"></i>
            <i class="issue-icon icon-agriculture"></i>
            <i class="issue-icon icon-childcare"></i>
            <i class="issue-icon icon-crime"></i>
            <i class="issue-icon icon-economy"></i>
            <i class="issue-icon icon-education"></i>
            <i class="issue-icon icon-financial"></i>
            <i class="issue-icon icon-housing"></i>
            <i class="issue-icon icon-political-reform"></i>
            <i class="issue-icon icon-public-sector-reform"></i>
            <i class="issue-icon icon-regional"></i>
            <i class="issue-icon icon-social"></i>
          </div>

          <h3>Party Icons</h3>

          <div class="sg-color-grid">
            <i class="party-logo party-logo--lp"></i>
            <i class="party-logo party-logo--ff"></i>
            <i class="party-logo party-logo--fg"></i>
            <i class="party-logo party-logo--gp"></i>
            <i class="party-logo party-logo--sd"></i>
            <i class="party-logo party-logo--aaa"></i>
            <i class="party-logo party-logo--ri"></i>
          </div>

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style='font-family: "Open Sans","Roboto","Helvetica","Roboto",sans-serif;'>"Open Sans","Roboto","Helvetica","Roboto",sans-serif;</dd>

              <dt>Secondary font</dt>
              <dd style='font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;'>
                Helvetica Neue",Helvetica,Arial,sans-serif;
              </dd>

              <dt>Heading Font:</dt>
              <dd style='font-family: "DINWeb-Bold", Arial, Helvetica, sans-serif;'>"DINWeb-Bold", Arial, Helvetica, sans-serif;</dd>


              <dt>Sub-heading Font:</dt>
              <dd style='font-family: "DINWeb-Medium", Arial, Helvetica, sans-serif;'>"DINWeb-Medium", Arial, Helvetica, sans-serif;</dd>

            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>

