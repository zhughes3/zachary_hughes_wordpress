/*
 * The purpose of this script is to allow the user to be redirected to the login page upon pushing escape.
 * If not logged in, the user will be presented with the login form. If already logged in, the user will go
 * to the Wordpress admin dashboard.
 */

document.addEventListener('keydown', (event) => {
  const keyName = event.key;

  if (keyName === 'Escape') {
    // do not alert when only Control key is pressed.
    var postfix = 'wp-admin/index.php';
    window.location.href = prefix(window.location.href, '/') + 'wp-admin/index.php';
    return;
  }
}, false);

function prefix(str, lastChar, startIdx) {
    if (startIdx) {
      return str.substring(0, str.lastIndexOf(lastChar) + 1);
    } else {
      return str.substring(startIdx, str.lastIndexOf(lastChar) + 1);
    }
}
