<?php

// LOGIC FOR NAV COMPONENT
// this function get theme class
function get_theme_class()
{
  return isset($_REQUEST['theme']) ?
    (($_REQUEST['theme'] == 'dark') ? 'bg-dark navbar-dark' : '') :
    'vacio';
}

// get current theme
function get_current_theme(): string
{
  if (isset($_REQUEST['theme'])) {
    return '?theme=' . $_REQUEST['theme'];
  }
  return '';
}
// ----------------



// LOGIC FOR HEADER COMPONENT
// this function get the next theme for change
function change_theme()
{
  if (isset($_REQUEST['theme'])) {
    $current = $_REQUEST['theme'];
    $data = ($current == 'dark') ? '?theme=light' : '?theme=dark';
    return $data;
  }
  return '?theme=dark';
}

function print_current_icon()
{
  $dark = "<i class=\"bi bi-moon-stars\"></i>";
  $light = "<i class=\"bi bi-brightness-high\"></i>";


  if (isset($_REQUEST['theme'])) {
    $current = $_REQUEST['theme'];
    $data = ($current == 'dark') ? $dark : $light;
    echo $data;
  } else {
    echo $light;
  }
}
