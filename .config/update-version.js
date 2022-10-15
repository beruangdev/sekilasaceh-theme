const fs = require("fs")
const path = require("path")
const pkg = require("../package.json")

function randomStr(length) {
   var chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
   var charLength = chars.length;
   var result = '';
   for ( var i = 0; i < length; i++ ) {
      result += chars.charAt(Math.floor(Math.random() * charLength));
   }
   return result;
}

let str = `/*
Theme Name: Sekilas Aceh
Theme URI: https://github.com/beruangdev/sekilasaceh-theme
Author: Bilhakki
Author URI: https://bilhakki.com
Description: sekilasaceh-theme is a simple boilerplate WordPress theme with Tailwind CSS.
Version: ${pkg.version}-${randomStr(5)}
License: MIT
License URI: https://github.com/beruangdev/sekilasaceh-theme/blob/master/LICENSE
Text Domain: sekilasaceh-theme
*/
`

fs.writeFileSync(path.resolve(process.cwd(), 'style.css'), str, 'utf8')
