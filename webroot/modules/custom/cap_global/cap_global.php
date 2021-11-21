<?php

use Drupal\views\ViewExecutable;
use Drupal\views\Plugin\views\query\QueryPluginBase;
use Drupal\node\Entity\Node;

/**
 * @file
 */

function cap_global_views_query_alter(ViewExecutable $view, QueryPluginBase $query) {

  die();
  $view_id = null;
  switch ($view->id()) {
    case 'our_markets':
    case 'our_units':
    case 'our_categories':
      $view_id = $view->id();
  }

  if (isset($view_id)) {
    $x = 1;
  }
}

function cap_global_preprocess_menu(&$variables, $hook)
{
  die();

  $x = 1;
  if ($hook == 'menu__main') {
    /*
    function _access_a_nodes_field($fieldName)
    {
      if (\Drupal::routeMatch()->getParameter('node')) {
        $nid = \Drupal::routeMatch()->getParameter('node');
        $node = \Drupal\node\Entity\Node::load($nid->id());
        return $node->get($fieldName)->getValue();
      }
      return NULL;
    }

    $myNodeTitle = _access_a_nodes_field('title');
    $myNodeTitleValue =$myNodeTitle[0]['value'];
    $myField = _access_a_nodes_field('field_spag_body');
    $myFieldValue =$myField[0]['value'];

    dpm($myNodeTitleValue);
    dpm($myFieldValue);
    */

    foreach ($variables['items'] as $key => $item) {
      $x = $item;
      //if ($myNodeTitleValue == 'Who Are We?') {
      //  if ($item['title'] == 'About') {
      //    unset($variables['items'][$key]);
      //  }
      //}
    }
  }
}
