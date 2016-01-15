<?php
  include('usersession.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Your Home Page</title>
    <!-- Import polymer HTML files-->
    <link rel="import" href="bower_components/paper-toolbar/paper-toolbar.html">
    <link rel="import" href="bower_components/paper-tabs/paper-tabs.html">
    <link rel="import" href="bower_components/iron-flex-layout/iron-flex-layout.html">
    <link rel="import" href="bower_components/paper-card/paper-card.html">
    <link rel="import" href="bower_components/iron-image/iron-image.html">
    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/iron-ajax/iron-ajax.html">
    <link rel="import" href="bower_components/iron-media-query/iron-media-query.html">
    <link rel="import" href="bower_components/paper-drawer-panel/paper-drawer-panel.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-menu/paper-menu.html">
    <link rel="import" href="bower_components/paper-item/paper-item.html">
    <link rel="import" href="bower_components/paper-header-panel/paper-header-panel.html">
    <link rel="import" href="bower_components/neon-animation/neon-animated-pages.html">
    <link rel="import" href="bower_components/neon-animation/neon-animatable.html">
    <link rel="import" href="bower_components/font-roboto/roboto.html">
    <link rel="import" href="element/business-home.html">
    <link rel="import" href="element/business-add-printer.html">
    <style>
      body {
        font-family: Roboto;
      }
      paper-drawer-panel [main]{
        color: #000000;
      }
      paper-drawer-panel [drawer]{
        background-color: #22A7F0;
        color: white;
      }
    </style>
  </head>

  <body class="fullbleed vertical layout">
    <template is="dom-bind" id="app">
      <paper-drawer-panel class="flex">
        <paper-header-panel drawer>
          <paper-toolbar drawer>
            <div>Application</div>
          </paper-toolbar>
          <paper-menu selected={{select}} drawer>
            <paper-item>Home Page</paper-item>
            <paper-item>Add Printer</paper-item>
            <paper-item>Pending Print Request</paper-item>
            <paper-item>Manage Printer</paper-item>
            <p>{{select}}</p>
          </paper-menu>
        </paper-header-panel>
        <paper-header-panel main>
          <paper-toolbar>
            <div>Welcome back</div>
            <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
          </paper-toolbar>
          <neon-animated-pages selected="{{select}}">
            <business-home user-id="400001"></business-home>
            <business-add-printer></business-add-printer>
          </neon-animated-pages>
        </paper-header-panel>
      </paper-drawer-panel>
    </template>
  </body>


    <!-- <div id="profile">
      <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
      <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
    <form method="get" action="oAuthRedirect.php">
      <input type="hidden" name="op" value="offline"/>
      <input type = "submit" value = "Sign in with Google"/>
    </form>
  </body> -->
</html>