<?php
/**
 * Check if a module with given name exists
 *
 * @param $moduleName The module name
 * @return bool Returns true if module exists, false otherwise
 */
function moduleExists($moduleName) {
	$target = getModulePath($moduleName);

	if (class_exists($target)) {
		return true;
	}

	return false;
}

/**
 * Get full path to a module
 *
 * @param $moduleName Module name
 * @return string Full path to the given module
 */
function getModulePath($moduleName) {
	return 'App\Module\\' . ucfirst($moduleName) . '\\' . ucfirst($moduleName);
}

/**
 * This function adds a route for a module's admin
 *
 * @param $moduleName string The module name
 * @param $routeType string The type of route to be used (default is GET)
 */
function defineModuleAdmin($moduleName, $routeType = 'get') {
	Route::$routeType(sprintf("/admin/%s", $moduleName),
		sprintf("%s@admin", ucfirst($moduleName) . 'Controller'))->middleware('auth');
}

function frontTpl($layout) {
	return $aft . '/' . $layout;
}
