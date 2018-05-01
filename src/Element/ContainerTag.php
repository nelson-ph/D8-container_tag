<?php

namespace Drupal\container_tag\Element;

use Drupal\Core\Render\Element\Container;

/**
 * Provides a render element that wraps child elements in a container.
 *
 * Surrounds child elements with a <tag> and adds attributes such as classes or
 * an HTML ID.
 *
 * Properties:
 * - #optional: Indicates whether the container should render when it has no
 *   visible children. Defaults to FALSE.
 *
 * Usage example:
 *
 * @code
 * $form['needs_accommodation'] = array(
 *   '#type' => 'checkbox',
 *   '#title' => $this->t('Need Special Accommodations?'),
 * );
 *
 * $form['accommodation'] = array(
 *   '#type' => 'container_tag',
 *   '#tag'=>'details',
 *   '#attributes' => array(
 *     'class' => 'accommodation',
 *   ),
 *   '#states' => array(
 *     'invisible' => array(
 *       'input[name="needs_accommodation"]' => array('checked' => FALSE),
 *     ),
 *   ),
 * );
 *
 * $form['accommodation']['diet'] = array(
 *   '#type' => 'textfield',
 *   '#title' => $this->t('Dietary Restrictions'),
 * );
 * @endcode
 *
 * @RenderElement("container_tag")
 */
class ContainerTag extends Container {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $info = parent::getInfo();

    $info['#theme_wrappers'] = ['container_tag'];

    return $info;
  }

}
