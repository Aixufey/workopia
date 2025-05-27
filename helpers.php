<?php

declare(strict_types=1);

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath(string $path = ''): string
{
  return __DIR__ . '/' . $path;
}


/**
 * Load a view from the base path
 * E.g. loading a `home.view.php` script we can pass in the name `home` <p>
 * </p>
 * 
 * @param string $name
 * @return void
 */
function loadView(string $name): void
{
  $viewPath = basePath("views/{$name}.view.php");

  if (file_exists($viewPath)) {
    require $viewPath;
  } else {
    echo "View '{$name}' not found!";
  }
}

/**
 * Load a partial that is reusable code from subfolder of views
 * @param string $name
 * @return void
 */
function loadPartial(string $name): void
{
  $partialPath = basePath("views/partials/{$name}.php");
  if (file_exists($partialPath)) {
    require $partialPath;
  } else {
    echo "View '{$name}' not found!";
  }
}
