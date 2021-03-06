<?php

namespace Drupal\test_page_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a test form for testing assertions.
 */
class TestForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['test_table'] = [
      '#type' => 'table',
      '#header' => ['Column 1', 'Column 2', 'Column 3'],
      'row_1' => [
        'col_1' => ['#plain_text' => 'foo'],
        'col_2' => ['#plain_text' => 'bar'],
        'col_3' => ['#plain_text' => 'baz'],
      ],
      'row_2' => [
        'col_1' => ['#plain_text' => 'one'],
        'col_2' => ['#plain_text' => 'two'],
        'col_3' => ['#plain_text' => 'three'],
      ],
    ];

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => 'Name',
      '#default_value' => 'Test name',
    ];

    $form['description'] = [
      '#type' => 'textfield',
      '#title' => 'Description',
      '#default_value' => '',
    ];

    $form['options'] = [
      '#type' => 'select',
      '#title' => 'Options',
      '#options' => [
        1 => 'one',
        2 => 'two',
        3 => 'three',
      ],
      '#default_value' => 2,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'test_page_form';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty on purpose, we just want to test the rendered form elements.
  }

}
