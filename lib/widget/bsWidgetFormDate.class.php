<?php

/**
 * sfWidgetFormMootoolsDate represents a date range widget.
 *
 * @package    symfony
 * @subpackage widget
 * @author     Vorontsov S.A. <raven_4@mail.ru>
 * @version    SVN: $Id: sfWidgetFormMootoolsDate.class.php 2011-08-02 12:33:33Z  $
 */
class bsWidgetFormDate extends sfWidgetForm
{
  /**
   * Configures the current widget.
   *
   * Available options:
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    $this->addOption('format', '%day%/%month%/%year%');
    if(isset($options['years']))
      $years = $options['years'];
    else
      $years = range(date('Y') - 15, date('Y') + 5);
    $this->addOption('years', array_combine($years, $years));
    $this->addOption('date_widget', new sfWidgetFormDate(array('format' => $this->getOption('format'), 'years' => $this->getOption('years'))));
    parent::configure($options, $attributes);
  }
  
  protected function valuetotime($value)
  {
    if(is_array($value))
      return strtotime(implode('-', $value));
    else if(!is_int($value))
      return strtotime($value);
    else return $value;
  }
  /**
   * @param  string $name        The element name
   * @param  string $value       The date displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    if(is_array($value)) $value = implode('-', $value);
    $values = $this->valuetotime($value);
    return $this->getOption('date_widget')->render($name, $value, array_merge($attributes, array('class' => 'input-small')), $errors).
           ' <a class="btn" href="#" id = "'.$this->generateId($name).'_mootools_control_link"'.' data-date-format="dd-mm-yyyy" data-date="'.$value.'"><i class="icon-calendar" ></i></a>'.
           $this->renderTag('input', array('type' => 'hidden', 'size' => 10, 'id' => $id = $this->generateId($name).'_mootools_control', 'readonly' => 'readonly', 'value' => ($value)?date('d.m.Y', $values):'')).
           <<<SCRIPT
           <script type="text/javascript">
            $('#{$this->generateId($name)}_mootools_control_link').datepicker({
              language: 'ru',
              autoclose: true,
            })
            .on('changeDate', function(e){
                var y = e.date.getFullYear(),
                    _m = e.date.getMonth() + 1,
                    m = (_m > 9 ? _m : '0'+_m),
                    _d = e.date.getDate(),
                    d = (_d > 9 ? _d : '0'+_d);
                // $(this).text(y + '-' + m + '-' + d);
                $('#{$this->generateId($name.'[day]')}').val(_d);
                $('#{$this->generateId($name.'[month]')}').val(_m);
                $('#{$this->generateId($name.'[year]')}').val(y);
                $('#{$this->generateId($name)}_mootools_control_link').datepicker('hide').hide();
                $('#{$this->generateId($name)}_mootools_control_link').css('display', 'inline-block');
            })

            {$this->generateId($name)}_handler = function()
            {
              _d = $('#{$this->generateId($name.'[day]')}').val();
              _m = $('#{$this->generateId($name.'[month]')}').val();
              y  = $('#{$this->generateId($name.'[year]')}').val();
              if(!_d || !_m || !y)
              {
                a = new Date();
                _d = a.getDate();
                _m = a.getMonth() + 1;
                y = a.getFullYear();
              }
              d = (_d > 9 ? _d : '0'+_d);
              m = (_m > 9 ? _m : '0'+_m);
              $('#{$this->generateId($name)}_mootools_control_link').datepicker('update', d + '-' + m + '-' + y);
            }
            $('#{$this->generateId($name.'[day]')}').change( {$this->generateId($name)}_handler);
            $('#{$this->generateId($name.'[month]')}').change( {$this->generateId($name)}_handler);
            $('#{$this->generateId($name.'[year]')}').change( {$this->generateId($name)}_handler);
          </script>
SCRIPT;
  }
}
