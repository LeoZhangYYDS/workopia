<?php
/**
 * Get the base path
 * 不用在引入的时候输入 . or ..
 * @param string $path
 * @return string
 */
function basePath($path = ''){
  return __DIR__ . '/' . $path;
};


/**
 * Load a view
 * 在index.php引入home.php的时候只用call这个function，然后输入名称就好
 * @param string $name
 * @return void
 * 
 */
function loadView($name, $data = []){

  $viewPath = basePath("views/{$name}.view.php");

  if (file_exists($viewPath)) {
    extract($data);
    require $viewPath;
  } else {
    echo "View '{$name} not found!'";
  }

}


/**
 * Load a Partial
 * 在home.php引入partial只用call这个function，然后输入名称就好
 * @param string $name
 * @return void
 * 
 */
function loadPartial($name){
  $partialPath = basePath("views/partials/{$name}.php");

  if (file_exists($partialPath)) {
   
    require $partialPath;
  } else {
    echo "Partial '{$name} not found!'";
  }

}



/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value){
  echo '<pre>';
  die(var_dump($value));
}


/**
 * Format salary
 * 
 * @param string $salary
 * @return string Formatted Salary
 */
function formatSalary($salary)
{
  return '$' . number_format(floatval($salary));
}